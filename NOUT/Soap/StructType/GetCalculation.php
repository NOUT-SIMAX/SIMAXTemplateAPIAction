<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCalculation StructType
 * @subpackage Structs
 */
class GetCalculation extends AbstractStructBase
{
    /**
     * The ColList
     * @var \NOUT\Soap\StructType\ColListType
     */
    public $ColList;
    /**
     * The CalculationList
     * @var \NOUT\Soap\StructType\CalculationListType
     */
    public $CalculationList;
    /**
     * Constructor method for GetCalculation
     * @uses GetCalculation::setColList()
     * @uses GetCalculation::setCalculationList()
     * @param \NOUT\Soap\StructType\ColListType $colList
     * @param \NOUT\Soap\StructType\CalculationListType $calculationList
     */
    public function __construct(\NOUT\Soap\StructType\ColListType $colList = null, \NOUT\Soap\StructType\CalculationListType $calculationList = null)
    {
        $this
            ->setColList($colList)
            ->setCalculationList($calculationList);
    }
    /**
     * Get ColList value
     * @return \NOUT\Soap\StructType\ColListType|null
     */
    public function getColList()
    {
        return $this->ColList;
    }
    /**
     * Set ColList value
     * @param \NOUT\Soap\StructType\ColListType $colList
     * @return \NOUT\Soap\StructType\GetCalculation
     */
    public function setColList(\NOUT\Soap\StructType\ColListType $colList = null)
    {
        $this->ColList = $colList;
        return $this;
    }
    /**
     * Get CalculationList value
     * @return \NOUT\Soap\StructType\CalculationListType|null
     */
    public function getCalculationList()
    {
        return $this->CalculationList;
    }
    /**
     * Set CalculationList value
     * @param \NOUT\Soap\StructType\CalculationListType $calculationList
     * @return \NOUT\Soap\StructType\GetCalculation
     */
    public function setCalculationList(\NOUT\Soap\StructType\CalculationListType $calculationList = null)
    {
        $this->CalculationList = $calculationList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\GetCalculation
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
