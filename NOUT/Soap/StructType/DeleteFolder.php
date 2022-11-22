<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteFolder StructType
 * @subpackage Structs
 */
class DeleteFolder extends AbstractStructBase
{
    /**
     * The IDFolder
     * @var string
     */
    public $IDFolder;
    /**
     * Constructor method for DeleteFolder
     * @uses DeleteFolder::setIDFolder()
     * @param string $iDFolder
     */
    public function __construct($iDFolder = null)
    {
        $this
            ->setIDFolder($iDFolder);
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
     * @return \NOUT\Soap\StructType\DeleteFolder
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\DeleteFolder
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
