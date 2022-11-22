<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for HasChangedResponse StructType
 * @subpackage Structs
 */
class HasChangedResponse extends AbstractStructBase
{
    /**
     * The Value
     * @var int
     */
    public $Value;
    /**
     * Constructor method for HasChangedResponse
     * @uses HasChangedResponse::setValue()
     * @param int $value
     */
    public function __construct($value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return int|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param int $value
     * @return \NOUT\Soap\StructType\HasChangedResponse
     */
    public function setValue($value = null)
    {
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\HasChangedResponse
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
