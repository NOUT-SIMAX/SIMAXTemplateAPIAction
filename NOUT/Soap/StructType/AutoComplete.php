<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoComplete StructType
 * @subpackage Structs
 */
class AutoComplete extends AbstractStructBase
{
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The AutoComplete
     * @var string
     */
    public $AutoComplete;
    /**
     * The MaxResult
     * @var int
     */
    public $MaxResult;
    /**
     * Constructor method for AutoComplete
     * @uses AutoComplete::setTable()
     * @uses AutoComplete::setAutoComplete()
     * @uses AutoComplete::setMaxResult()
     * @param string $table
     * @param string $autoComplete
     * @param int $maxResult
     */
    public function __construct($table = null, $autoComplete = null, $maxResult = null)
    {
        $this
            ->setTable($table)
            ->setAutoComplete($autoComplete)
            ->setMaxResult($maxResult);
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
     * @return \NOUT\Soap\StructType\AutoComplete
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
     * Get AutoComplete value
     * @return string|null
     */
    public function getAutoComplete()
    {
        return $this->AutoComplete;
    }
    /**
     * Set AutoComplete value
     * @param string $autoComplete
     * @return \NOUT\Soap\StructType\AutoComplete
     */
    public function setAutoComplete($autoComplete = null)
    {
        // validation for constraint: string
        if (!is_null($autoComplete) && !is_string($autoComplete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoComplete, true), gettype($autoComplete)), __LINE__);
        }
        $this->AutoComplete = $autoComplete;
        return $this;
    }
    /**
     * Get MaxResult value
     * @return int|null
     */
    public function getMaxResult()
    {
        return $this->MaxResult;
    }
    /**
     * Set MaxResult value
     * @param int $maxResult
     * @return \NOUT\Soap\StructType\AutoComplete
     */
    public function setMaxResult($maxResult = null)
    {
        // validation for constraint: int
        if (!is_null($maxResult) && !(is_int($maxResult) || ctype_digit($maxResult))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxResult, true), gettype($maxResult)), __LINE__);
        }
        $this->MaxResult = $maxResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\AutoComplete
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
