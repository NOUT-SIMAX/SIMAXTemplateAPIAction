<?php

namespace NOUT\Soap\EnumType;

/**
 * This class stands for CalculationTypeEnum EnumType
 * @subpackage Enumerations
 */
class CalculationTypeEnum
{
    /**
     * Constant for value 'Sum'
     * @return string 'Sum'
     */
    const VALUE_SUM = 'Sum';
    /**
     * Constant for value 'Count'
     * @return string 'Count'
     */
    const VALUE_COUNT = 'Count';
    /**
     * Constant for value 'Max'
     * @return string 'Max'
     */
    const VALUE_MAX = 'Max';
    /**
     * Constant for value 'Min'
     * @return string 'Min'
     */
    const VALUE_MIN = 'Min';
    /**
     * Constant for value 'Average'
     * @return string 'Average'
     */
    const VALUE_AVERAGE = 'Average';
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
     * @uses self::VALUE_SUM
     * @uses self::VALUE_COUNT
     * @uses self::VALUE_MAX
     * @uses self::VALUE_MIN
     * @uses self::VALUE_AVERAGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUM,
            self::VALUE_COUNT,
            self::VALUE_MAX,
            self::VALUE_MIN,
            self::VALUE_AVERAGE,
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
