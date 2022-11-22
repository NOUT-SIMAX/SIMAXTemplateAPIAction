<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeColType StructType
 * @subpackage Structs
 */
class ListeColType extends AbstractStructBase
{
    /**
     * The Column
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Column;
    /**
     * Constructor method for ListeColType
     * @uses ListeColType::setColumn()
     * @param string[] $column
     */
    public function __construct(array $column = array())
    {
        $this
            ->setColumn($column);
    }
    /**
     * Get Column value
     * @return string[]|null
     */
    public function getColumn()
    {
        return $this->Column;
    }
    /**
     * This method is responsible for validating the values passed to the setColumn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setColumn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateColumnForArrayConstraintsFromSetColumn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listeColTypeColumnItem) {
            // validation for constraint: itemType
            if (!is_string($listeColTypeColumnItem)) {
                $invalidValues[] = is_object($listeColTypeColumnItem) ? get_class($listeColTypeColumnItem) : sprintf('%s(%s)', gettype($listeColTypeColumnItem), var_export($listeColTypeColumnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Column property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Column value
     * @throws \InvalidArgumentException
     * @param string[] $column
     * @return \NOUT\Soap\StructType\ListeColType
     */
    public function setColumn(array $column = array())
    {
        // validation for constraint: array
        if ('' !== ($columnArrayErrorMessage = self::validateColumnForArrayConstraintsFromSetColumn($column))) {
            throw new \InvalidArgumentException($columnArrayErrorMessage, __LINE__);
        }
        $this->Column = $column;
        return $this;
    }
    /**
     * Add item to Column value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NOUT\Soap\StructType\ListeColType
     */
    public function addToColumn($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Column property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Column[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\ListeColType
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
