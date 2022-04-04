<?php

namespace NOUT\Soap\EnumType;

/**
 * This class stands for DisplayModeParamEnum EnumType
 * @subpackage Enumerations
 */
class DisplayModeParamEnum
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
     * Constant for value 'Planning'
     * @return string 'Planning'
     */
    const VALUE_PLANNING = 'Planning';
    /**
     * Constant for value 'Thumbnail'
     * @return string 'Thumbnail'
     */
    const VALUE_THUMBNAIL = 'Thumbnail';
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
     * @uses self::VALUE_PLANNING
     * @uses self::VALUE_THUMBNAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIST,
            self::VALUE_CHART,
            self::VALUE_PLANNING,
            self::VALUE_THUMBNAIL,
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
