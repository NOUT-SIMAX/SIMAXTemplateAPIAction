<?php
/**
 * Created by PhpStorm.
 * User: ninon
 * Date: 13/02/2018
 * Time: 15:06
 */

namespace NOUT\Rest;


use NOUT\Entity\OnlineError;
use NOUT\Entity\UsernameToken;

class Service
{
    /** @var string  */
    protected $_endpoint='';

    /** @var UsernameToken|null  */
    protected $_usernameToken = null;

    /** @var string  */
    protected $_sessionToken='';

    /** @var string  */
    protected $_apiuuid='';

    /** @var string  */
    protected $_actionContext='';

    /** @var bool  */
    protected $_apiuser = false;

    /**  @var bool */
    protected $_logActive = false;

    /** @var array */
    protected $_options = array();

    public function __construct($enpoint, UsernameToken $usernameToken)
    {
        $this->_endpoint = $enpoint;
        $this->_usernameToken = $usernameToken;
    }

    /**
     * @param array $options
     */
    public function setCommonOptions(array $options)
    {
        $this->_options = $options;
    }

    /**
     * @param string $context
     */
    public function setActionContext($context=''){
        $this->_actionContext = $context;
    }

    /**
     * @param string $apiuuid
     */
    public function setAPIUUID($apiuuid){
        $this->_apiuuid = $apiuuid;
    }

    /**
     * @param bool $val
     */
    public function useApiUser($val){
        $this->_apiuser = boolval($val);
    }

    /**
     * @param bool $val
     */
    public function setLogActive($val)
    {
        $this->_logActive = boolval($val);
    }

    /**
     * @return bool
     * @throws \Exception
     */
    public function bConnecte()
    {
        $this->_usernameToken->ComputeCryptedPassword();
        $oRet = $this->__oExecuteMethod(
            self::METHOD_GetTokenSession,
            array(
                'Username'  => $this->_usernameToken->Username,
                'Password'  => $this->_usernameToken->Password,
                'nonce'     => $this->_usernameToken->Nonce,
                'created'   => $this->_usernameToken->Created,
            ),
            array(),
            false
        );

        if ($oRet instanceof HTTPResponse)
        {
            $this->_sessionToken = $oRet->content;
            return true;
        }

        return false;
    }

    /**
     * @param UsernameToken $ExtranetUser
     * @param $form
     * @return bool
     * @throws \Exception
     */
    public function bConnecteExtranet(UsernameToken $ExtranetUser, $form)
    {
        $ExtranetUser->ComputeCryptedPassword();
        $this->_usernameToken->ComputeCryptedPassword();
        $oRet = $this->__oExecuteMethod(
            self::METHOD_GetTokenSession,
            array(
                'Username'  => $this->_usernameToken->Username,
                'Password'  => $this->_usernameToken->Password,
                'nonce'     => $this->_usernameToken->Nonce,
                'created'   => $this->_usernameToken->Created,
            ),
            array(
                'Username'  => $ExtranetUser->Username,
                'Password'  => $ExtranetUser->Password,
                'nonce'     => $ExtranetUser->Nonce,
                'created'   => $ExtranetUser->Created,
                'form'      => $form,
            ),
            false
        );

        if ($oRet instanceof HTTPResponse)
        {
            $this->_sessionToken = $oRet->content;
            return true;
        }

        return false;
    }

    /**
     * @return bool
     * @throws \Exception
     */
    public function bDisconnect()
    {
        //disconnect
        $oRet = $this->__oExecuteMethod(self::METHOD_Disconnect, array(), array(), true);
        return $oRet instanceof HTTPResponse;
    }

    /**
     * @return bool|\SimpleXMLElement
     * @throws \Exception
     */
    public function GetLanguages()
    {
        return $this->_ExecuteMethod(self::METHOD_GetLanguages, array(), array(), false);
    }

    /**
     * @return bool|string
     * @throws \Exception
     */
    public function sGetBDD()
    {
        return $this->_ExecuteMethod(self::METHOD_GetBDD, array(), array(), false);
    }

