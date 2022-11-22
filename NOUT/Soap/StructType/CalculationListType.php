<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculationListType StructType
 * @subpackage Structs
 */
class CalculationListType extends AbstractStructBase
{
    /**
     * The Calculation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Calculation;
    /**
     * Constructor method for CalculationListType
     * @uses CalculationListType::setCalculation()
     * @param string[] $calculation
     */
    public function __construct(array $calculation = array())
    {
        $this
            ->setCalculation($calculation);
    }
    /**
     * Get Calculation value
     * @return string[]|null
     */
    public function getCalculation()
    {
        return $this->Calculation;
    }

    /**
     * This method is responsible for validating the values passed to the setCalculation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalculation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalculationForArrayConstraintsFromSetCalculation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $calculationListTypeCalculationItem) {
            // validation for constraint: itemType
            if (!is_string($calculationListTypeCalculationItem)) {
                $invalidValues[] = is_object($calculationListTypeCalculationItem) ? get_class($calculationListTypeCalculationItem) : sprintf('%s(%s)', gettype($calculationListTypeCalculationItem), var_export($calculationListTypeCalculationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Calculation property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Calculation value
     * @throws \InvalidArgumentException
     * @param string[] $calculation
     * @return \NOUT\Soap\StructType\CalculationListType
     */
    public function setCalculation(array $calculation = array())
    {
        // validation for constraint: array
        if ('' !== ($calculationArrayErrorMessage = self::validateCalculationForArrayConstraintsFromSetCalculation($calculation))) {
            throw new \InvalidArgumentException($calculationArrayErrorMessage, __LINE__);
        }
        $this->Calculation = $calculation;
        return $this;
    }
    /**
     * Add item to Calculation value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NOUT\Soap\StructType\CalculationListType
     */
    public function addToCalculation($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Calculation property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Calculation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\CalculationListType
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
