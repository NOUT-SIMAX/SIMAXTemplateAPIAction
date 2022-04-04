<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestParam StructType
 * @subpackage Structs
 */
class RequestParam extends AbstractStructBase
{
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The ColList
     * @var \NOUT\Soap\StructType\ColListType
     */
    public $ColList;
    /**
     * The CondList
     * @var string
     */
    public $CondList;
    /**
     * The MaxResult
     * @var int
     */
    public $MaxResult;
    /**
     * The CallingColumn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CallingColumn;
    /**
     * The CallingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUT\Soap\StructType\CallingInfoType
     */
    public $CallingInfo;
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
     * The SpecialParamList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUT\Soap\StructType\SpecialParamListType
     */
    public $SpecialParamList;
    /**
     * Constructor method for RequestParam
     * @uses RequestParam::setTable()
     * @uses RequestParam::setColList()
     * @uses RequestParam::setCondList()
     * @uses RequestParam::setMaxResult()
     * @uses RequestParam::setCallingColumn()
     * @uses RequestParam::setCallingInfo()
     * @uses RequestParam::setSort1()
     * @uses RequestParam::setSort2()
     * @uses RequestParam::setSort3()
     * @uses RequestParam::setSpecialParamList()
     * @param string $table
     * @param \NOUT\Soap\StructType\ColListType $colList
     * @param string $condList
     * @param int $maxResult
     * @param string $callingColumn
     * @param \NOUT\Soap\StructType\CallingInfoType $callingInfo
     * @param \NOUT\Soap\StructType\SortType $sort1
     * @param \NOUT\Soap\StructType\SortType $sort2
     * @param \NOUT\Soap\StructType\SortType $sort3
     * @param \NOUT\Soap\StructType\SpecialParamListType $specialParamList
     */
    public function __construct($table = null, \NOUT\Soap\StructType\ColListType $colList = null, $condList = null, $maxResult = null, $callingColumn = null, \NOUT\Soap\StructType\CallingInfoType $callingInfo = null, \NOUT\Soap\StructType\SortType $sort1 = null, \NOUT\Soap\StructType\SortType $sort2 = null, \NOUT\Soap\StructType\SortType $sort3 = null, \NOUT\Soap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this
            ->setTable($table)
            ->setColList($colList)
            ->setCondList($condList)
            ->setMaxResult($maxResult)
            ->setCallingColumn($callingColumn)
            ->setCallingInfo($callingInfo)
            ->setSort1($sort1)
            ->setSort2($sort2)
            ->setSort3($sort3)
            ->setSpecialParamList($specialParamList);
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
     * @return \NOUT\Soap\StructType\RequestParam
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
     * @return \NOUT\Soap\StructType\RequestParam
     */
    public function setColList(\NOUT\Soap\StructType\ColListType $colList = null)
    {
        $this->ColList = $colList;
        return $this;
    }
    /**
     * Get CondList value
     * @return string|null
     */
    public function getCondList()
    {
        return $this->CondList;
    }
    /**
     * Set CondList value
     * @param string $condList
     * @return \NOUT\Soap\StructType\RequestParam
     */
    public function setCondList($condList = null)
    {
        // validation for constraint: string
        if (!is_null($condList) && !is_string($condList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($condList, true), gettype($condList)), __LINE__);
        }
        $this->CondList = $condList;
        return $this;
    }
    /**
     * Get MaxResult value
     * @return int|null
     */
    public function getMaxResult()
    {
        return $this->MaxResult;
    }
    /**
     * Set MaxResult value
     * @param int $maxResult
     * @return \NOUT\Soap\StructType\RequestParam
     */
    public function setMaxResult($maxResult = null)
    {
        // validation for constraint: int
        if (!is_null($maxResult) && !(is_int($maxResult) || ctype_digit($maxResult))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxResult, true), gettype($maxResult)), __LINE__);
        }
        $this->MaxResult = $maxResult;
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
     * @return \NOUT\Soap\StructType\RequestParam
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
     * Get CallingInfo value
     * @return \NOUT\Soap\StructType\CallingInfoType|null
     */
    public function getCallingInfo()
    {
        return $this->CallingInfo;
    }
    /**
     * Set CallingInfo value
     * @param \NOUT\Soap\StructType\CallingInfoType $callingInfo
     * @return \NOUT\Soap\StructType\RequestParam
     */
    public function setCallingInfo(\NOUT\Soap\StructType\CallingInfoType $callingInfo = null)
    {
        $this->CallingInfo = $callingInfo;
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
     * @return \NOUT\Soap\StructType\RequestParam
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
     * @return \NOUT\Soap\StructType\RequestParam
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
     * @return \NOUT\Soap\StructType\RequestParam
     */
    public function setSort3(\NOUT\Soap\StructType\SortType $sort3 = null)
    {
        $this->Sort3 = $sort3;
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
     * @return \NOUT\Soap\StructType\RequestParam
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
     * @return \NOUT\Soap\StructType\RequestParam
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
