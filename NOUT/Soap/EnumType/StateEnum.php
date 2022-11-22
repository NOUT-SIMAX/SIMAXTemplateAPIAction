<?php

namespace NOUT\Soap\EnumType;

/**
 * This class stands for StateEnum EnumType
 * @subpackage Enumerations
 */
class StateEnum
{
    /**
     * Constant for value 'Processed'
     * @return string 'Processed'
     */
    const VALUE_PROCESSED = 'Processed';
    /**
     * Constant for value 'Unprocessed'
     * @return string 'Unprocessed'
     */
    const VALUE_UNPROCESSED = 'Unprocessed';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_PROCESSED
     * @uses self::VALUE_UNPROCESSED
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PROCESSED,
            self::VALUE_UNPROCESSED,
            self::VALUE_ALL,
        );
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
