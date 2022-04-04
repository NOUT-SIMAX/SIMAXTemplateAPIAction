<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for List StructType
 * @subpackage Structs
 */
class _List extends AbstractStructBase
{
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The ParamXML
     * @var string
     */
    public $ParamXML;
    /**
     * The SpecialParamList
     * @var \NOUT\Soap\StructType\SpecialParamListType
     */
    public $SpecialParamList;
    /**
     * The NoCache
     * @var int
     */
    public $NoCache;
    /**
     * The Checksum
     * @var int
     */
    public $Checksum;
    /**
     * The DisplayMode
     * @var string
     */
    public $DisplayMode;
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
     * Constructor method for List
     * @uses _List::setTable()
     * @uses _List::setParamXML()
     * @uses _List::setSpecialParamList()
     * @uses _List::setNoCache()
     * @uses _List::setChecksum()
     * @uses _List::setDisplayMode()
     * @uses _List::setCallingColumn()
     * @uses _List::setCallingInfo()
     * @param string $table
     * @param string $paramXML
     * @param \NOUT\Soap\StructType\SpecialParamListType $specialParamList
     * @param int $noCache
     * @param int $checksum
     * @param string $displayMode
     * @param string $callingColumn
     * @param \NOUT\Soap\StructType\CallingInfoType $callingInfo
     */
    public function __construct($table = null, $paramXML = null, \NOUT\Soap\StructType\SpecialParamListType $specialParamList = null, $noCache = null, $checksum = null, $displayMode = null, $callingColumn = null, \NOUT\Soap\StructType\CallingInfoType $callingInfo = null)
    {
        $this
            ->setTable($table)
            ->setParamXML($paramXML)
            ->setSpecialParamList($specialParamList)
            ->setNoCache($noCache)
            ->setChecksum($checksum)
            ->setDisplayMode($displayMode)
            ->setCallingColumn($callingColumn)
            ->setCallingInfo($callingInfo);
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
     * @return \NOUT\Soap\StructType\_List
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
     * Get ParamXML value
     * @return string|null
     */
    public function getParamXML()
    {
        return $this->ParamXML;
    }
    /**
     * Set ParamXML value
     * @param string $paramXML
     * @return \NOUT\Soap\StructType\_List
     */
    public function setParamXML($paramXML = null)
    {
        // validation for constraint: string
        if (!is_null($paramXML) && !is_string($paramXML)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paramXML, true), gettype($paramXML)), __LINE__);
        }
        $this->ParamXML = $paramXML;
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
     * @return \NOUT\Soap\StructType\_List
     */
    public function setSpecialParamList(\NOUT\Soap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this->SpecialParamList = $specialParamList;
        return $this;
    }
    /**
     * Get NoCache value
     * @return int|null
     */
    public function getNoCache()
    {
        return $this->NoCache;
    }
    /**
     * Set NoCache value
     * @param int $noCache
     * @return \NOUT\Soap\StructType\_List
     */
    public function setNoCache($noCache = null)
    {
        // validation for constraint: int
        if (!is_null($noCache) && !(is_int($noCache) || ctype_digit($noCache))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noCache, true), gettype($noCache)), __LINE__);
        }
        $this->NoCache = $noCache;
        return $this;
    }
    /**
     * Get Checksum value
     * @return int|null
     */
    public function getChecksum()
    {
        return $this->Checksum;
    }
    /**
     * Set Checksum value
     * @param int $checksum
     * @return \NOUT\Soap\StructType\_List
     */
    public function setChecksum($checksum = null)
    {
        // validation for constraint: int
        if (!is_null($checksum) && !(is_int($checksum) || ctype_digit($checksum))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($checksum, true), gettype($checksum)), __LINE__);
        }
        $this->Checksum = $checksum;
        return $this;
    }
    /**
     * Get DisplayMode value
     * @return string|null
     */
    public function getDisplayMode()
    {
        return $this->DisplayMode;
    }
    /**
     * Set DisplayMode value
     * @uses \NOUT\Soap\EnumType\DisplayModeParamEnum::valueIsValid()
     * @uses \NOUT\Soap\EnumType\DisplayModeParamEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $displayMode
     * @return \NOUT\Soap\StructType\_List
     */
    public function setDisplayMode($displayMode = null)
    {
        // validation for constraint: enumeration
        if (!\NOUT\Soap\EnumType\DisplayModeParamEnum::valueIsValid($displayMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \NOUT\Soap\EnumType\DisplayModeParamEnum', is_array($displayMode) ? implode(', ', $displayMode) : var_export($displayMode, true), implode(', ', \NOUT\Soap\EnumType\DisplayModeParamEnum::getValidValues())), __LINE__);
        }
        $this->DisplayMode = $displayMode;
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
     * @return \NOUT\Soap\StructType\_List
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
     * @return \NOUT\Soap\StructType\_List
     */
    public function setCallingInfo(\NOUT\Soap\StructType\CallingInfoType $callingInfo = null)
    {
        $this->CallingInfo = $callingInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\_List
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
