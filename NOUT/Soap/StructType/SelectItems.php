<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectItems StructType
 * @subpackage Structs
 */
class SelectItems extends AbstractStructBase
{
    /**
     * The items
     * @var string
     */
    public $items;
    /**
     * The CallingColumn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CallingColumn;
    /**
     * Constructor method for SelectItems
     * @uses SelectItems::setItems()
     * @uses SelectItems::setCallingColumn()
     * @param string $items
     * @param string $callingColumn
     */
    public function __construct($items = null, $callingColumn = null)
    {
        $this
            ->setItems($items)
            ->setCallingColumn($callingColumn);
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
     * @return \NOUT\Soap\StructType\SelectItems
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
     * Get CallingColumn value
     * @return string|null
     */
    public function getCallingColumn()
    {
        return $this->CallingColumn;
    }
    /**
     * Set CallingColumn value
     * @param string $callingColumn
     * @return \NOUT\Soap\StructType\SelectItems
     */
    public function setCallingColumn($callingColumn = null)
    {
        // validation for constraint: string
        if (!is_null($callingColumn) && !is_string($callingColumn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callingColumn, true), gettype($callingColumn)), __LINE__);
        }
        $this->CallingColumn = $callingColumn;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\SelectItems
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