    /**
     * @return bool|string
     * @throws \Exception
     */
    public function sGetVersion()
    {
        return $this->_ExecuteMethod(self::METHOD_GetVersion, array(), array(), false);
    }

    /**
     * @return bool|HTTPResponse
     * @throws \Exception
     */
    public function oGetWSDL()
    {
        return $this->_ExecuteMethod(self::METHOD_GetWSDL, array(), array(), false);
    }

    /**
     * @param array $options
     * @return bool|\SimpleXMLElement
     * @throws \Exception
     */
    public function GetUserGroupList(array $options=array())
    {
        return $this->_ExecuteMethod(
            self::METHOD_GetUserGroupList,
            array_merge($this->_options, $options),
            array(),
            false);
    }

    /**
     * @param array $options
     * @return bool|\SimpleXMLElement
     * @throws \Exception
     */
    public function GetListElemList(array $options=array())
    {
        return $this->_ExecuteMethod(
            self::METHOD_GetListElemList,
            array_merge($this->_options, $options),
            array(),
            false);
    }

    /**
     * @param array $options
     * @return bool|\SimpleXMLElement
     * @throws \Exception
     */
    public function GetUserList(array $options=array())
    {
        return $this->_ExecuteMethod(
            self::METHOD_GetUserList,
            array_merge($this->_options, $options),
            array(),
            false);
    }

    /**
     * @param array $options
     * @return bool|\SimpleXMLElement
     * @throws \Exception
     */
    public function GetTableList(array $options=array())
    {
        return $this->_ExecuteMethod(
            self::METHOD_GetTableList,
            array_merge($this->_options, $options),
            array(),
            false);
    }

    /**
     * @param string $form
     * @param array $options
     * @return bool|\SimpleXMLElement
     * @throws \Exception
     */
    public function GetTableChild($form, array $options=array())
    {
        return $this->_ExecuteMethod(
            urlencode(utf8_decode($form)).'/'.self::METHOD_GetTableChild,
            array(),
            array_merge($this->_options, $options),
            false
        );
    }

    /**
     * @param string $form
     * @param array $options
     * @return bool|\SimpleXMLElement
     * @throws \Exception
     */
    public function GetExtranetUserList($form, array $options=array())
    {
        return $this->_ExecuteMethod(
            urlencode(utf8_decode($form)).'/'.self::METHOD_GetExtranetUserList,
            array(),
            array_merge($this->_options, $options),
            false
        );
    }

    /**
     * @param $user
     * @return bool|mixed
     * @throws \Exception
     */
    public function bGetUserExists($user)
    {
        $ret = $this->_ExecuteMethod(self::METHOD_GetUserExists, array('login'=>$user), array(), false);
        if ($ret !== false)
        {
            return json_decode($ret);
        }

        return false;
    }

    /**
     * @param string $form
     * @param null|string $sCommencePar
     * @param array $filter
     * @param array $options
     * @return bool|\SimpleXMLElement
     * @throws \Exception
     */
    public function Request($form, $sCommencePar=null, array $filter = array(), array $options = array())
    {
        if (empty($sCommencePar)){
            return $this->_ExecuteMethod(
                urlencode(utf8_decode($form)).'/',
                $filter,
                array_merge($this->_options, $options),
                true);
        }

        return $this->_ExecuteMethod(
            urlencode(utf8_decode($form)).'/'.urlencode(utf8_decode($sCommencePar)).'/Request',
            $filter,
            array_merge($this->_options, $options),
            true);
    }

    /**
     * @param string $form
     * @param null|string $sCommencePar
     * @param array $filter
     * @param array $options
     * @return bool|\SimpleXMLElement
     * @throws \Exception
     */
    public function GetList($form, $sCommencePar=null, array $filter = array(), array $options = array())
    {
        if (empty($sCommencePar)){
            return $this->_ExecuteMethod(
                urlencode(utf8_decode($form)).'/List',
                $filter,
                array_merge($this->_options, $options),
                true);
        }

        return $this->_ExecuteMethod(
            urlencode(utf8_decode($form)).'/'.urlencode(utf8_decode($sCommencePar)).'/List',
            $filter,
            array_merge($this->_options, $options),
            true);
    }


