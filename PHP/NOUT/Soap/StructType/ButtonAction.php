<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for ButtonAction StructType
 * @subpackage Structs
 */
class ButtonAction extends AbstractStructBase
{
    /**
     * The CallingColumn
     * @var string
     */
    public $CallingColumn;
    /**
     * The ColumnSelection
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NOUT\Soap\StructType\ColumnSelection[]
     */
    public $ColumnSelection;
    /**
     * Constructor method for ButtonAction
     * @uses ButtonAction::setCallingColumn()
     * @uses ButtonAction::setColumnSelection()
     * @param string $callingColumn
     * @param \NOUT\Soap\StructType\ColumnSelection[] $columnSelection
     */
    public function __construct($callingColumn = null, array $columnSelection = array())
    {
        $this
            ->setCallingColumn($callingColumn)
            ->setColumnSelection($columnSelection);
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
     * @return \NOUT\Soap\StructType\ButtonAction
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
     * Get ColumnSelection value
     * @return \NOUT\Soap\StructType\ColumnSelection[]|null
     */
    public function getColumnSelection()
    {
        return $this->ColumnSelection;
    }
    /**
     * This method is responsible for validating the values passed to the setColumnSelection method
     * This method is willingly generated in order to preserve the one-line inline validation within the setColumnSelection method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateColumnSelectionForArrayConstraintsFromSetColumnSelection(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $buttonActionColumnSelectionItem) {
            // validation for constraint: itemType
            if (!$buttonActionColumnSelectionItem instanceof \NOUT\Soap\StructType\ColumnSelection) {
                $invalidValues[] = is_object($buttonActionColumnSelectionItem) ? get_class($buttonActionColumnSelectionItem) : sprintf('%s(%s)', gettype($buttonActionColumnSelectionItem), var_export($buttonActionColumnSelectionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ColumnSelection property can only contain items of type \NOUT\Soap\StructType\ColumnSelection, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ColumnSelection value
     * @throws \InvalidArgumentException
     * @param \NOUT\Soap\StructType\ColumnSelection[] $columnSelection
     * @return \NOUT\Soap\StructType\ButtonAction
     */
    public function setColumnSelection(array $columnSelection = array())
    {
        // validation for constraint: array
        if ('' !== ($columnSelectionArrayErrorMessage = self::validateColumnSelectionForArrayConstraintsFromSetColumnSelection($columnSelection))) {
            throw new \InvalidArgumentException($columnSelectionArrayErrorMessage, __LINE__);
        }
        $this->ColumnSelection = $columnSelection;
        return $this;
    }
    /**
     * Add item to ColumnSelection value
     * @throws \InvalidArgumentException
     * @param \NOUT\Soap\StructType\ColumnSelection $item
     * @return \NOUT\Soap\StructType\ButtonAction
     */
    public function addToColumnSelection(\NOUT\Soap\StructType\ColumnSelection $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NOUT\Soap\StructType\ColumnSelection) {
            throw new \InvalidArgumentException(sprintf('The ColumnSelection property can only contain items of type \NOUT\Soap\StructType\ColumnSelection, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ColumnSelection[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\ButtonAction
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
