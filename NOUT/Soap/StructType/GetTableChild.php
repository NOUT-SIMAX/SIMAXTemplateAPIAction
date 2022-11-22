<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTableChild StructType
 * @subpackage Structs
 */
class GetTableChild extends AbstractStructBase
{
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The Recursive
     * @var string
     */
    public $Recursive;
    /**
     * The ReadOnly
     * @var string
     */
    public $ReadOnly;
    /**
     * Constructor method for GetTableChild
     * @uses GetTableChild::setTable()
     * @uses GetTableChild::setRecursive()
     * @uses GetTableChild::setReadOnly()
     * @param string $table
     * @param string $recursive
     * @param string $readOnly
     */
    public function __construct($table = null, $recursive = null, $readOnly = null)
    {
        $this
            ->setTable($table)
            ->setRecursive($recursive)
            ->setReadOnly($readOnly);
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
     * @return \NOUT\Soap\StructType\GetTableChild
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
     * Get Recursive value
     * @return string|null
     */
    public function getRecursive()
    {
        return $this->Recursive;
    }
    /**
     * Set Recursive value
     * @param string $recursive
     * @return \NOUT\Soap\StructType\GetTableChild
     */
    public function setRecursive($recursive = null)
    {
        // validation for constraint: string
        if (!is_null($recursive) && !is_string($recursive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recursive, true), gettype($recursive)), __LINE__);
        }
        $this->Recursive = $recursive;
        return $this;
    }
    /**
     * Get ReadOnly value
     * @return string|null
     */
    public function getReadOnly()
    {
        return $this->ReadOnly;
    }
    /**
     * Set ReadOnly value
     * @param string $readOnly
     * @return \NOUT\Soap\StructType\GetTableChild
     */
    public function setReadOnly($readOnly = null)
    {
        // validation for constraint: string
        if (!is_null($readOnly) && !is_string($readOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($readOnly, true), gettype($readOnly)), __LINE__);
        }
        $this->ReadOnly = $readOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\GetTableChild
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
