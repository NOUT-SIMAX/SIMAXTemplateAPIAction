<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for PlanningFilter StructType
 * @subpackage Structs
 */
class PlanningFilter extends AbstractStructBase
{
    /**
     * The Resource
     * @var string
     */
    public $Resource;
    /**
     * The Table
     * @var string
     */
    public $Table;
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
     * Constructor method for PlanningFilter
     * @uses PlanningFilter::setResource()
     * @uses PlanningFilter::setTable()
     * @uses PlanningFilter::setStartTime()
     * @uses PlanningFilter::setEndTime()
     * @param string $resource
     * @param string $table
     * @param string $startTime
     * @param string $endTime
     */
    public function __construct($resource = null, $table = null, $startTime = null, $endTime = null)
    {
        $this
            ->setResource($resource)
            ->setTable($table)
            ->setStartTime($startTime)
            ->setEndTime($endTime);
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
     * @return \NOUT\Soap\StructType\PlanningFilter
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
     * @return \NOUT\Soap\StructType\PlanningFilter
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
     * @return \NOUT\Soap\StructType\PlanningFilter
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
     * @return \NOUT\Soap\StructType\PlanningFilter
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\PlanningFilter
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
