<?php

namespace NOUT\Soap\EnumType;

/**
 * This class stands for CreateTypeEnum EnumType
 * @subpackage Enumerations
 */
class CreateTypeEnum
{
    /**
     * Constant for value 'Empty'
     * @return string 'Empty'
     */
    const VALUE_EMPTY = 'Empty';
    /**
     * Constant for value 'Forward'
     * @return string 'Forward'
     */
    const VALUE_FORWARD = 'Forward';
    /**
     * Constant for value 'Answer'
     * @return string 'Answer'
     */
    const VALUE_ANSWER = 'Answer';
    /**
     * Constant for value 'Answer all'
     * @return string 'Answer all'
     */
    const VALUE_ANSWER_ALL = 'Answer all';
    /**
     * Constant for value 'Answer type'
     * @return string 'Answer type'
     */
    const VALUE_ANSWER_TYPE = 'Answer type';
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
     * @uses self::VALUE_EMPTY
     * @uses self::VALUE_FORWARD
     * @uses self::VALUE_ANSWER
     * @uses self::VALUE_ANSWER_ALL
     * @uses self::VALUE_ANSWER_TYPE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMPTY,
            self::VALUE_FORWARD,
            self::VALUE_ANSWER,
            self::VALUE_ANSWER_ALL,
            self::VALUE_ANSWER_TYPE,
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
