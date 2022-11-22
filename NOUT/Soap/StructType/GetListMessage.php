<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListMessage StructType
 * @subpackage Structs
 */
class GetListMessage extends AbstractStructBase
{
    /**
     * The MessageType
     * @var string
     */
    public $MessageType;
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
     * The UserMessagerie
     * @var string
     */
    public $UserMessagerie;
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
     * Constructor method for GetListMessage
     * @uses GetListMessage::setMessageType()
     * @uses GetListMessage::setStartDate()
     * @uses GetListMessage::setEndDate()
     * @uses GetListMessage::setUserMessagerie()
     * @uses GetListMessage::setFilter()
     * @uses GetListMessage::setSpecialParamList()
     * @param string $messageType
     * @param string $startDate
     * @param string $endDate
     * @param string $userMessagerie
     * @param \NOUT\Soap\StructType\FilterType $filter
     * @param \NOUT\Soap\StructType\SpecialParamListType $specialParamList
     */
    public function __construct($messageType = null, $startDate = null, $endDate = null, $userMessagerie = null, \NOUT\Soap\StructType\FilterType $filter = null, \NOUT\Soap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this
            ->setMessageType($messageType)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setUserMessagerie($userMessagerie)
            ->setFilter($filter)
            ->setSpecialParamList($specialParamList);
    }
    /**
     * Get MessageType value
     * @return string|null
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }
    /**
     * Set MessageType value
     * @uses \NOUT\Soap\EnumType\MessageTypeEnum::valueIsValid()
     * @uses \NOUT\Soap\EnumType\MessageTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $messageType
     * @return \NOUT\Soap\StructType\GetListMessage
     */
    public function setMessageType($messageType = null)
    {
        // validation for constraint: enumeration
        if (!\NOUT\Soap\EnumType\MessageTypeEnum::valueIsValid($messageType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \NOUT\Soap\EnumType\MessageTypeEnum', is_array($messageType) ? implode(', ', $messageType) : var_export($messageType, true), implode(', ', \NOUT\Soap\EnumType\MessageTypeEnum::getValidValues())), __LINE__);
        }
        $this->MessageType = $messageType;
        return $this;
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
     * @return \NOUT\Soap\StructType\GetListMessage
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
     * @return \NOUT\Soap\StructType\GetListMessage
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
     * Get UserMessagerie value
     * @return string|null
     */
    public function getUserMessagerie()
    {
        return $this->UserMessagerie;
    }
    /**
     * Set UserMessagerie value
     * @param string $userMessagerie
     * @return \NOUT\Soap\StructType\GetListMessage
     */
    public function setUserMessagerie($userMessagerie = null)
    {
        // validation for constraint: string
        if (!is_null($userMessagerie) && !is_string($userMessagerie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userMessagerie, true), gettype($userMessagerie)), __LINE__);
        }
        $this->UserMessagerie = $userMessagerie;
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
     * @return \NOUT\Soap\StructType\GetListMessage
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
     * @return \NOUT\Soap\StructType\GetListMessage
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
     * @return \NOUT\Soap\StructType\GetListMessage
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
