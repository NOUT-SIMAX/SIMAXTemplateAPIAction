<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for TransformInto StructType
 * @subpackage Structs
 */
class TransformInto extends AbstractStructBase
{
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The TableSrc
     * @var string
     */
    public $TableSrc;
    /**
     * The ElemSrc
     * @var string
     */
    public $ElemSrc;
    /**
     * Constructor method for TransformInto
     * @uses TransformInto::setTable()
     * @uses TransformInto::setTableSrc()
     * @uses TransformInto::setElemSrc()
     * @param string $table
     * @param string $tableSrc
     * @param string $elemSrc
     */
    public function __construct($table = null, $tableSrc = null, $elemSrc = null)
    {
        $this
            ->setTable($table)
            ->setTableSrc($tableSrc)
            ->setElemSrc($elemSrc);
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
     * @return \NOUT\Soap\StructType\TransformInto
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
     * Get TableSrc value
     * @return string|null
     */
    public function getTableSrc()
    {
        return $this->TableSrc;
    }
    /**
     * Set TableSrc value
     * @param string $tableSrc
     * @return \NOUT\Soap\StructType\TransformInto
     */
    public function setTableSrc($tableSrc = null)
    {
        // validation for constraint: string
        if (!is_null($tableSrc) && !is_string($tableSrc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tableSrc, true), gettype($tableSrc)), __LINE__);
        }
        $this->TableSrc = $tableSrc;
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
     * @return \NOUT\Soap\StructType\TransformInto
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\TransformInto
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
