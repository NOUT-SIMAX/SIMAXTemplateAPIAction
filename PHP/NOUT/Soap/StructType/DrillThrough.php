<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for DrillThrough StructType
 * @subpackage Structs
 */
class DrillThrough extends AbstractStructBase
{
    /**
     * The Record
     * @var string
     */
    public $Record;
    /**
     * The Column
     * @var string
     */
    public $Column;
    /**
     * The SpecialParamList
     * @var \NOUT\Soap\StructType\SpecialParamListType
     */
    public $SpecialParamList;
    /**
     * Constructor method for DrillThrough
     * @uses DrillThrough::setRecord()
     * @uses DrillThrough::setColumn()
     * @uses DrillThrough::setSpecialParamList()
     * @param string $record
     * @param string $column
     * @param \NOUT\Soap\StructType\SpecialParamListType $specialParamList
     */
    public function __construct($record = null, $column = null, \NOUT\Soap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this
            ->setRecord($record)
            ->setColumn($column)
            ->setSpecialParamList($specialParamList);
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
     * @return \NOUT\Soap\StructType\DrillThrough
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
     * @return \NOUT\Soap\StructType\DrillThrough
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
     * Get SpecialParamList value
     * @return \NOUT\Soap\StructType\SpecialParamListType|null
     */
    public function getSpecialParamList()
    {
        return $this->SpecialParamList;
    }
    /**
     * Set SpecialParamList value
     * @param \NOUT\Soap\StructType\SpecialParamListType $specialParamList
     * @return \NOUT\Soap\StructType\DrillThrough
     */
    public function setSpecialParamList(\NOUT\Soap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this->SpecialParamList = $specialParamList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\DrillThrough
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
