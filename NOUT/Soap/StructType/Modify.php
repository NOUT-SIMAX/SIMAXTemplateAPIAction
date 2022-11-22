<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for Modify StructType
 * @subpackage Structs
 */
class Modify extends AbstractStructBase
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
     * The UpdateData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UpdateData;
    /**
     * Constructor method for Modify
     * @uses Modify::setTable()
     * @uses Modify::setParamXML()
     * @uses Modify::setUpdateData()
     * @param string $table
     * @param string $paramXML
     * @param string $updateData
     */
    public function __construct($table = null, $paramXML = null, $updateData = null)
    {
        $this
            ->setTable($table)
            ->setParamXML($paramXML)
            ->setUpdateData($updateData);
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
     * @return \NOUT\Soap\StructType\Modify
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
     * @return \NOUT\Soap\StructType\Modify
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
     * Get UpdateData value
     * @return string|null
     */
    public function getUpdateData()
    {
        return $this->UpdateData;
    }
    /**
     * Set UpdateData value
     * @param string $updateData
     * @return \NOUT\Soap\StructType\Modify
     */
    public function setUpdateData($updateData = null)
    {
        // validation for constraint: string
        if (!is_null($updateData) && !is_string($updateData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateData, true), gettype($updateData)), __LINE__);
        }
        $this->UpdateData = $updateData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\Modify
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
