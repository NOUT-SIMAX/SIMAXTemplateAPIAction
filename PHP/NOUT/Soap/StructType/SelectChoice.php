<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectChoice StructType
 * @subpackage Structs
 */
class SelectChoice extends AbstractStructBase
{
    /**
     * The Choice
     * @var string
     */
    public $Choice;
    /**
     * Constructor method for SelectChoice
     * @uses SelectChoice::setChoice()
     * @param string $choice
     */
    public function __construct($choice = null)
    {
        $this
            ->setChoice($choice);
    }
    /**
     * Get Choice value
     * @return string|null
     */
    public function getChoice()
    {
        return $this->Choice;
    }
    /**
     * Set Choice value
     * @param string $choice
     * @return \NOUT\Soap\StructType\SelectChoice
     */
    public function setChoice($choice = null)
    {
        // validation for constraint: string
        if (!is_null($choice) && !is_string($choice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($choice, true), gettype($choice)), __LINE__);
        }
        $this->Choice = $choice;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\SelectChoice
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
