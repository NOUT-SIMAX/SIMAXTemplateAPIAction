<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for CallingInfoType StructType
 * @subpackage Structs
 */
class CallingInfoType extends AbstractStructBase
{
    /**
     * The Column
     * @var string
     */
    public $Column;
    /**
     * The Context
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Context;
    /**
     * The Record
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Record;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for CallingInfoType
     * @uses CallingInfoType::setColumn()
     * @uses CallingInfoType::setContext()
     * @uses CallingInfoType::setRecord()
     * @uses CallingInfoType::setValue()
     * @param string $column
     * @param string $context
     * @param string $record
     * @param string $value
     */
    public function __construct($column = null, $context = null, $record = null, $value = null)
    {
        $this
            ->setColumn($column)
            ->setContext($context)
            ->setRecord($record)
            ->setValue($value);
    }
    /**
     * Get Column value
     * @return string|null
     */
    public function getColumn()
    {
        return $this->Column;
    }
    /**
     * Set Column value
     * @param string $column
     * @return \NOUT\Soap\StructType\CallingInfoType
     */
    public function setColumn($column = null)
    {
        // validation for constraint: string
        if (!is_null($column) && !is_string($column)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($column, true), gettype($column)), __LINE__);
        }
        $this->Column = $column;
        return $this;
    }
    /**
     * Get Context value
     * @return string|null
     */
    public function getContext()
    {
        return $this->Context;
    }
    /**
     * Set Context value
     * @param string $context
     * @return \NOUT\Soap\StructType\CallingInfoType
     */
    public function setContext($context = null)
    {
        // validation for constraint: string
        if (!is_null($context) && !is_string($context)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($context, true), gettype($context)), __LINE__);
        }
        $this->Context = $context;
        return $this;
    }
    /**
     * Get Record value
     * @return string|null
     */
    public function getRecord()
    {
        return $this->Record;
    }
    /**
     * Set Record value
     * @param string $record
     * @return \NOUT\Soap\StructType\CallingInfoType
     */
    public function setRecord($record = null)
    {
        // validation for constraint: string
        if (!is_null($record) && !is_string($record)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($record, true), gettype($record)), __LINE__);
        }
        $this->Record = $record;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \NOUT\Soap\StructType\CallingInfoType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\CallingInfoType
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
