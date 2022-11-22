<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateFolder StructType
 * @subpackage Structs
 */
class UpdateFolder extends AbstractStructBase
{
    /**
     * The IDFolder
     * @var string
     */
    public $IDFolder;
    /**
     * The UpdateData
     * @var string
     */
    public $UpdateData;
    /**
     * Constructor method for UpdateFolder
     * @uses UpdateFolder::setIDFolder()
     * @uses UpdateFolder::setUpdateData()
     * @param string $iDFolder
     * @param string $updateData
     */
    public function __construct($iDFolder = null, $updateData = null)
    {
        $this
            ->setIDFolder($iDFolder)
            ->setUpdateData($updateData);
    }
    /**
     * Get IDFolder value
     * @return string|null
     */
    public function getIDFolder()
    {
        return $this->IDFolder;
    }
    /**
     * Set IDFolder value
     * @param string $iDFolder
     * @return \NOUT\Soap\StructType\UpdateFolder
     */
    public function setIDFolder($iDFolder = null)
    {
        // validation for constraint: string
        if (!is_null($iDFolder) && !is_string($iDFolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iDFolder, true), gettype($iDFolder)), __LINE__);
        }
        $this->IDFolder = $iDFolder;
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
     * @return \NOUT\Soap\StructType\UpdateFolder
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
     * @return \NOUT\Soap\StructType\UpdateFolder
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
