<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for ColListType StructType
 * @subpackage Structs
 */
class ColListType extends AbstractStructBase
{
    /**
     * The Col
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Col;
    /**
     * Constructor method for ColListType
     * @uses ColListType::setCol()
     * @param string[] $col
     */
    public function __construct(array $col = array())
    {
        $this
            ->setCol($col);
    }
    /**
     * Get Col value
     * @return string[]|null
     */
    public function getCol()
    {
        return $this->Col;
    }
    /**
     * This method is responsible for validating the values passed to the setCol method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCol method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateColForArrayConstraintsFromSetCol(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $colListTypeColItem) {
            // validation for constraint: itemType
            if (!is_string($colListTypeColItem)) {
                $invalidValues[] = is_object($colListTypeColItem) ? get_class($colListTypeColItem) : sprintf('%s(%s)', gettype($colListTypeColItem), var_export($colListTypeColItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Col property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Col value
     * @throws \InvalidArgumentException
     * @param string[] $col
     * @return \NOUT\Soap\StructType\ColListType
     */
    public function setCol(array $col = array())
    {
        // validation for constraint: array
        if ('' !== ($colArrayErrorMessage = self::validateColForArrayConstraintsFromSetCol($col))) {
            throw new \InvalidArgumentException($colArrayErrorMessage, __LINE__);
        }
        $this->Col = $col;
        return $this;
    }
    /**
     * Add item to Col value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NOUT\Soap\StructType\ColListType
     */
    public function addToCol($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Col property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Col[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\ColListType
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
