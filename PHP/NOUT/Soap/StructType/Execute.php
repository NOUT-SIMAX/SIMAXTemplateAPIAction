<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for Execute StructType
 * @subpackage Structs
 */
class Execute extends AbstractStructBase
{
    /**
     * The ID
     * @var string
     */
    public $ID;
    /**
     * The Sentence
     * @var string
     */
    public $Sentence;
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
     * The BtnListMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BtnListMode;
    /**
     * The Final
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Final;
    /**
     * Constructor method for Execute
     * @uses Execute::setID()
     * @uses Execute::setSentence()
     * @uses Execute::setParamXML()
     * @uses Execute::setSpecialParamList()
     * @uses Execute::setChecksum()
     * @uses Execute::setDisplayMode()
     * @uses Execute::setCallingColumn()
     * @uses Execute::setCallingInfo()
     * @uses Execute::setBtnListMode()
     * @uses Execute::setFinal()
     * @param string $iD
     * @param string $sentence
     * @param string $paramXML
     * @param \NOUT\Soap\StructType\SpecialParamListType $specialParamList
     * @param int $checksum
     * @param string $displayMode
     * @param string $callingColumn
     * @param \NOUT\Soap\StructType\CallingInfoType $callingInfo
     * @param int $btnListMode
     * @param int $final
     */
    public function __construct($iD = null, $sentence = null, $paramXML = null, \NOUT\Soap\StructType\SpecialParamListType $specialParamList = null, $checksum = null, $displayMode = null, $callingColumn = null, \NOUT\Soap\StructType\CallingInfoType $callingInfo = null, $btnListMode = null, $final = null)
    {
        $this
            ->setID($iD)
            ->setSentence($sentence)
            ->setParamXML($paramXML)
            ->setSpecialParamList($specialParamList)
            ->setChecksum($checksum)
            ->setDisplayMode($displayMode)
            ->setCallingColumn($callingColumn)
            ->setCallingInfo($callingInfo)
            ->setBtnListMode($btnListMode)
            ->setFinal($final);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \NOUT\Soap\StructType\Execute
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Sentence value
     * @return string|null
     */
    public function getSentence()
    {
        return $this->Sentence;
    }
    /**
     * Set Sentence value
     * @param string $sentence
     * @return \NOUT\Soap\StructType\Execute
     */
    public function setSentence($sentence = null)
    {
        // validation for constraint: string
        if (!is_null($sentence) && !is_string($sentence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sentence, true), gettype($sentence)), __LINE__);
        }
        $this->Sentence = $sentence;
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
     * @return \NOUT\Soap\StructType\Execute
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
     * @return \NOUT\Soap\StructType\Execute
     */
    public function setSpecialParamList(\NOUT\Soap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this->SpecialParamList = $specialParamList;
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
     * @return \NOUT\Soap\StructType\Execute
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
     * @return \NOUT\Soap\StructType\Execute
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
     * @return \NOUT\Soap\StructType\Execute
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
     * @return \NOUT\Soap\StructType\Execute
     */
    public function setCallingInfo(\NOUT\Soap\StructType\CallingInfoType $callingInfo = null)
    {
        $this->CallingInfo = $callingInfo;
        return $this;
    }
    /**
     * Get BtnListMode value
     * @return int|null
     */
    public function getBtnListMode()
    {
        return $this->BtnListMode;
    }
    /**
     * Set BtnListMode value
     * @param int $btnListMode
     * @return \NOUT\Soap\StructType\Execute
     */
    public function setBtnListMode($btnListMode = null)
    {
        // validation for constraint: int
        if (!is_null($btnListMode) && !(is_int($btnListMode) || ctype_digit($btnListMode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($btnListMode, true), gettype($btnListMode)), __LINE__);
        }
        $this->BtnListMode = $btnListMode;
        return $this;
    }
    /**
     * Get Final value
     * @return int|null
     */
    public function getFinal()
    {
        return $this->Final;
    }
    /**
     * Set Final value
     * @param int $final
     * @return \NOUT\Soap\StructType\Execute
     */
    public function setFinal($final = null)
    {
        // validation for constraint: int
        if (!is_null($final) && !(is_int($final) || ctype_digit($final))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($final, true), gettype($final)), __LINE__);
        }
        $this->Final = $final;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\Execute
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
