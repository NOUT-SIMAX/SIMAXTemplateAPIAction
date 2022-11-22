<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMessage StructType
 * @subpackage Structs
 */
class CreateMessage extends AbstractStructBase
{
    /**
     * The CreateType
     * @var string
     */
    public $CreateType;
    /**
     * The IDMessage
     * @var string
     */
    public $IDMessage;
    /**
     * The IDAnswerType
     * @var string
     */
    public $IDAnswerType;
    /**
     * Constructor method for CreateMessage
     * @uses CreateMessage::setCreateType()
     * @uses CreateMessage::setIDMessage()
     * @uses CreateMessage::setIDAnswerType()
     * @param string $createType
     * @param string $iDMessage
     * @param string $iDAnswerType
     */
    public function __construct($createType = null, $iDMessage = null, $iDAnswerType = null)
    {
        $this
            ->setCreateType($createType)
            ->setIDMessage($iDMessage)
            ->setIDAnswerType($iDAnswerType);
    }
    /**
     * Get CreateType value
     * @return string|null
     */
    public function getCreateType()
    {
        return $this->CreateType;
    }
    /**
     * Set CreateType value
     * @uses \NOUT\Soap\EnumType\CreateTypeEnum::valueIsValid()
     * @uses \NOUT\Soap\EnumType\CreateTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $createType
     * @return \NOUT\Soap\StructType\CreateMessage
     */
    public function setCreateType($createType = null)
    {
        // validation for constraint: enumeration
        if (!\NOUT\Soap\EnumType\CreateTypeEnum::valueIsValid($createType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \NOUT\Soap\EnumType\CreateTypeEnum', is_array($createType) ? implode(', ', $createType) : var_export($createType, true), implode(', ', \NOUT\Soap\EnumType\CreateTypeEnum::getValidValues())), __LINE__);
        }
        $this->CreateType = $createType;
        return $this;
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
     * @return \NOUT\Soap\StructType\CreateMessage
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
     * Get IDAnswerType value
     * @return string|null
     */
    public function getIDAnswerType()
    {
        return $this->IDAnswerType;
    }
    /**
     * Set IDAnswerType value
     * @param string $iDAnswerType
     * @return \NOUT\Soap\StructType\CreateMessage
     */
    public function setIDAnswerType($iDAnswerType = null)
    {
        // validation for constraint: string
        if (!is_null($iDAnswerType) && !is_string($iDAnswerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iDAnswerType, true), gettype($iDAnswerType)), __LINE__);
        }
        $this->IDAnswerType = $iDAnswerType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\CreateMessage
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