    /**
     * @param string $form
     * @param null|string $sCommencePar
     * @param array $filter
     * @param array $options
     * @return bool|\SimpleXMLElement
     * @throws \Exception
     */
    public function Search($form, $sCommencePar=null, array $filter = array(), array $options = array())
    {
        if (empty($sCommencePar)){
            return $this->_ExecuteMethod(
                urlencode(utf8_decode($form)).'/Search',
                $filter,
                array_merge($this->_options, $options),
                true);
        }

        return $this->_ExecuteMethod(
            urlencode(utf8_decode($form)).'/'.urlencode(utf8_decode($sCommencePar)).'/Search',
            $filter,
            array_merge($this->_options, $options),
            true);

    }

    /**
     * @param string $form
     * @param null|string $sCommencePar
     * @param array $filter
     * @param array $options
     * @return bool|int
     * @throws \Exception
     */
    public function GetNbElement($form, $sCommencePar=null, array $filter = array(), array $options = array())
    {
        if (empty($sCommencePar)){
            return intval($this->_ExecuteMethod(
                urlencode(utf8_decode($form)).'/GetNbElement',
                $filter,
                array_merge($this->_options, $options),
                true));
        }

        return intval($this->_ExecuteMethod(
            urlencode(utf8_decode($form)).'/'.urlencode(utf8_decode($sCommencePar)).'/GetNbElement',
            $filter,
            array_merge($this->_options, $options),
            true));
    }


    /**
     * @param string $form
     * @param string $enreg
     * @param array $options
     * @return bool|\SimpleXMLElement
     * @throws \Exception
     */
    public function Display($form, $enreg, array $options = array())
    {
        return $this->_ExecuteMethod(
            urlencode(utf8_decode($form)).'/'.urlencode(utf8_decode($enreg)).'/',
            array(),
            array_merge($this->_options, $options),
            true);
    }

    /**
     * @param string $form
     * @param string $enreg
     * @param string $colonne
     * @param array $options
     * @return bool|string|HTTPResponse
     * @throws \Exception
     */
    public function GetColInRecord($form, $enreg, $colonne, array $options = array())
    {
        return $this->_ExecuteMethod(
            urlencode(utf8_decode($form)).'/'.urlencode(utf8_decode($enreg)).'/'.urlencode(utf8_decode($colonne)).'/',
            array(),
            $options,
            true);
    }

    /**
     * @return bool|mixed
     * @throws \Exception
     */
    public function oGetMenu()
    {
        return $this->_ExecuteMethod(self::METHOD_GetMenu, array(), array(), true);
    }
    /**
     * @return bool|mixed
     * @throws \Exception
     */
    public function oGetToolbar()
    {
        return $this->_ExecuteMethod(self::METHOD_GetToolbar, array(), array(), true);
    }
    /**
     * @return bool|mixed
     * @throws \Exception
     */
    public function oGetCentralIcon()
    {
        return $this->_ExecuteMethod(self::METHOD_GetCentralIcon, array(), array(), true);
    }

    /**
     * @param string $form
     * @param bool $modeListe
     * @param bool $readable
     * @return bool|\SimpleXMLElement
     * @throws \Exception
     */
    public function GetXSD($form, $modeListe = false, $readable = true)
    {
        return $this->_ExecuteMethod(self::METHOD_GetXSD, array(
                $form => '',
                'XSDListe'=> $modeListe ? '1' : '0',
                'XSDLisible' => $readable ? '1' : '0',
            ),
            array(),
            true);
    }

