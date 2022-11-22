<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTokenSession StructType
 * @subpackage Structs
 */
class GetTokenSession extends AbstractStructBase
{
    /**
     * The UsernameToken
     * @var \NOUT\Soap\StructType\UsernameTokenType
     */
    public $UsernameToken;
    /**
     * The ExtranetUser
     * @var \NOUT\Soap\StructType\ExtranetUserType
     */
    public $ExtranetUser;
    /**
     * The DefaultClientLanguageCode
     * Meta informations extracted from the WSDL
     * - base: integer
     * @var int
     */
    public $DefaultClientLanguageCode;
    /**
     * Constructor method for GetTokenSession
     * @uses GetTokenSession::setUsernameToken()
     * @uses GetTokenSession::setExtranetUser()
     * @uses GetTokenSession::setDefaultClientLanguageCode()
     * @param \NOUT\Soap\StructType\UsernameTokenType $usernameToken
     * @param \NOUT\Soap\StructType\ExtranetUserType $extranetUser
     * @param int $defaultClientLanguageCode
     */
    public function __construct(\NOUT\Soap\StructType\UsernameTokenType $usernameToken = null, \NOUT\Soap\StructType\ExtranetUserType $extranetUser = null, $defaultClientLanguageCode = null)
    {
        $this
            ->setUsernameToken($usernameToken)
            ->setExtranetUser($extranetUser)
            ->setDefaultClientLanguageCode($defaultClientLanguageCode);
    }
    /**
     * Get UsernameToken value
     * @return \NOUT\Soap\StructType\UsernameTokenType|null
     */
    public function getUsernameToken()
    {
        return $this->UsernameToken;
    }
    /**
     * Set UsernameToken value
     * @param \NOUT\Soap\StructType\UsernameTokenType $usernameToken
     * @return \NOUT\Soap\StructType\GetTokenSession
     */
    public function setUsernameToken(\NOUT\Soap\StructType\UsernameTokenType $usernameToken = null)
    {
        $this->UsernameToken = $usernameToken;
        return $this;
    }
    /**
     * Get ExtranetUser value
     * @return \NOUT\Soap\StructType\ExtranetUserType|null
     */
    public function getExtranetUser()
    {
        return $this->ExtranetUser;
    }
    /**
     * Set ExtranetUser value
     * @param \NOUT\Soap\StructType\ExtranetUserType $extranetUser
     * @return \NOUT\Soap\StructType\GetTokenSession
     */
    public function setExtranetUser(\NOUT\Soap\StructType\ExtranetUserType $extranetUser = null)
    {
        $this->ExtranetUser = $extranetUser;
        return $this;
    }
    /**
     * Get DefaultClientLanguageCode value
     * @return int|null
     */
    public function getDefaultClientLanguageCode()
    {
        return $this->DefaultClientLanguageCode;
    }
    /**
     * Set DefaultClientLanguageCode value
     * @param int $defaultClientLanguageCode
     * @return \NOUT\Soap\StructType\GetTokenSession
     */
    public function setDefaultClientLanguageCode($defaultClientLanguageCode = null)
    {
        // validation for constraint: int
        if (!is_null($defaultClientLanguageCode) && !(is_int($defaultClientLanguageCode) || ctype_digit($defaultClientLanguageCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultClientLanguageCode, true), gettype($defaultClientLanguageCode)), __LINE__);
        }
        $this->DefaultClientLanguageCode = $defaultClientLanguageCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\GetTokenSession
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
