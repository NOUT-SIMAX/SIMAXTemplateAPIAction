<?php

namespace NOUT;

use NOUT\Entity\UsernameToken;
use NOUT\Soap\ClassMap;
use NOUT\Soap\EnumType\ReturnType;
use NOUT\Soap\PackageBase\AbstractSoapClientBase;
use NOUT\Soap\ServiceType\Service;
use NOUT\Soap\StructType\ConfirmResponse;
use NOUT\Soap\StructType\GetTokenSession;
use NOUT\Soap\StructType\OptionDialogue;

abstract class NOUTClient
{
    const ERROR_TRAITERETOUR = 2;
    const ERROR_NEEDEXTSOAP = 9;
    const ERROR_BADCREDENTIALS = 10;
    const ERROR_CONFIRMMESSAGEBOX = 200;
    const ERROR_OUVERTUREFICHE = 201;

    /** @var array|null  */
    protected $_options;

    /** @var UsernameToken|null  */
    protected $_usernameToken = null;

    /** @var OptionDialogue  */
    protected $_optionDialogue;

    /** @var null|string  */
    protected $_tokenSession = null;

    /** @var null|DebugTrace  */
    protected $_debugTrace = null;

    /** @var Service|null */
    protected $_soapService=null;

    public function __construct($options = null)
    {
        $this->_options = array(
            'port' => 8052,
            'host' => 'localhost',
            'username' => null,
            'password' => null,
            'display_value' => 0,
            'return_xsd' => 1,
            'version_min' => 1,
            'version_pref' => 1,
            'with_state_control' => 0,
            'apiuuid' => null,
            'wsdl_file' => null,
        );

        if ($options) {
            $this->_options = $options + $this->_options;
        }

        if (!is_null($this->_options['username']) && !is_null($this->_options['password'])){
            $this->_usernameToken = new UsernameToken($this->_options['username'], $this->_options['password']);
        }

        $this->_optionDialogue = new OptionDialogue(0, 1, 1, $this->_options['return_xsd'], 0, 0, 0, $this->_options['display_value'], 12, $this->_options['with_state_control'], 0, $this->_options['version_min'], $this->_options['version_pref']);

    }

    /**
     * @return bool
     * @throws \Exception
     */
    public function bConnecte()
    {
        if (is_null($this->_usernameToken)){
            throw new \Exception("Pas d'information de connexion disponible");
        }

        if (!is_null($this->_soapService)){
            return true; //on ne se connecte pas 2 fois
        }

        ini_set("default_socket_timeout", 36000);
        try{
            $options = array(
                AbstractSoapClientBase::WSDL_TRACE=>1,
                AbstractSoapClientBase::WSDL_EXCEPTIONS=>1,  //optional parameters for debugging
                AbstractSoapClientBase::WSDL_STREAM_CONTEXT => stream_context_create(array('http' => array(
                    'header' => "x-SIMAXService-Client: Proxy-SOAPClient\nx-SIMAXService-Client-Version: 01.1631.01\nx-SIMAXService-Client-IP: ".$_SERVER["REMOTE_ADDR"],
                ))),
                AbstractSoapClientBase::WSDL_URL => !empty($this->_options['wsdl_file']) ? $this->_options['wsdl_file'] : "http://{$this->_options['host']}:{$this->_options['port']}/getwsdl".(!empty($this->_options['apiuuid']) ? "?!apiuuid={$this->_options['apiuuid']}" : ''),
                AbstractSoapClientBase::WSDL_PROXY_HOST => $this->_options['host'],
                AbstractSoapClientBase::WSDL_PROXY_PORT => (string)$this->_options['port'],
                AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
                AbstractSoapClientBase::WSDL_SOAP_VERSION => SOAP_1_1,
            );

            $oSOAPClient = new Service($options);
        }
        catch (\Exception $e)
        {
            $this->_writeTrace('need php extension soap');
            throw new \Exception($e->getMessage(), self::ERROR_NEEDEXTSOAP);
        }

        if (!empty($this->_options['apiuuid'])){
            $oSOAPClient->setSoapHeaderAPIUUID($this->_options['apiuuid']);
        }
        $oSOAPClient->setSoapHeaderOptionDialogue($this->_optionDialogue);

        $this->_usernameToken->ComputeCryptedPassword();

        $stGetTokenSessionParam = new GetTokenSession($this->_usernameToken);

        $result = $oSOAPClient->GetTokenSession($stGetTokenSessionParam);
        $returnType = $oSOAPClient->getSoapHeaderReturnType();

        $this->_writeLog($oSOAPClient);
        if ($returnType != ReturnType::VALUE_IDENTIFICATION){
            $this->_writeLog($oSOAPClient);
            $username = $this->_usernameToken->Username;
            throw new \Exception("bad credentials ($username)", self::ERROR_BADCREDENTIALS);
        }

        $this->_tokenSession = $result->SessionToken;

        //on a le token de session qui va nous servir par la suite
        $oSOAPClient->setSoapHeaderSessionToken($this->_tokenSession);
        $oSOAPClient->setSoapHeaderUsernameToken($this->_usernameToken);
        $this->_soapService =$oSOAPClient;
        return true;
    }

