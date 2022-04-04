<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for Merge StructType
 * @subpackage Structs
 */
class Merge extends AbstractStructBase
{
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The ElemSrc
     * @var string
     */
    public $ElemSrc;
    /**
     * The ElemDest
     * @var string
     */
    public $ElemDest;
    /**
     * Constructor method for Merge
     * @uses Merge::setTable()
     * @uses Merge::setElemSrc()
     * @uses Merge::setElemDest()
     * @param string $table
     * @param string $elemSrc
     * @param string $elemDest
     */
    public function __construct($table = null, $elemSrc = null, $elemDest = null)
    {
        $this
            ->setTable($table)
            ->setElemSrc($elemSrc)
            ->setElemDest($elemDest);
    }
    /**
     * Get Table value
     * @return string|null
     */
    public function getTable()
    {
        return $this->Table;
    }
    /**
     * Set Table value
     * @param string $table
     * @return \NOUT\Soap\StructType\Merge
     */
    public function setTable($table = null)
    {
        // validation for constraint: string
        if (!is_null($table) && !is_string($table)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($table, true), gettype($table)), __LINE__);
        }
        $this->Table = $table;
        return $this;
    }
    /**
     * Get ElemSrc value
     * @return string|null
     */
    public function getElemSrc()
    {
        return $this->ElemSrc;
    }
    /**
     * Set ElemSrc value
     * @param string $elemSrc
     * @return \NOUT\Soap\StructType\Merge
     */
    public function setElemSrc($elemSrc = null)
    {
        // validation for constraint: string
        if (!is_null($elemSrc) && !is_string($elemSrc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elemSrc, true), gettype($elemSrc)), __LINE__);
        }
        $this->ElemSrc = $elemSrc;
        return $this;
    }
    /**
     * Get ElemDest value
     * @return string|null
     */
    public function getElemDest()
    {
        return $this->ElemDest;
    }
    /**
     * Set ElemDest value
     * @param string $elemDest
     * @return \NOUT\Soap\StructType\Merge
     */
    public function setElemDest($elemDest = null)
    {
        // validation for constraint: string
        if (!is_null($elemDest) && !is_string($elemDest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elemDest, true), gettype($elemDest)), __LINE__);
        }
        $this->ElemDest = $elemDest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\Merge
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
