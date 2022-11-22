<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for WithAutomaticResponse StructType
 * @subpackage Structs
 */
class WithAutomaticResponse extends AbstractStructBase
{
    /**
     * The IDMessage
     * @var string
     */
    public $IDMessage;
    /**
     * The ResponseType
     * @var int
     */
    public $ResponseType;
    /**
     * The SendAutomaticMessage
     * @var int
     */
    public $SendAutomaticMessage;
    /**
     * Constructor method for WithAutomaticResponse
     * @uses WithAutomaticResponse::setIDMessage()
     * @uses WithAutomaticResponse::setResponseType()
     * @uses WithAutomaticResponse::setSendAutomaticMessage()
     * @param string $iDMessage
     * @param int $responseType
     * @param int $sendAutomaticMessage
     */
    public function __construct($iDMessage = null, $responseType = null, $sendAutomaticMessage = null)
    {
        $this
            ->setIDMessage($iDMessage)
            ->setResponseType($responseType)
            ->setSendAutomaticMessage($sendAutomaticMessage);
    }
    /**
     * Get IDMessage value
     * @return string|null
     */
    public function getIDMessage()
    {
        return $this->IDMessage;
    }
    /**
     * Set IDMessage value
     * @param string $iDMessage
     * @return \NOUT\Soap\StructType\WithAutomaticResponse
     */
    public function setIDMessage($iDMessage = null)
    {
        // validation for constraint: string
        if (!is_null($iDMessage) && !is_string($iDMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iDMessage, true), gettype($iDMessage)), __LINE__);
        }
        $this->IDMessage = $iDMessage;
        return $this;
    }
    /**
     * Get ResponseType value
     * @return int|null
     */
    public function getResponseType()
    {
        return $this->ResponseType;
    }
    /**
     * Set ResponseType value
     * @param int $responseType
     * @return \NOUT\Soap\StructType\WithAutomaticResponse
     */
    public function setResponseType($responseType = null)
    {
        // validation for constraint: int
        if (!is_null($responseType) && !(is_int($responseType) || ctype_digit($responseType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($responseType, true), gettype($responseType)), __LINE__);
        }
        $this->ResponseType = $responseType;
        return $this;
    }
    /**
     * Get SendAutomaticMessage value
     * @return int|null
     */
    public function getSendAutomaticMessage()
    {
        return $this->SendAutomaticMessage;
    }
    /**
     * Set SendAutomaticMessage value
     * @param int $sendAutomaticMessage
     * @return \NOUT\Soap\StructType\WithAutomaticResponse
     */
    public function setSendAutomaticMessage($sendAutomaticMessage = null)
    {
        // validation for constraint: int
        if (!is_null($sendAutomaticMessage) && !(is_int($sendAutomaticMessage) || ctype_digit($sendAutomaticMessage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sendAutomaticMessage, true), gettype($sendAutomaticMessage)), __LINE__);
        }
        $this->SendAutomaticMessage = $sendAutomaticMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\WithAutomaticResponse
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
