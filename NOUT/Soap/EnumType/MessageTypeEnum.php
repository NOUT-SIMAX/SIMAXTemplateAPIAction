<?php

namespace NOUT\Soap\EnumType;

/**
 * This class stands for MessageTypeEnum EnumType
 * @subpackage Enumerations
 */
class MessageTypeEnum
{
    /**
     * Constant for value 'Annulation'
     * @return string 'Annulation'
     */
    const VALUE_ANNULATION = 'Annulation';
    /**
     * Constant for value 'Cancellation'
     * @return string 'Cancellation'
     */
    const VALUE_CANCELLATION = 'Cancellation';
    /**
     * Constant for value 'Email'
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
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
     * @uses self::VALUE_ANNULATION
     * @uses self::VALUE_CANCELLATION
     * @uses self::VALUE_EMAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ANNULATION,
            self::VALUE_CANCELLATION,
            self::VALUE_EMAIL,
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