    /**
     * @param bool $effective, true : restart NOUTOnline, false only test if has right to restart
     * @return bool|string
     * @throws \Exception
     */
    public function bReStart($effective=false)
    {
        $ret = $this->_ExecuteMethod(
            self::METHOD_ReStart,
            array('TestRestart' => $effective ? '0' : '1',),
            array(),
            true
        );
        if ($ret !== false)
        {
            return json_decode($ret);
        }
        return false;
    }

    /**
     * @param string $form
     * @return bool|string
     * @throws \Exception
     */
    public function sGetChecksum($form)
    {
        return $this->_ExecuteMethod(urlencode(utf8_decode($form)).'/'.self::METHOD_GetChecksum, array(), array(), true);
    }

    /**
     * @return bool|string
     * @throws \Exception
     */
    public function sGetLangageVersion()
    {
        return $this->_ExecuteMethod(self::METHOD_GetLangageVersion, array(), array(), true);
    }

    /**
     * @param string $method
     * @param array $params
     * @param array $options
     * @param $bWithIdentification
     * @return bool|HTTPResponse
     * @throws \Exception
     */
    protected function __oExecuteMethod($method, array $params, array $options, $bWithIdentification)
    {
        $sURI = $this->_sCreateRequest($method, $params, $options, $bWithIdentification);
        $oRet = $this->__oExecute($method, $sURI);
        if ( ! ($oRet instanceof HTTPResponse)){
            return false;
        }
        return $oRet;
    }

    /**
     * @param string $method
     * @param array $params
     * @param array $options
     * @param bool $bWithIdentification
     * @return bool|mixed|HTTPResponse|\SimpleXMLElement
     * @throws \Exception
     */
    protected function _ExecuteMethod($method, array $params, array $options, $bWithIdentification)
    {
        $oRet = $this->__oExecuteMethod($method, $params, $options, $bWithIdentification);
        if ( ! ($oRet instanceof HTTPResponse)){
            return false;
        }

        $sContentType = $oRet->getContentType();
        switch ($sContentType)
        {
            case 'application/xml':
                $content = $oRet->isUtf8() ? $oRet->content : utf8_encode($oRet->content);
                return simplexml_load_string($content);
            case 'text/plain':
                $content = $oRet->isUtf8() ? $oRet->content : utf8_encode($oRet->content);
                return $content;
            case 'application/json':
                $content = $oRet->isUtf8() ? $oRet->content : utf8_encode($oRet->content);
                return json_decode($content);
            default:
                return $oRet;
        }
    }

    /**
     * @param $sAction
     * @param $sURI
     * @return HTTPResponse
     * @throws \Exception
     */
    protected function __oExecute($sAction, $sURI)
    {
        if ($this->_logActive){
            $this->__logRequest($sURI, $sAction);
        }

        try {
            /** @var HTTPResponse $ret */
            $ret = $this->_sExecute_cURL($sURI);   // on utilise l'extension curl
        }
        catch(\Exception $e)
        {
            if ($this->_logActive){
                $this->__logResponseError($e->getMessage(), false);
            }
            throw $e;
        }

        if ($this->_logActive){
            $this->__logResponse($ret);
        }
        return $ret;
    }


    /**
     * methode d'affichage de log
     * @param $uri
     * @param $action
     */
    protected function __logRequest($uri, $action){

        echo "<h1>$action</h1>";
        echo "<h3>REQUEST</h3>";
        echo "<pre style=\"border: solid 1px blue; padding: 6px; color: blue;\">";
        echo $uri . "\n";
        echo "</pre>";

        flush();
    }

    /**
     * methode d'affichage de log
     * @param $reponse
     * @param $header
     * @param $bIsUtf8
     */
    protected function __logResponse(HTTPResponse $oReponse){
        $sContentType = $oReponse->getContentType();
        $bIsUtf8 = $oReponse->isUtf8();
        $ret = $oReponse->isUtf8() ? $oReponse->content : utf8_encode($oReponse->content);

        switch ($sContentType)
        {
            case 'application/json':
                $data = json_decode($ret);
                $ret = json_encode($data, JSON_PRETTY_PRINT);
                break;
        }

        echo "<h3>RESPONSE</h3>";
        echo "<pre style=\"border: solid 1px green; padding: 6px; color: green;\">";
        echo htmlentities($oReponse->header_string) . "\n";
        echo htmlentities($ret) . "\n";
        echo "</pre>";

        flush();
    }

