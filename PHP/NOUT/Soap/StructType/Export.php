<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for Export StructType
 * @subpackage Structs
 */
class Export extends AbstractStructBase
{
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Export
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Export;
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Format;
    /**
     * The Module
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Module;
    /**
     * The ColType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ColType;
    /**
     * The items
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $items;
    /**
     * Constructor method for Export
     * @uses Export::setTable()
     * @uses Export::setID()
     * @uses Export::setExport()
     * @uses Export::setFormat()
     * @uses Export::setModule()
     * @uses Export::setColType()
     * @uses Export::setItems()
     * @param string $table
     * @param string $iD
     * @param string $export
     * @param string $format
     * @param string $module
     * @param string $colType
     * @param string $items
     */
    public function __construct($table = null, $iD = null, $export = null, $format = null, $module = null, $colType = null, $items = null)
    {
        $this
            ->setTable($table)
            ->setID($iD)
            ->setExport($export)
            ->setFormat($format)
            ->setModule($module)
            ->setColType($colType)
            ->setItems($items);
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
     * @return \NOUT\Soap\StructType\Export
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
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \NOUT\Soap\StructType\Export
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Export value
     * @return string|null
     */
    public function getExport()
    {
        return $this->Export;
    }
    /**
     * Set Export value
     * @param string $export
     * @return \NOUT\Soap\StructType\Export
     */
    public function setExport($export = null)
    {
        // validation for constraint: string
        if (!is_null($export) && !is_string($export)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($export, true), gettype($export)), __LINE__);
        }
        $this->Export = $export;
        return $this;
    }
    /**
     * Get Format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param string $format
     * @return \NOUT\Soap\StructType\Export
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->Format = $format;
        return $this;
    }
    /**
     * Get Module value
     * @return string|null
     */
    public function getModule()
    {
        return $this->Module;
    }
    /**
     * Set Module value
     * @param string $module
     * @return \NOUT\Soap\StructType\Export
     */
    public function setModule($module = null)
    {
        // validation for constraint: string
        if (!is_null($module) && !is_string($module)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($module, true), gettype($module)), __LINE__);
        }
        $this->Module = $module;
        return $this;
    }
    /**
     * Get ColType value
     * @return string|null
     */
    public function getColType()
    {
        return $this->ColType;
    }
    /**
     * Set ColType value
     * @param string $colType
     * @return \NOUT\Soap\StructType\Export
     */
    public function setColType($colType = null)
    {
        // validation for constraint: string
        if (!is_null($colType) && !is_string($colType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($colType, true), gettype($colType)), __LINE__);
        }
        $this->ColType = $colType;
        return $this;
    }
    /**
     * Get items value
     * @return string|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Set items value
     * @param string $items
     * @return \NOUT\Soap\StructType\Export
     */
    public function setItems($items = null)
    {
        // validation for constraint: string
        if (!is_null($items) && !is_string($items)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($items, true), gettype($items)), __LINE__);
        }
        $this->items = $items;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\Export
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
