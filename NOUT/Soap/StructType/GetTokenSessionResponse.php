<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTokenSessionResponse StructType
 * @subpackage Structs
 */
class GetTokenSessionResponse extends AbstractStructBase
{
    /**
     * The SessionToken
     * @var string
     */
    public $SessionToken;
    /**
     * Constructor method for GetTokenSessionResponse
     * @uses GetTokenSessionResponse::setSessionToken()
     * @param string $sessionToken
     */
    public function __construct($sessionToken = null)
    {
        $this
            ->setSessionToken($sessionToken);
    }
    /**
     * Get SessionToken value
     * @return string|null
     */
    public function getSessionToken()
    {
        return $this->SessionToken;
    }
    /**
     * Set SessionToken value
     * @param string $sessionToken
     * @return \NOUT\Soap\StructType\GetTokenSessionResponse
     */
    public function setSessionToken($sessionToken = null)
    {
        // validation for constraint: string
        if (!is_null($sessionToken) && !is_string($sessionToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionToken, true), gettype($sessionToken)), __LINE__);
        }
        $this->SessionToken = $sessionToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\GetTokenSessionResponse
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