    /**
     * methode d'affichage de log
     * @param $reponse
     * @param $header
     * @param $bIsUtf8
     */
    protected function __logResponseError($reponse, $bIsUtf8){
        echo "<h3>RESPONSE</h3>";
        echo "<pre style=\"border: solid 1px green; padding: 6px; color: red;\">";
        echo htmlentities($bIsUtf8 ? $reponse : utf8_encode($reponse)) . "\n";
        echo "</pre>";

        flush();
    }

    /**
     * @param string $sURI
     * @return HTTPResponse
     * @throws \Exception
     */
    protected function _sExecute_cURL($sURI)
    {
        if (! extension_loaded('curl')){
            throw new \Exception("L'extension cUrl doit être disponible pour l'utilisation de ce service", 1);
        }

        //initialisation de curl
        $curl = curl_init($sURI);

//        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//            ConfigurationDialogue::HTTP_SIMAX_CLIENT_IP     . ': '  . $this->__clInfoClient->getIP(),
//            ConfigurationDialogue::HTTP_SIMAX_CLIENT        . ': '  . $this->__ConfigurationDialogue->getSociete(),
//            ConfigurationDialogue::HTTP_SIMAX_CLIENT_Version. ': '  . $this->__ConfigurationDialogue->getVersion(),
//        ));
        curl_setopt($curl, CURLOPT_FORBID_REUSE, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 300);

        // ------------------------------------------------
        // Contenu du fichier
        curl_setopt($curl, CURLOPT_HEADER, 1); // Demande des headers
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);

        // Vérifie si une erreur survient
        $this->_sExecute_cURL_TestError($curl);

        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $headers = substr($output, 0, $header_size);
        $output = substr($output, $header_size);

