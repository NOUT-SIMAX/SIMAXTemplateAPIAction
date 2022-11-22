<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelMessage StructType
 * @subpackage Structs
 */
class CancelMessage extends AbstractStructBase
{
    /**
     * The IDMessage
     * @var string
     */
    public $IDMessage;
    /**
     * Constructor method for CancelMessage
     * @uses CancelMessage::setIDMessage()
     * @param string $iDMessage
     */
    public function __construct($iDMessage = null)
    {
        $this
            ->setIDMessage($iDMessage);
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
     * @return \NOUT\Soap\StructType\CancelMessage
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\CancelMessage
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
