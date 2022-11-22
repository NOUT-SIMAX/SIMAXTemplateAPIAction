<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for ReorderSubList StructType
 * @subpackage Structs
 */
class ReorderSubList extends AbstractStructBase
{
    /**
     * The column
     * @var string
     */
    public $column;
    /**
     * The items
     * @var string
     */
    public $items;
    /**
     * The moveType
     * @var string
     */
    public $moveType;
    /**
     * The scale
     * @var int
     */
    public $scale;
    /**
     * Constructor method for ReorderSubList
     * @uses ReorderSubList::setColumn()
     * @uses ReorderSubList::setItems()
     * @uses ReorderSubList::setMoveType()
     * @uses ReorderSubList::setScale()
     * @param string $column
     * @param string $items
     * @param string $moveType
     * @param int $scale
     */
    public function __construct($column = null, $items = null, $moveType = null, $scale = null)
    {
        $this
            ->setColumn($column)
            ->setItems($items)
            ->setMoveType($moveType)
            ->setScale($scale);
    }
    /**
     * Get column value
     * @return string|null
     */
    public function getColumn()
    {
        return $this->column;
    }
    /**
     * Set column value
     * @param string $column
     * @return \NOUT\Soap\StructType\ReorderSubList
     */
    public function setColumn($column = null)
    {
        // validation for constraint: string
        if (!is_null($column) && !is_string($column)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($column, true), gettype($column)), __LINE__);
        }
        $this->column = $column;
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
     * @return \NOUT\Soap\StructType\ReorderSubList
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
     * Get moveType value
     * @return string|null
     */
    public function getMoveType()
    {
        return $this->moveType;
    }
    /**
     * Set moveType value
     * @param string $moveType
     * @return \NOUT\Soap\StructType\ReorderSubList
     */
    public function setMoveType($moveType = null)
    {
        // validation for constraint: string
        if (!is_null($moveType) && !is_string($moveType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moveType, true), gettype($moveType)), __LINE__);
        }
        $this->moveType = $moveType;
        return $this;
    }
    /**
     * Get scale value
     * @return int|null
     */
    public function getScale()
    {
        return $this->scale;
    }
    /**
     * Set scale value
     * @param int $scale
     * @return \NOUT\Soap\StructType\ReorderSubList
     */
    public function setScale($scale = null)
    {
        // validation for constraint: int
        if (!is_null($scale) && !(is_int($scale) || ctype_digit($scale))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($scale, true), gettype($scale)), __LINE__);
        }
        $this->scale = $scale;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\ReorderSubList
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