    public function bDisconnect()
    {
        if (!is_null($this->_soapService)){
            $this->_usernameToken->ComputeCryptedPassword();

            $this->_soapService->setSoapHeaderActionContext(null);
            $this->_soapService->setSoapHeaderAutoValidate(null);

            try
            {
                $this->_soapService->Disconnect(null);
                $this->_writeLog($this->_soapService);
            }
            catch (\Exception $e)
            {
                //on ne fait rien si ça plante sur la déconnexion
            }
            $this->_soapService = null;
        }
        return true;
    }

    /**
     * @param $idcontext
     * @param $rep
     * @return mixed
     * @throws \Exception
     */
    protected function _ConfirmMessageBox($idcontext, $rep)
    {
        $stParam = new ConfirmResponse($rep);
        $this->_soapService->setSoapHeaderActionContext($idcontext);
        $resultRequest = $this->_soapService->ConfirmResponse($stParam);
        $this->_soapService->setSoapHeaderActionContext(null);
        $this->_writeLog($this->_soapService);

        $returnType = $this->_soapService->getSoapHeaderReturnType();
        try {
            return $this->_TraiteRetour($resultRequest, $returnType);
        }
        catch (\Exception $e)
        {
            //on change l'exception
            throw new \Exception("Erreur lors de la confirmation de la message box.\n", self::ERROR_CONFIRMMESSAGEBOX, $e);
        }
    }


    /**
     * @param $resultRequest
     * @param $returnType
     * @return null
     * @throws \Exception
     */
    protected function _TraiteRetour($resultRequest, $returnType)
    {
        switch ($returnType)
        {
            case ReturnType::VALUE_EMPTY:
            {
                return null;
            }

            case ReturnType::VALUE_REPORT:
            {
                $xml = simplexml_load_string($resultRequest->xml);
                return (string)$xml->Report;
            }
            case ReturnType::VALUE_VALIDATE_RECORD:
            {
                $validateError = $this->_soapService->getSoapHeaderValidateError();
                $form = $this->_soapService->getSoapHeaderForm();
                $action = $this->_soapService->getSoapHeaderAction();
                $element = $this->_soapService->getSoapHeaderElement();
                $message = "Une erreur est survenue lors de l'action '$action->title', enregistrement '$element->title'.";
                $message .= ' '.$validateError->Message;
                throw new \Exception($message, self::ERROR_OUVERTUREFICHE);
            }

            case ReturnType::VALUE_AMBIGUOUS_ACTION:
            case ReturnType::VALUE_VALIDATE_ACTION:
            default:
            {
                throw new \Exception("Erreur lors de l'exécution de l'action.\nLe type retour $returnType n'est pas géré.", self::ERROR_TRAITERETOUR);
            }
        }
    }

    /**
     * @param DebugTrace $obj
     */
    public function setDebugTrace(DebugTrace $obj)
    {
        $this->_debugTrace = $obj;
        if ($this->_debugTrace){
            $this->_debugTrace->setHostAndPort($this->_options['host'], $this->_options['port']);
        }
    }

    /**
     * @param $trace
     */
    protected function _writeTrace($trace)
    {
        if (!$this->_debugTrace)
        {
            return;
        }
        $this->_debugTrace->writeTrace($trace);
    }

    /**
     * @param Service $service
     */
    protected function _writeLog(Service $service)
    {
        if (!$this->_debugTrace){
            return ;
        }

        $requestHeaders = $service->getLastRequestHeaders();
        $responseHeaders = $service->getLastResponseHeaders();

        $requestBody=$service->getLastRequest();
        $responseBody=$service->getLastResponse();

        $request = <<<EOT
$requestHeaders
$requestBody
EOT;
        $response = <<<EOT
$responseHeaders
$responseBody
EOT;

        $this->_debugTrace->writeTrace('request : ');
        $this->_debugTrace->writeTrace($request);
        $this->_debugTrace->writeTrace("~~~~~~~~~~~~~~~");
        $this->_debugTrace->writeTrace('response : ');
        $this->_debugTrace->writeTrace($response);
    }

    /**
     * @param array $TabParams
     * @return string
     */
    protected function _TabParams2ParamXML(array $TabParams)
    {
        $paramXML = '';
        foreach($TabParams as $idcolonne=>$valeur)
        {
            $paramXML.="<id_$idcolonne>".htmlspecialchars($valeur, ENT_XML1 | ENT_QUOTES)."</id_$idcolonne>";
        }
        return $paramXML;
    }


    /**
     * @param \SimpleXMLElement $clMessageBoxNode
     * @return false|mixed
     */
    protected function _GetJSONFromMessageBox(\SimpleXMLElement $clMessageBoxNode)
    {
        if (    (count($clMessageBoxNode->ButtonList->Children()->TypeConfirmation)!=1)
            ||  ((int)$clMessageBoxNode->ButtonList->TypeConfirmation!=ConfirmResponse::IDOK)){
            return false;
        }

        return json_decode($clMessageBoxNode->Message);
    }

}