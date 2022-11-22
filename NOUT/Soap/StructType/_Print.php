<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for Print StructType
 * @subpackage Structs
 */
class _Print extends AbstractStructBase
{
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The ParamXML
     * @var string
     */
    public $ParamXML;
    /**
     * The ListMode
     * @var int
     */
    public $ListMode;
    /**
     * Constructor method for Print
     * @uses _Print::setTable()
     * @uses _Print::setParamXML()
     * @uses _Print::setListMode()
     * @param string $table
     * @param string $paramXML
     * @param int $listMode
     */
    public function __construct($table = null, $paramXML = null, $listMode = null)
    {
        $this
            ->setTable($table)
            ->setParamXML($paramXML)
            ->setListMode($listMode);
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
     * @return \NOUT\Soap\StructType\_Print
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
     * Get ParamXML value
     * @return string|null
     */
    public function getParamXML()
    {
        return $this->ParamXML;
    }
    /**
     * Set ParamXML value
     * @param string $paramXML
     * @return \NOUT\Soap\StructType\_Print
     */
    public function setParamXML($paramXML = null)
    {
        // validation for constraint: string
        if (!is_null($paramXML) && !is_string($paramXML)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paramXML, true), gettype($paramXML)), __LINE__);
        }
        $this->ParamXML = $paramXML;
        return $this;
    }
    /**
     * Get ListMode value
     * @return int|null
     */
    public function getListMode()
    {
        return $this->ListMode;
    }
    /**
     * Set ListMode value
     * @param int $listMode
     * @return \NOUT\Soap\StructType\_Print
     */
    public function setListMode($listMode = null)
    {
        // validation for constraint: int
        if (!is_null($listMode) && !(is_int($listMode) || ctype_digit($listMode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listMode, true), gettype($listMode)), __LINE__);
        }
        $this->ListMode = $listMode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\_Print
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