        curl_close($curl);
        return $this->_oMakeResponse($output, $headers);
    }

    /**
     * @param $output
     * @param $headers
     * @return HTTPResponse
     * @throws \Exception
     */
    protected function _oMakeResponse($output, $headers)
    {
        $ret = new HTTPResponse($output, $headers);
        if ($ret->getStatus()!=200)
        {
            if ($this->_logActive){
                $this->__logResponse($output, $headers, true);
            }

            $no_error = new OnlineError(0, 0, 0, '');
            $no_error->parseFromREST($output);
            //il y a une erreur, il faut parser l'erreur
            throw new \Exception($no_error->getMessage(), $no_error->getCode());
        }
        return $ret;
    }


    /**
     * @param $curl
     * @throws \Exception
     */
    protected function _sExecute_cURL_TestError($curl)
    {
        $curl_errno = curl_errno($curl);
        if(!$curl_errno){
            return ;
        }

        switch ($curl_errno)
        {
            case CURLE_OPERATION_TIMEDOUT:
                {
                    $curl_errmess = 'Failed to connect to '.$this->_endpoint.' : Connection timed out';
                    break;
                }

            default:
                {
                    $curl_errmess = curl_error($curl);
                    break;
                }

        }

        $e = new \Exception($curl_errmess);
        curl_close($curl);
        throw $e;
    }
    

    /**
     * fonction creant la requette rest
     *
     * @param string $sAction le nom de l'action
     * @param array $aTabParam tableau des parametres
     * @param array $aTabOption tableau des options
     * @param bool $bWithIdentification
     * @return string la requette rest
     */
    private function _sCreateRequest($sAction, array $aTabParam, array $aTabOption, $bWithIdentification)
    {
        $sUrl = $this->_endpoint."/$sAction?";

        $make_query = function ( array $aTabParam){
            $sListe = '';
            foreach ($aTabParam as $sKey => $sValue) {
                $sListe .= '&'.urlencode(utf8_decode($sKey)).'='.urlencode(utf8_decode($sValue));
            }
            return $sListe;
        };


        //la liste des paramètres (entre ? et ;)
        if (is_array($aTabParam) && count($aTabParam)>0) {
            $sUrl .= ltrim($make_query($aTabParam),  '&');
        }

        //la liste des options (entre ; et !)
        if (is_array($aTabOption) && count($aTabOption)>0) {
            $sUrl .= ';'.ltrim($make_query($aTabOption),  '&');
        }

        $sBottom = $this->_sCreateIdentification($bWithIdentification);
        if (!empty($sBottom)){
            $sUrl.='!'.ltrim($sBottom, '&');
        }

        return $sUrl;
    }


    /**
     * Retourne la fin de la requette rest (partie identification)
     * @param bool $bWithIdentification
     * @return string la fin de la requette rest
     */
    private function _sCreateIdentification($bWithIdentification)
    {
        $sBottom = '';
        if ($bWithIdentification) {
            $sBottom .= $this->__sGetUsernameToken();

            if (!empty($this->_sessionToken)){
                $sBottom .= '&SessionToken='.urlencode(utf8_decode($this->_sessionToken));
            }

            if (!empty($this->_actionContext)){
                $sBottom .= '&actioncontext='.urlencode(utf8_decode($this->_actionContext));
            }

            if ($this->_apiuser){
                $sBottom .= '&apiuser=1';
            }
        }

        if (!empty($this->_apiuuid)){
            $sBottom .= '&apiuuid='.urlencode(utf8_decode($this->_apiuuid));
        }

        return $sBottom;
    }

    /**
     * @return string la partie username token
     */
    private function __sGetUsernameToken()
    {
        $this->_usernameToken->ComputeCryptedPassword();
        $sBottom    = 'Username='   .urlencode(utf8_decode($this->_usernameToken->Username));
        $sBottom    .= '&Password=' .urlencode(utf8_decode($this->_usernameToken->Password));
        $sBottom    .= '&nonce='    .urlencode(utf8_decode($this->_usernameToken->Nonce));
        $sBottom    .= '&created='  .urlencode(utf8_decode($this->_usernameToken->Created));
        return $sBottom;
    }


    const METHOD_GetLanguages = 'GetLanguages';
    const METHOD_GetBDD = 'GetBDD';
    const METHOD_GetVersion = 'GetVersion';
    const METHOD_GetWSDL = 'GetWSDL';
    const METHOD_GetUserGroupList = 'GetUserGroupList';
    const METHOD_GetListElemList = 'GetListElemList';
    const METHOD_GetUserList = 'GetUserList';
    const METHOD_GetTableList = 'GetTableList';
    const METHOD_GetTableChild = 'GetTableChild';
    const METHOD_GetExtranetUserList = 'GetExtranetUserList';
    const METHOD_GetUserExists = 'GetUserExists';

    const METHOD_GetTokenSession = 'GetTokenSession';
    const METHOD_Disconnect = 'Disconnect';

    const METHOD_GetLangageVersion = 'GetLangageVersion';
    const METHOD_GetChecksum = 'GetChecksum';
    const METHOD_GetXSD = 'GetXSD';
    const METHOD_ReStart = 'ReStart';
    const METHOD_GetMenu = 'GetMenu';
    const METHOD_GetToolbar = 'GetToolbar';
    const METHOD_GetCentralIcon = 'GetCentralIcon';

    const METHOD_Request = 'Request';
    const METHOD_List = 'List';
    const METHOD_GetNbElement = 'GetNbElement';
    const METHOD_Display = 'Display';
    const METHOD_GetColInRecord = 'GetColInRecord';

    const OPTION_Readable = 'readable';
    const OPTION_WantContent = 'wantcontent';
    const OPTION_Ghost = 'ghost';
    const OPTION_DisplayValue = 'displayvalue';
    const OPTION_LanguageCode = 'languagecode';
}