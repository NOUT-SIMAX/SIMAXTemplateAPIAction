<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestMessage StructType
 * @subpackage Structs
 */
class RequestMessage extends AbstractStructBase
{
    /**
     * The StartDate
     * @var string
     */
    public $StartDate;
    /**
     * The EndDate
     * @var string
     */
    public $EndDate;
    /**
     * The Filter
     * @var \NOUT\Soap\StructType\FilterType
     */
    public $Filter;
    /**
     * The SpecialParamList
     * @var \NOUT\Soap\StructType\SpecialParamListType
     */
    public $SpecialParamList;
    /**
     * Constructor method for RequestMessage
     * @uses RequestMessage::setStartDate()
     * @uses RequestMessage::setEndDate()
     * @uses RequestMessage::setFilter()
     * @uses RequestMessage::setSpecialParamList()
     * @param string $startDate
     * @param string $endDate
     * @param \NOUT\Soap\StructType\FilterType $filter
     * @param \NOUT\Soap\StructType\SpecialParamListType $specialParamList
     */
    public function __construct($startDate = null, $endDate = null, \NOUT\Soap\StructType\FilterType $filter = null, \NOUT\Soap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setFilter($filter)
            ->setSpecialParamList($specialParamList);
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \NOUT\Soap\StructType\RequestMessage
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \NOUT\Soap\StructType\RequestMessage
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get Filter value
     * @return \NOUT\Soap\StructType\FilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \NOUT\Soap\StructType\FilterType $filter
     * @return \NOUT\Soap\StructType\RequestMessage
     */
    public function setFilter(\NOUT\Soap\StructType\FilterType $filter = null)
    {
        $this->Filter = $filter;
        return $this;
    }
    /**
     * Get SpecialParamList value
     * @return \NOUT\Soap\StructType\SpecialParamListType|null
     */
    public function getSpecialParamList()
    {
        return $this->SpecialParamList;
    }
    /**
     * Set SpecialParamList value
     * @param \NOUT\Soap\StructType\SpecialParamListType $specialParamList
     * @return \NOUT\Soap\StructType\RequestMessage
     */
    public function setSpecialParamList(\NOUT\Soap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this->SpecialParamList = $specialParamList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\RequestMessage
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
