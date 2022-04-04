<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for Cancel StructType
 * @subpackage Structs
 */
class Cancel extends AbstractStructBase
{
    /**
     * The Context
     * @var int
     */
    public $Context;
    /**
     * The ByUser
     * @var int
     */
    public $ByUser;
    /**
     * Constructor method for Cancel
     * @uses Cancel::setContext()
     * @uses Cancel::setByUser()
     * @param int $context
     * @param int $byUser
     */
    public function __construct($context = null, $byUser = null)
    {
        $this
            ->setContext($context)
            ->setByUser($byUser);
    }
    /**
     * Get Context value
     * @return int|null
     */
    public function getContext()
    {
        return $this->Context;
    }
    /**
     * Set Context value
     * @param int $context
     * @return \NOUT\Soap\StructType\Cancel
     */
    public function setContext($context = null)
    {
        // validation for constraint: int
        if (!is_null($context) && !(is_int($context) || ctype_digit($context))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($context, true), gettype($context)), __LINE__);
        }
        $this->Context = $context;
        return $this;
    }
    /**
     * Get ByUser value
     * @return int|null
     */
    public function getByUser()
    {
        return $this->ByUser;
    }
    /**
     * Set ByUser value
     * @param int $byUser
     * @return \NOUT\Soap\StructType\Cancel
     */
    public function setByUser($byUser = null)
    {
        // validation for constraint: int
        if (!is_null($byUser) && !(is_int($byUser) || ctype_digit($byUser))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($byUser, true), gettype($byUser)), __LINE__);
        }
        $this->ByUser = $byUser;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\Cancel
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
