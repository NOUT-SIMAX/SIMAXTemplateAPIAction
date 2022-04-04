<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialParamListType StructType
 * @subpackage Structs
 */
class SpecialParamListType extends AbstractStructBase
{
    /**
     * The First
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $First;
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Length;
    /**
     * The WithBreakRow
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $WithBreakRow;
    /**
     * The WithEndCalculation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $WithEndCalculation;
    /**
     * The ChangePage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ChangePage;
    /**
     * The Sort1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUT\Soap\StructType\SortType
     */
    public $Sort1;
    /**
     * The Sort2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUT\Soap\StructType\SortType
     */
    public $Sort2;
    /**
     * The Sort3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUT\Soap\StructType\SortType
     */
    public $Sort3;
    /**
     * The ItemTreeParent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemTreeParent;
    /**
     * The OnDemandColumns
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OnDemandColumns;
    /**
     * Constructor method for SpecialParamListType
     * @uses SpecialParamListType::setFirst()
     * @uses SpecialParamListType::setLength()
     * @uses SpecialParamListType::setWithBreakRow()
     * @uses SpecialParamListType::setWithEndCalculation()
     * @uses SpecialParamListType::setChangePage()
     * @uses SpecialParamListType::setSort1()
     * @uses SpecialParamListType::setSort2()
     * @uses SpecialParamListType::setSort3()
     * @uses SpecialParamListType::setItemTreeParent()
     * @uses SpecialParamListType::setOnDemandColumns()
     * @param int $first
     * @param int $length
     * @param int $withBreakRow
     * @param int $withEndCalculation
     * @param int $changePage
     * @param \NOUT\Soap\StructType\SortType $sort1
     * @param \NOUT\Soap\StructType\SortType $sort2
     * @param \NOUT\Soap\StructType\SortType $sort3
     * @param string $itemTreeParent
     * @param string $onDemandColumns
     */
    public function __construct($first = null, $length = null, $withBreakRow = null, $withEndCalculation = null, $changePage = null, \NOUT\Soap\StructType\SortType $sort1 = null, \NOUT\Soap\StructType\SortType $sort2 = null, \NOUT\Soap\StructType\SortType $sort3 = null, $itemTreeParent = null, $onDemandColumns = null)
    {
        $this
            ->setFirst($first)
            ->setLength($length)
            ->setWithBreakRow($withBreakRow)
            ->setWithEndCalculation($withEndCalculation)
            ->setChangePage($changePage)
            ->setSort1($sort1)
            ->setSort2($sort2)
            ->setSort3($sort3)
            ->setItemTreeParent($itemTreeParent)
            ->setOnDemandColumns($onDemandColumns);
    }
    /**
     * Get First value
     * @return int|null
     */
    public function getFirst()
    {
        return $this->First;
    }
    /**
     * Set First value
     * @param int $first
     * @return \NOUT\Soap\StructType\SpecialParamListType
     */
    public function setFirst($first = null)
    {
        // validation for constraint: int
        if (!is_null($first) && !(is_int($first) || ctype_digit($first))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($first, true), gettype($first)), __LINE__);
        }
        $this->First = $first;
        return $this;
    }
    /**
     * Get Length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param int $length
     * @return \NOUT\Soap\StructType\SpecialParamListType
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !(is_int($length) || ctype_digit($length))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->Length = $length;
        return $this;
    }
    /**
     * Get WithBreakRow value
     * @return int|null
     */
    public function getWithBreakRow()
    {
        return $this->WithBreakRow;
    }
    /**
     * Set WithBreakRow value
     * @param int $withBreakRow
     * @return \NOUT\Soap\StructType\SpecialParamListType
     */
    public function setWithBreakRow($withBreakRow = null)
    {
        // validation for constraint: int
        if (!is_null($withBreakRow) && !(is_int($withBreakRow) || ctype_digit($withBreakRow))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($withBreakRow, true), gettype($withBreakRow)), __LINE__);
        }
        $this->WithBreakRow = $withBreakRow;
        return $this;
    }
    /**
     * Get WithEndCalculation value
     * @return int|null
     */
    public function getWithEndCalculation()
    {
        return $this->WithEndCalculation;
    }
    /**
     * Set WithEndCalculation value
     * @param int $withEndCalculation
     * @return \NOUT\Soap\StructType\SpecialParamListType
     */
    public function setWithEndCalculation($withEndCalculation = null)
    {
        // validation for constraint: int
        if (!is_null($withEndCalculation) && !(is_int($withEndCalculation) || ctype_digit($withEndCalculation))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($withEndCalculation, true), gettype($withEndCalculation)), __LINE__);
        }
        $this->WithEndCalculation = $withEndCalculation;
        return $this;
    }
    /**
     * Get ChangePage value
     * @return int|null
     */
    public function getChangePage()
    {
        return $this->ChangePage;
    }
    /**
     * Set ChangePage value
     * @param int $changePage
     * @return \NOUT\Soap\StructType\SpecialParamListType
     */
    public function setChangePage($changePage = null)
    {
        // validation for constraint: int
        if (!is_null($changePage) && !(is_int($changePage) || ctype_digit($changePage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changePage, true), gettype($changePage)), __LINE__);
        }
        $this->ChangePage = $changePage;
        return $this;
    }
    /**
     * Get Sort1 value
     * @return \NOUT\Soap\StructType\SortType|null
     */
    public function getSort1()
    {
        return $this->Sort1;
    }
    /**
     * Set Sort1 value
     * @param \NOUT\Soap\StructType\SortType $sort1
     * @return \NOUT\Soap\StructType\SpecialParamListType
     */
    public function setSort1(\NOUT\Soap\StructType\SortType $sort1 = null)
    {
        $this->Sort1 = $sort1;
        return $this;
    }
    /**
     * Get Sort2 value
     * @return \NOUT\Soap\StructType\SortType|null
     */
    public function getSort2()
    {
        return $this->Sort2;
    }
    /**
     * Set Sort2 value
     * @param \NOUT\Soap\StructType\SortType $sort2
     * @return \NOUT\Soap\StructType\SpecialParamListType
     */
    public function setSort2(\NOUT\Soap\StructType\SortType $sort2 = null)
    {
        $this->Sort2 = $sort2;
        return $this;
    }
    /**
     * Get Sort3 value
     * @return \NOUT\Soap\StructType\SortType|null
     */
    public function getSort3()
    {
        return $this->Sort3;
    }
    /**
     * Set Sort3 value
     * @param \NOUT\Soap\StructType\SortType $sort3
     * @return \NOUT\Soap\StructType\SpecialParamListType
     */
    public function setSort3(\NOUT\Soap\StructType\SortType $sort3 = null)
    {
        $this->Sort3 = $sort3;
        return $this;
    }
    /**
     * Get ItemTreeParent value
     * @return string|null
     */
    public function getItemTreeParent()
    {
        return $this->ItemTreeParent;
    }
    /**
     * Set ItemTreeParent value
     * @param string $itemTreeParent
     * @return \NOUT\Soap\StructType\SpecialParamListType
     */
    public function setItemTreeParent($itemTreeParent = null)
    {
        // validation for constraint: string
        if (!is_null($itemTreeParent) && !is_string($itemTreeParent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemTreeParent, true), gettype($itemTreeParent)), __LINE__);
        }
        $this->ItemTreeParent = $itemTreeParent;
        return $this;
    }
    /**
     * Get OnDemandColumns value
     * @return string|null
     */
    public function getOnDemandColumns()
    {
        return $this->OnDemandColumns;
    }
    /**
     * Set OnDemandColumns value
     * @param string $onDemandColumns
     * @return \NOUT\Soap\StructType\SpecialParamListType
     */
    public function setOnDemandColumns($onDemandColumns = null)
    {
        // validation for constraint: string
        if (!is_null($onDemandColumns) && !is_string($onDemandColumns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($onDemandColumns, true), gettype($onDemandColumns)), __LINE__);
        }
        $this->OnDemandColumns = $onDemandColumns;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\SpecialParamListType
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
