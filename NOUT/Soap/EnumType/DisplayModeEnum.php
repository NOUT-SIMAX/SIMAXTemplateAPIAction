<?php

namespace NOUT\Soap\EnumType;

/**
 * This class stands for DisplayModeEnum EnumType
 * @subpackage Enumerations
 */
class DisplayModeEnum
{
    /**
     * Constant for value 'List'
     * @return string 'List'
     */
    const VALUE_LIST = 'List';
    /**
     * Constant for value 'Chart'
     * @return string 'Chart'
     */
    const VALUE_CHART = 'Chart';
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
     * @uses self::VALUE_LIST
     * @uses self::VALUE_CHART
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIST,
            self::VALUE_CHART,
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
