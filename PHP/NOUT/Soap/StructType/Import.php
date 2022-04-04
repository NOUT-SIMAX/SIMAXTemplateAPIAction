<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for Import StructType
 * @subpackage Structs
 */
class Import extends AbstractStructBase
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
     * The Import
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Import;
    /**
     * The File
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUT\Soap\StructType\DataType
     */
    public $File;
    /**
     * Constructor method for Import
     * @uses Import::setTable()
     * @uses Import::setID()
     * @uses Import::setImport()
     * @uses Import::setFile()
     * @param string $table
     * @param string $iD
     * @param string $import
     * @param \NOUT\Soap\StructType\DataType $file
     */
    public function __construct($table = null, $iD = null, $import = null, \NOUT\Soap\StructType\DataType $file = null)
    {
        $this
            ->setTable($table)
            ->setID($iD)
            ->setImport($import)
            ->setFile($file);
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
     * @return \NOUT\Soap\StructType\Import
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
     * @return \NOUT\Soap\StructType\Import
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
     * Get Import value
     * @return string|null
     */
    public function getImport()
    {
        return $this->Import;
    }
    /**
     * Set Import value
     * @param string $import
     * @return \NOUT\Soap\StructType\Import
     */
    public function setImport($import = null)
    {
        // validation for constraint: string
        if (!is_null($import) && !is_string($import)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($import, true), gettype($import)), __LINE__);
        }
        $this->Import = $import;
        return $this;
    }
    /**
     * Get File value
     * @return \NOUT\Soap\StructType\DataType|null
     */
    public function getFile()
    {
        return $this->File;
    }
    /**
     * Set File value
     * @param \NOUT\Soap\StructType\DataType $file
     * @return \NOUT\Soap\StructType\Import
     */
    public function setFile(\NOUT\Soap\StructType\DataType $file = null)
    {
        $this->File = $file;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\Import
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
