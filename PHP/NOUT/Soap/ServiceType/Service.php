<?php

namespace NOUT\Soap\ServiceType;

use \NOUT\Soap\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Static method getting current SoapClient
     * @return \SoapClient
     */
    public static function _getSoapClient()
    {
        $oSoapClient = parent::getSoapClient();

        $defaultHeaders = (isset($oSoapClient->__default_headers) && is_array($oSoapClient->__default_headers)) ? $oSoapClient->__default_headers : array();
        foreach ($defaultHeaders as $index => $soapHeader) {
            if ($soapHeader->name === 'UsernameToken') {
                $oUsernameToken = $defaultHeaders[$index]->data;
                /** @var \NOUT\Entity\UsernameToken $oUsernameToken */
                $oUsernameToken->ComputeCryptedPassword();
                break;
            }
        }
        return $oSoapClient;
    }


    /**
     * @param       $functionName
     * @param mixed $aparameters
     * @return mixed
     */
    protected function __soapCall($functionName, $aparameters)
    {
        return parent::__soapCall($functionName, array(get_class($aparameters) => $aparameters));
    }



    /**
     * @return string
     */
    public function getSoapHeaderReturnType()
    {
        return $this->outputHeaders['ReturnType'];
    }

    /**
     * @return string
     */
    public function getSoapHeaderActionContext()
    {
        return $this->outputHeaders['ActionContext'];
    }

    /**
     * @return string
     */
    public function getSoapHeaderXSDSchema()
    {
        return $this->outputHeaders['XSDSchema'];
    }

    /**
     * @return \NOUT\Soap\StructType\Action
     */
    public function getSoapHeaderAction()
    {
        return $this->outputHeaders['Action'];
    }

    /**
     * @return \NOUT\Soap\StructType\Filter
     */
    public function getSoapHeaderFilter()
    {
        return $this->outputHeaders['Filter'];
    }

    /**
     * @return \NOUT\Soap\StructType\PlanningFilter
     */
    public function getSoapHeaderPlanningFilter()
    {
        return $this->outputHeaders['PlanningFilter'];
    }

    /**
     * @return \NOUT\Soap\StructType\ConnectedUser
     */
    public function getSoapHeaderConnectedUser()
    {
        return $this->outputHeaders['ConnectedUser'];
    }

    /**
     * @return \NOUT\Soap\StructType\ConnectedExtranet
     */
    public function getSoapHeaderConnectedExtranet()
    {
        return $this->outputHeaders['ConnectedExtranet'];
    }


    /**
     * @return \NOUT\Soap\StructType\Form
     */
    public function getSoapHeaderForm()
    {
        return $this->outputHeaders['Form'];
    }

    /**
     * @return \NOUT\Soap\StructType\Element
     */
    public function getSoapHeaderElement()
    {
        return $this->outputHeaders['Element'];
    }

    /**
     * @return \NOUT\Soap\StructType\Count
     */
    public function getSoapHeaderCount()
    {
        return $this->outputHeaders['Count'];
    }

    /**
     * @return \NOUT\Soap\StructType\ValidateError
     */
    public function getSoapHeaderValidateError()
    {
        return $this->outputHeaders['ValidateError'];
    }

    /**
     * @return integer
     */
    public function getSoapHeaderNextCall()
    {
        return $this->outputHeaders['NextCall'];
    }

    /**
     * @return integer
     */
    public function getSoapHeaderPJSizeCheck()
    {
        return $this->outputHeaders['PJSizeCheck'];
    }

    /**
     * @return \NOUT\Soap\StructType\RecipientCheck
     */
    public function getSoapHeaderRecipientCheck()
    {
        return $this->outputHeaders['RecipientCheck'];
    }

    /**
     * @return string
     */
    public function getSoapHeaderCustomerInfos()
    {
        return $this->outputHeaders['CustomerInfos'];
    }

    /**
     * @return string
     */
    public function getSoapHeaderSessionLanguageCode()
    {
        return $this->outputHeaders['SessionLanguageCode'];
    }

    /**
     * Sets the APIUUID SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $aPIUUID
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAPIUUID($aPIUUID, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        // validation for constraint: string
        if (!is_null($aPIUUID) && !is_string($aPIUUID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aPIUUID, true), gettype($aPIUUID)), __LINE__);
        }
        return $this->setSoapHeader($nameSpace, 'APIUUID', $aPIUUID, $mustUnderstand, $actor);
    }
    /**
     * Sets the UsernameToken SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \NOUT\Soap\StructType\UsernameTokenType $usernameToken
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderUsernameToken(\NOUT\Entity\UsernameToken $usernameToken, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'UsernameToken', $usernameToken, $mustUnderstand, $actor);
    }
    /**
     * Sets the SessionToken SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param $sessionToken
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderSessionToken($sessionToken, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'SessionToken', $sessionToken, $mustUnderstand, $actor);
    }
    /**
     * Sets the CustomerInfos SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $customerInfos
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderCustomerInfos($customerInfos, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        // validation for constraint: string
        if (!is_null($customerInfos) && !is_string($customerInfos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerInfos, true), gettype($customerInfos)), __LINE__);
        }
        return $this->setSoapHeader($nameSpace, 'CustomerInfos', $customerInfos, $mustUnderstand, $actor);
    }
    /**
     * Sets the OptionDialogue SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \NOUT\Soap\StructType\OptionDialogue $optionDialogue
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderOptionDialogue(\NOUT\Soap\StructType\OptionDialogue $optionDialogue, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'OptionDialogue', $optionDialogue, $mustUnderstand, $actor);
    }
    /**
     * Sets the APIUser SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param int $aPIUser
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAPIUser($aPIUser, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        // validation for constraint: int
        if (!is_null($aPIUser) && !(is_int($aPIUser) || ctype_digit($aPIUser))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($aPIUser, true), gettype($aPIUser)), __LINE__);
        }
        return $this->setSoapHeader($nameSpace, 'APIUser', $aPIUser, $mustUnderstand, $actor);
    }
    /**
     * Sets the ActionContext SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $actionContext
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderActionContext($actionContext, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        // validation for constraint: string
        if (!is_null($actionContext) && !is_string($actionContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionContext, true), gettype($actionContext)), __LINE__);
        }
        return $this->setSoapHeader($nameSpace, 'ActionContext', $actionContext, $mustUnderstand, $actor);
    }
    /**
     * Sets the AutoValidate SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param int $autoValidate
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAutoValidate($autoValidate, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        // validation for constraint: int
        if (!is_null($autoValidate) && !(is_int($autoValidate) || ctype_digit($autoValidate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($autoValidate, true), gettype($autoValidate)), __LINE__);
        }
        return $this->setSoapHeader($nameSpace, 'AutoValidate', $autoValidate, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named AddPJ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\AddPJ $parameters
     * @return \NOUT\Soap\StructType\AddPJResponse|bool
     */
    public function AddPJ(\NOUT\Soap\StructType\AddPJ $parameters)
    {
        try {
            $this->setResult($this->__soapCall('AddPJ', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ButtonAction
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces: http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\ButtonAction $parameters
     * @return \NOUT\Soap\StructType\ButtonActionResponse|bool
     */
    public function ButtonAction(\NOUT\Soap\StructType\ButtonAction $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ButtonAction', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Cancel
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces: http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\Cancel $parameters
     * @return \NOUT\Soap\StructType\CancelResponse|bool
     */
    public function Cancel(\NOUT\Soap\StructType\Cancel $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Cancel', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CancelFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\CancelFolder $parameters
     * @return CancelFolderResponse|bool
     */
    public function CancelFolder(\NOUT\Soap\StructType\CancelFolder $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CancelFolder', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CancelMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\CancelMessage $parameters
     * @return CancelMessageResponse|bool
     */
    public function CancelMessage(\NOUT\Soap\StructType\CancelMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CancelMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckCreateElement
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\CheckCreateElement $parameters
     * @return \NOUT\Soap\StructType\CheckCreateElementResponse|bool
     */
    public function CheckCreateElement(\NOUT\Soap\StructType\CheckCreateElement $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CheckCreateElement', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckRecipient
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\CheckRecipient $parameters
     * @return \NOUT\Soap\StructType\CheckRecipientResponse|bool
     */
    public function CheckRecipient(\NOUT\Soap\StructType\CheckRecipient $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CheckRecipient', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CloseFolderList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\CloseFolderList $parameters
     * @return CloseFolderListResponse|bool
     */
    public function CloseFolderList(\NOUT\Soap\StructType\CloseFolderList $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CloseFolderList', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CloseMessageList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\CloseMessageList $parameters
     * @return CloseMessageListResponse|bool
     */
    public function CloseMessageList(\NOUT\Soap\StructType\CloseMessageList $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CloseMessageList', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ConfirmResponse
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\ConfirmResponse $parameters
     * @return \NOUT\Soap\StructType\ConfirmResponseResponse|bool
     */
    public function ConfirmResponse(\NOUT\Soap\StructType\ConfirmResponse $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ConfirmResponse', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Create
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\Create $parameters
     * @return \NOUT\Soap\StructType\CreateResponse|bool
     */
    public function Create(\NOUT\Soap\StructType\Create $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Create', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param CreateFolder $createFolder
     * @return \NOUT\Soap\StructType\CreateFolderResponse|bool
     */
    public function CreateFolder($createFolder)
    {
        try {
            $this->setResult(self::_getSoapClient()->CreateFolder($createFolder));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateFrom
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\CreateFrom $parameters
     * @return \NOUT\Soap\StructType\CreateFromResponse|bool
     */
    public function CreateFrom(\NOUT\Soap\StructType\CreateFrom $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CreateFrom', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\CreateMessage $parameters
     * @return \NOUT\Soap\StructType\CreateMessageResponse|bool
     */
    public function CreateMessage(\NOUT\Soap\StructType\CreateMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CreateMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Delete
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\Delete $parameters
     * @return \NOUT\Soap\StructType\DeleteResponse|bool
     */
    public function Delete(\NOUT\Soap\StructType\Delete $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Delete', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\DeleteFolder $parameters
     * @return DeleteFolderResponse|bool
     */
    public function DeleteFolder(\NOUT\Soap\StructType\DeleteFolder $parameters)
    {
        try {
            $this->setResult($this->__soapCall('DeleteFolder', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeletePJ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\DeletePJ $parameters
     * @return \NOUT\Soap\StructType\DeletePJResponse|bool
     */
    public function DeletePJ(\NOUT\Soap\StructType\DeletePJ $parameters)
    {
        try {
            $this->setResult($this->__soapCall('DeletePJ', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Disconnect
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param Disconnect $disconnect
     * @return DisconnectResponse|bool
     */
    public function Disconnect($disconnect)
    {
        try {
            $this->setResult(self::_getSoapClient()->Disconnect($disconnect));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Display
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\Display $parameters
     * @return \NOUT\Soap\StructType\DisplayResponse|bool
     */
    public function Display(\NOUT\Soap\StructType\Display $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Display', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DrillThrough
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\DrillThrough $parameters
     * @return \NOUT\Soap\StructType\DrillThroughResponse|bool
     */
    public function DrillThrough(\NOUT\Soap\StructType\DrillThrough $parameters)
    {
        try {
            $this->setResult($this->__soapCall('DrillThrough', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named EnterReorderListMode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param EnterReorderListMode $enterReorderListMode
     * @return \NOUT\Soap\StructType\EnterReorderListModeResponse|bool
     */
    public function EnterReorderListMode($enterReorderListMode)
    {
        try {
            $this->setResult($this->__soapCall('EnterReorderListMode', $enterReorderListMode));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Execute
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\Execute $parameters
     * @return \NOUT\Soap\StructType\ExecuteResponse|bool
     */
    public function Execute(\NOUT\Soap\StructType\Execute $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Execute', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Export
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces: http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes: \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders: optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\Export $parameters
     * @return \NOUT\Soap\StructType\ExportResponse|bool
     */
    public function Export(\NOUT\Soap\StructType\Export $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Export', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCalculation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\GetCalculation $parameters
     * @return \NOUT\Soap\StructType\GetCalculationResponse|bool
     */
    public function GetCalculation(\NOUT\Soap\StructType\GetCalculation $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetCalculation', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEndListCalculation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param $getEndListCalculation
     * @return \NOUT\Soap\StructType\GetEndListCalculationResponse|bool
     */
    public function GetEndListCalculation()
    {
        try {
            $this->setResult(self::_getSoapClient()->GetEndListCalculation());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetChart
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\GetChart $parameters
     * @return \NOUT\Soap\StructType\GetChartResponse|bool
     */
    public function GetChart(\NOUT\Soap\StructType\GetChart $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetChart', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetColInRecord
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\GetColInRecord $parameters
     * @return \NOUT\Soap\StructType\GetColInRecordResponse|bool
     */
    public function GetColInRecord(\NOUT\Soap\StructType\GetColInRecord $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetColInRecord', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSubListContent
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\GetSubListContent $parameters
     * @return \NOUT\Soap\StructType\GetSubListContentResponse|bool
     */
    public function GetSubListContent(\NOUT\Soap\StructType\GetSubListContent $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetSubListContent', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetContentFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\GetContentFolder $parameters
     * @return \NOUT\Soap\StructType\GetContentFolderResponse|bool
     */
    public function GetContentFolder(\NOUT\Soap\StructType\GetContentFolder $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetContentFolder', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEndAutomatism
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\GetEndAutomatism $parameters
     * @return \NOUT\Soap\StructType\GetEndAutomatismResponse|bool
     */
    public function GetEndAutomatism(\NOUT\Soap\StructType\GetEndAutomatism $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetEndAutomatism', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFolderList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param GetFolderList $getFolderList
     * @return \NOUT\Soap\StructType\GetFolderListResponse|bool
     */
    public function GetFolderList($getFolderList)
    {
        try {
            $this->setResult(self::_getSoapClient()->GetFolderList($getFolderList));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLanguages
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param GetLanguages $getLanguages
     * @return \NOUT\Soap\StructType\GetLanguagesResponse|bool
     */
    public function GetLanguages($getLanguages)
    {
        try {
            $this->setResult(self::_getSoapClient()->GetLanguages($getLanguages));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\GetListMessage $parameters
     * @return \NOUT\Soap\StructType\GetListMessageResponse|bool
     */
    public function GetListMessage(\NOUT\Soap\StructType\GetListMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetListMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMailServiceStatus
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param GetMailServiceStatus $getMailServiceStatus
     * @return \NOUT\Soap\StructType\GetMailServiceStatusResponse|bool
     */
    public function GetMailServiceStatus($getMailServiceStatus)
    {
        try {
            $this->setResult(self::_getSoapClient()->GetMailServiceStatus($getMailServiceStatus));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPJ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\GetPJ $parameters
     * @return \NOUT\Soap\StructType\GetPJResponse|bool
     */
    public function GetPJ(\NOUT\Soap\StructType\GetPJ $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetPJ', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPlanningInfo
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\GetPlanningInfo $parameters
     * @return \NOUT\Soap\StructType\GetPlanningInfoResponse|bool
     */
    public function GetPlanningInfo(\NOUT\Soap\StructType\GetPlanningInfo $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetPlanningInfo', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStartAutomatism
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\GetStartAutomatism $parameters
     * @return \NOUT\Soap\StructType\GetStartAutomatismResponse|bool
     */
    public function GetStartAutomatism(\NOUT\Soap\StructType\GetStartAutomatism $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetStartAutomatism', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTableChild
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\GetTableChild $parameters
     * @return \NOUT\Soap\StructType\GetTableChildResponse|bool
     */
    public function GetTableChild(\NOUT\Soap\StructType\GetTableChild $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetTableChild', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemporalAutomatism
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param GetTemporalAutomatism $getTemporalAutomatism
     * @return \NOUT\Soap\StructType\GetTemporalAutomatismResponse|bool
     */
    public function GetTemporalAutomatism($getTemporalAutomatism)
    {
        try {
            $this->setResult(self::_getSoapClient()->GetTemporalAutomatism($getTemporalAutomatism));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTokenSession
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\GetTokenSession $parameters
     * @return \NOUT\Soap\StructType\GetTokenSessionResponse|bool
     */
    public function GetTokenSession(\NOUT\Soap\StructType\GetTokenSession $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetTokenSession', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HasChanged
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param HasChanged $hasChanged
     * @return \NOUT\Soap\StructType\HasChangedResponse|bool
     */
    public function HasChanged($hasChanged)
    {
        try {
            $this->setResult(self::_getSoapClient()->HasChanged($hasChanged));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Import
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces: http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes: \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders: optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\Import $parameters
     * @return \NOUT\Soap\StructType\ImportResponse|bool
     */
    public function Import(\NOUT\Soap\StructType\Import $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Import', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named InitRecordFromAddress
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, ActionContext, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\InitRecordFromAddress $parameters
     * @return \NOUT\Soap\StructType\InitRecordFromAddressResponse|bool
     */
    public function InitRecordFromAddress(\NOUT\Soap\StructType\InitRecordFromAddress $parameters)
    {
        try {
            $this->setResult($this->__soapCall('InitRecordFromAddress', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named InitRecordFromMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, ActionContext, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\InitRecordFromMessage $parameters
     * @return \NOUT\Soap\StructType\InitRecordFromMessageResponse|bool
     */
    public function InitRecordFromMessage(\NOUT\Soap\StructType\InitRecordFromMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('InitRecordFromMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named List
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\_List $parameters
     * @return \NOUT\Soap\StructType\ListResponse|bool
     */
    public function _List(\NOUT\Soap\StructType\_List $parameters)
    {
        try {
            $this->setResult($this->__soapCall('List', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Merge
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces: http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes: \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders: optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\Merge $parameters
     * @return \NOUT\Soap\StructType\MergeResponse|bool
     */
    public function Merge(\NOUT\Soap\StructType\Merge $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Merge', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Modify
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\Modify $parameters
     * @return \NOUT\Soap\StructType\ModifyResponse|bool
     */
    public function Modify(\NOUT\Soap\StructType\Modify $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Modify', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\ModifyFolder $parameters
     * @return \NOUT\Soap\StructType\ModifyFolderResponse|bool
     */
    public function ModifyFolder(\NOUT\Soap\StructType\ModifyFolder $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ModifyFolder', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\ModifyMessage $parameters
     * @return \NOUT\Soap\StructType\ModifyMessageResponse|bool
     */
    public function ModifyMessage(\NOUT\Soap\StructType\ModifyMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ModifyMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Print
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\_Print $parameters
     * @return \NOUT\Soap\StructType\PrintResponse|bool
     */
    public function _Print(\NOUT\Soap\StructType\_Print $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Print', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReorderList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\ReorderList $parameters
     * @return \NOUT\Soap\StructType\ReorderListResponse|bool
     */
    public function ReorderList(\NOUT\Soap\StructType\ReorderList $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ReorderList', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReorderSubList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\ReorderSubList $parameters
     * @return \NOUT\Soap\StructType\ReorderSubListResponse|bool
     */
    public function ReorderSubList(\NOUT\Soap\StructType\ReorderSubList $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ReorderSubList', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Request
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\Request $parameters
     * @return \NOUT\Soap\StructType\RequestResponse|bool
     */
    public function Request(\NOUT\Soap\StructType\Request $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Request', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RequestMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, ActionContext, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\RequestMessage $parameters
     * @return \NOUT\Soap\StructType\RequestMessageResponse|bool
     */
    public function RequestMessage(\NOUT\Soap\StructType\RequestMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('RequestMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RequestParam
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\RequestParam $parameters
     * @return \NOUT\Soap\StructType\RequestParamResponse|bool
     */
    public function RequestParam(\NOUT\Soap\StructType\RequestParam $parameters)
    {
        try {
            $this->setResult($this->__soapCall('RequestParam', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AutoComplete
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\AutoComplete $parameters
     * @return \NOUT\Soap\StructType\AutoCompleteResponse|bool
     */
    public function AutoComplete(\NOUT\Soap\StructType\AutoComplete $parameters)
    {
        try {
            $this->setResult($this->__soapCall('AutoComplete', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ResetPasswordFailed
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, CustomerInfos
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\CustomerInfos
     * - SOAPHeaders : optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\ResetPasswordFailed $parameters
     * @return \NOUT\Soap\StructType\ResetPasswordFailedResponse|bool
     */
    public function ResetPasswordFailed(\NOUT\Soap\StructType\ResetPasswordFailed $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ResetPasswordFailed', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\Search $parameters
     * @return \NOUT\Soap\StructType\SearchResponse|bool
     */
    public function Search(\NOUT\Soap\StructType\Search $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Search', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SelectForm
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\SelectForm $parameters
     * @return \NOUT\Soap\StructType\SelectFormResponse|bool
     */
    public function SelectForm(\NOUT\Soap\StructType\SelectForm $parameters)
    {
        try {
            $this->setResult($this->__soapCall('SelectForm', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SelectItems
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\SelectItems $parameters
     * @return \NOUT\Soap\StructType\SelectItemsResponse|bool
     */
    public function SelectItems(\NOUT\Soap\StructType\SelectItems $parameters)
    {
        try {
            $this->setResult($this->__soapCall('SelectItems', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SelectPrintTemplate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\SelectPrintTemplate $parameters
     * @return \NOUT\Soap\StructType\SelectPrintTemplateResponse|bool
     */
    public function SelectPrintTemplate(\NOUT\Soap\StructType\SelectPrintTemplate $parameters)
    {
        try {
            $this->setResult($this->__soapCall('SelectPrintTemplate', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SelectChoice
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\SelectChoice $parameters
     * @return \NOUT\Soap\StructType\SelectChoiceResponse|bool
     */
    public function SelectChoice(\NOUT\Soap\StructType\SelectChoice $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SelectChoice($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\SendMessage $parameters
     * @return \NOUT\Soap\StructType\SendMessageResponse|bool
     */
    public function SendMessage(\NOUT\Soap\StructType\SendMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('SendMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetOrderList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\SetOrderList $parameters
     * @return \NOUT\Soap\StructType\SetOrderListResponse|bool
     */
    public function SetOrderList(\NOUT\Soap\StructType\SetOrderList $parameters)
    {
        try {
            $this->setResult($this->__soapCall('SetOrderList', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetOrderSubList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\SetOrderSubList $parameters
     * @return \NOUT\Soap\StructType\SetOrderSubListResponse|bool
     */
    public function SetOrderSubList(\NOUT\Soap\StructType\SetOrderSubList $parameters)
    {
        try {
            $this->setResult($this->__soapCall('SetOrderSubList', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named TransformInto
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\TransformInto $parameters
     * @return \NOUT\Soap\StructType\TransformIntoResponse|bool
     */
    public function TransformInto(\NOUT\Soap\StructType\TransformInto $parameters)
    {
        try {
            $this->setResult($this->__soapCall('TransformInto', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Update
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\Update $parameters
     * @return \NOUT\Soap\StructType\UpdateResponse|bool
     */
    public function Update(\NOUT\Soap\StructType\Update $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Update', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\UpdateFolder $parameters
     * @return \NOUT\Soap\StructType\UpdateFolderResponse|bool
     */
    public function UpdateFolder(\NOUT\Soap\StructType\UpdateFolder $parameters)
    {
        try {
            $this->setResult($this->__soapCall('UpdateFolder', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\UpdateMessage $parameters
     * @return \NOUT\Soap\StructType\UpdateMessageResponse|bool
     */
    public function UpdateMessage(\NOUT\Soap\StructType\UpdateMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('UpdateMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateColumnMessageValueInBatch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces: http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes: \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders: optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\UpdateColumnMessageValueInBatch $parameters
     * @return \NOUT\Soap\StructType\UpdateColumnMessageValueInBatchResponse|bool
     */
    public function UpdateColumnMessageValueInBatch(\NOUT\Soap\StructType\UpdateColumnMessageValueInBatch $parameters)
    {
        try {
            $this->setResult($this->__soapCall('UpdateColumnMessageValueInBatch', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateFilter
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces: http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes: \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue, \NOUT\Soap\StructType\AutoValidate
     * - SOAPHeaders: optional, required, required, optional, optional, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\UpdateFilter $parameters
     * @return \NOUT\Soap\StructType\UpdateFilterResponse|bool
     */
    public function UpdateFilter(\NOUT\Soap\StructType\UpdateFilter $parameters)
    {
        try {
            $this->setResult($this->__soapCall('UpdateFilter', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Validate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\APIUser, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\ActionContext, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param Validate $validate
     * @return \NOUT\Soap\StructType\ValidateResponse|bool
     */
    public function Validate($validate)
    {
        try {
            $this->setResult(self::_getSoapClient()->Validate($validate));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ValidateFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\ValidateFolder $parameters
     * @return ValidateFolderResponse|bool
     */
    public function ValidateFolder(\NOUT\Soap\StructType\ValidateFolder $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ValidateFolder', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named WithAutomaticResponse
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\WithAutomaticResponse $parameters
     * @return \NOUT\Soap\StructType\WithAutomaticResponseResponse|bool
     */
    public function WithAutomaticResponse(\NOUT\Soap\StructType\WithAutomaticResponse $parameters)
    {
        try {
            $this->setResult($this->__soapCall('WithAutomaticResponse', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ZipPJ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUT\Soap\StructType\APIUUID, \NOUT\Soap\StructType\UsernameTokenType, string, \NOUT\Soap\StructType\CustomerInfos, \NOUT\Soap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::__soapCall()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUT\Soap\StructType\ZipPJ $parameters
     * @return \NOUT\Soap\StructType\ZipPJResponse|bool
     */
    public function ZipPJ(\NOUT\Soap\StructType\ZipPJ $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ZipPJ', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return CancelFolderResponse|CancelMessageResponse|CloseFolderListResponse|CloseMessageListResponse|DeleteFolderResponse|DisconnectResponse|ValidateFolderResponse|\NOUT\Soap\StructType\AddPJResponse|\NOUT\Soap\StructType\AutoCompleteResponse|\NOUT\Soap\StructType\ButtonActionResponse|\NOUT\Soap\StructType\CancelResponse|\NOUT\Soap\StructType\CheckCreateElementResponse|\NOUT\Soap\StructType\CheckRecipientResponse|\NOUT\Soap\StructType\ConfirmResponseResponse|\NOUT\Soap\StructType\CreateFolderResponse|\NOUT\Soap\StructType\CreateFromResponse|\NOUT\Soap\StructType\CreateMessageResponse|\NOUT\Soap\StructType\CreateResponse|\NOUT\Soap\StructType\DeletePJResponse|\NOUT\Soap\StructType\DeleteResponse|\NOUT\Soap\StructType\DisplayResponse|\NOUT\Soap\StructType\DrillThroughResponse|\NOUT\Soap\StructType\EnterReorderListModeResponse|\NOUT\Soap\StructType\ExecuteResponse|\NOUT\Soap\StructType\ExportResponse|\NOUT\Soap\StructType\GetCalculationResponse|\NOUT\Soap\StructType\GetChartResponse|\NOUT\Soap\StructType\GetColInRecordResponse|\NOUT\Soap\StructType\GetContentFolderResponse|\NOUT\Soap\StructType\GetEndAutomatismResponse|\NOUT\Soap\StructType\GetEndListCalculationResponse|\NOUT\Soap\StructType\GetFolderListResponse|\NOUT\Soap\StructType\GetLanguagesResponse|\NOUT\Soap\StructType\GetListMessageResponse|\NOUT\Soap\StructType\GetMailServiceStatusResponse|\NOUT\Soap\StructType\GetPJResponse|\NOUT\Soap\StructType\GetPlanningInfoResponse|\NOUT\Soap\StructType\GetStartAutomatismResponse|\NOUT\Soap\StructType\GetSubListContentResponse|\NOUT\Soap\StructType\GetTableChildResponse|\NOUT\Soap\StructType\GetTemporalAutomatismResponse|\NOUT\Soap\StructType\GetTokenSessionResponse|\NOUT\Soap\StructType\HasChangedResponse|\NOUT\Soap\StructType\ImportResponse|\NOUT\Soap\StructType\InitRecordFromAddressResponse|\NOUT\Soap\StructType\InitRecordFromMessageResponse|\NOUT\Soap\StructType\ListResponse|\NOUT\Soap\StructType\MergeResponse|\NOUT\Soap\StructType\ModifyFolderResponse|\NOUT\Soap\StructType\ModifyMessageResponse|\NOUT\Soap\StructType\ModifyResponse|\NOUT\Soap\StructType\PrintResponse|\NOUT\Soap\StructType\ReorderListResponse|\NOUT\Soap\StructType\ReorderSubListResponse|\NOUT\Soap\StructType\RequestMessageResponse|\NOUT\Soap\StructType\RequestParamResponse|\NOUT\Soap\StructType\RequestResponse|\NOUT\Soap\StructType\ResetPasswordFailedResponse|\NOUT\Soap\StructType\SearchResponse|\NOUT\Soap\StructType\SelectChoiceResponse|\NOUT\Soap\StructType\SelectFormResponse|\NOUT\Soap\StructType\SelectItemsResponse|\NOUT\Soap\StructType\SelectPrintTemplateResponse|\NOUT\Soap\StructType\SendMessageResponse|\NOUT\Soap\StructType\SetOrderListResponse|\NOUT\Soap\StructType\SetOrderSubListResponse|\NOUT\Soap\StructType\TransformIntoResponse|\NOUT\Soap\StructType\UpdateColumnMessageValueInBatchResponse|\NOUT\Soap\StructType\UpdateFilterResponse|\NOUT\Soap\StructType\UpdateFolderResponse|\NOUT\Soap\StructType\UpdateMessageResponse|\NOUT\Soap\StructType\UpdateResponse|\NOUT\Soap\StructType\ValidateResponse|\NOUT\Soap\StructType\WithAutomaticResponseResponse|\NOUT\Soap\StructType\ZipPJResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
