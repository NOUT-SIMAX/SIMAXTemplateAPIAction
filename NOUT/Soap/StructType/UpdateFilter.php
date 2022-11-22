<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateFilter StructType
 * @subpackage Structs
 */
class UpdateFilter extends AbstractStructBase
{
    /**
     * The ID
     * @var string
     */
    public $ID;
    /**
     * The UpdateData
     * @var string
     */
    public $UpdateData;
    /**
     * Constructor method for UpdateFilter
     * @uses UpdateFilter::setID()
     * @uses UpdateFilter::setUpdateData()
     * @param string $iD
     * @param string $updateData
     */
    public function __construct($iD = null, $updateData = null)
    {
        $this
            ->setID($iD)
            ->setUpdateData($updateData);
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
     * @return \NOUT\Soap\StructType\UpdateFilter
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
     * Get UpdateData value
     * @return string|null
     */
    public function getUpdateData()
    {
        return $this->UpdateData;
    }
    /**
     * Set UpdateData value
     * @param string $updateData
     * @return \NOUT\Soap\StructType\UpdateFilter
     */
    public function setUpdateData($updateData = null)
    {
        // validation for constraint: string
        if (!is_null($updateData) && !is_string($updateData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateData, true), gettype($updateData)), __LINE__);
        }
        $this->UpdateData = $updateData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\UpdateFilter
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
