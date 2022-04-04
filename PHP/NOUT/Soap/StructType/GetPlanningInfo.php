<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPlanningInfo StructType
 * @subpackage Structs
 */
class GetPlanningInfo extends AbstractStructBase
{
    /**
     * The Resource
     * @var string
     */
    public $Resource;
    /**
     * The StartTime
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * @var string
     */
    public $EndTime;
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The ID
     * @var string
     */
    public $ID;
    /**
     * The ParamXML
     * @var string
     */
    public $ParamXML;
    /**
     * Constructor method for GetPlanningInfo
     * @uses GetPlanningInfo::setResource()
     * @uses GetPlanningInfo::setStartTime()
     * @uses GetPlanningInfo::setEndTime()
     * @uses GetPlanningInfo::setTable()
     * @uses GetPlanningInfo::setID()
     * @uses GetPlanningInfo::setParamXML()
     * @param string $resource
     * @param string $startTime
     * @param string $endTime
     * @param string $table
     * @param string $iD
     * @param string $paramXML
     */
    public function __construct($resource = null, $startTime = null, $endTime = null, $table = null, $iD = null, $paramXML = null)
    {
        $this
            ->setResource($resource)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setTable($table)
            ->setID($iD)
            ->setParamXML($paramXML);
    }
    /**
     * Get Resource value
     * @return string|null
     */
    public function getResource()
    {
        return $this->Resource;
    }
    /**
     * Set Resource value
     * @param string $resource
     * @return \NOUT\Soap\StructType\GetPlanningInfo
     */
    public function setResource($resource = null)
    {
        // validation for constraint: string
        if (!is_null($resource) && !is_string($resource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resource, true), gettype($resource)), __LINE__);
        }
        $this->Resource = $resource;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \NOUT\Soap\StructType\GetPlanningInfo
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \NOUT\Soap\StructType\GetPlanningInfo
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
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
     * @return \NOUT\Soap\StructType\GetPlanningInfo
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
     * @return \NOUT\Soap\StructType\GetPlanningInfo
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
     * @return \NOUT\Soap\StructType\GetPlanningInfo
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\GetPlanningInfo
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
