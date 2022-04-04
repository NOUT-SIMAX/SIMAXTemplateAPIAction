<?php

namespace NOUT\Soap\EnumType;

/**
 * This class stands for ReturnType EnumType
 * @subpackage Enumerations
 */
class ReturnType
{
    /**
     * Constant for value 'Empty'
     * @return string 'Empty'
     */
    const VALUE_EMPTY = 'Empty';
    /**
     * Constant for value 'Report'
     * @return string 'Report'
     */
    const VALUE_REPORT = 'Report';
    /**
     * Constant for value 'Value'
     * @return string 'Value'
     */
    const VALUE_VALUE = 'Value';
    /**
     * Constant for value 'Record'
     * @return string 'Record'
     */
    const VALUE_RECORD = 'Record';
    /**
     * Constant for value 'List'
     * @return string 'List'
     */
    const VALUE_LIST = 'List';
    /**
     * Constant for value 'Thumbnail'
     * @return string 'Thumbnail'
     */
    const VALUE_THUMBNAIL = 'Thumbnail';
    /**
     * Constant for value 'AmbiguousAction'
     * @return string 'AmbiguousAction'
     */
    const VALUE_AMBIGUOUS_ACTION = 'AmbiguousAction';
    /**
     * Constant for value 'Identification'
     * @return string 'Identification'
     */
    const VALUE_IDENTIFICATION = 'Identification';
    /**
     * Constant for value 'XSD'
     * @return string 'XSD'
     */
    const VALUE_XSD = 'XSD';
    /**
     * Constant for value 'MessageBox'
     * @return string 'MessageBox'
     */
    const VALUE_MESSAGE_BOX = 'MessageBox';
    /**
     * Constant for value 'ValidateAction'
     * @return string 'ValidateAction'
     */
    const VALUE_VALIDATE_ACTION = 'ValidateAction';
    /**
     * Constant for value 'Planning'
     * @return string 'Planning'
     */
    const VALUE_PLANNING = 'Planning';
    /**
     * Constant for value 'RequestFilter'
     * @return string 'RequestFilter'
     */
    const VALUE_REQUEST_FILTER = 'RequestFilter';
    /**
     * Constant for value 'MailServiceRecord'
     * @return string 'MailServiceRecord'
     */
    const VALUE_MAIL_SERVICE_RECORD = 'MailServiceRecord';
    /**
     * Constant for value 'MailServiceList'
     * @return string 'MailServiceList'
     */
    const VALUE_MAIL_SERVICE_LIST = 'MailServiceList';
    /**
     * Constant for value 'GlobalSearch'
     * @return string 'GlobalSearch'
     */
    const VALUE_GLOBAL_SEARCH = 'GlobalSearch';
    /**
     * Constant for value 'ListCalculation'
     * @return string 'ListCalculation'
     */
    const VALUE_LIST_CALCULATION = 'ListCalculation';
    /**
     * Constant for value 'PrintTemplate'
     * @return string 'PrintTemplate'
     */
    const VALUE_PRINT_TEMPLATE = 'PrintTemplate';
    /**
     * Constant for value 'MailServiceStatus'
     * @return string 'MailServiceStatus'
     */
    const VALUE_MAIL_SERVICE_STATUS = 'MailServiceStatus';
    /**
     * Constant for value 'ValidateRecord'
     * @return string 'ValidateRecord'
     */
    const VALUE_VALIDATE_RECORD = 'ValidateRecord';
    /**
     * Constant for value 'WithAutomaticResponse'
     * @return string 'WithAutomaticResponse'
     */
    const VALUE_WITH_AUTOMATIC_RESPONSE = 'WithAutomaticResponse';
    /**
     * Constant for value 'Chart'
     * @return string 'Chart'
     */
    const VALUE_CHART = 'Chart';
    /**
     * Constant for value 'Choice'
     * @return string 'Choice'
     */
    const VALUE_CHOICE = 'Choice';
    /**
     * Constant for value 'Scheduler'
     * @return string 'Scheduler'
     */
    const VALUE_SCHEDULER = 'Scheduler';
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
     * @uses self::VALUE_REPORT
     * @uses self::VALUE_VALUE
     * @uses self::VALUE_RECORD
     * @uses self::VALUE_LIST
     * @uses self::VALUE_THUMBNAIL
     * @uses self::VALUE_AMBIGUOUS_ACTION
     * @uses self::VALUE_IDENTIFICATION
     * @uses self::VALUE_XSD
     * @uses self::VALUE_MESSAGE_BOX
     * @uses self::VALUE_VALIDATE_ACTION
     * @uses self::VALUE_PLANNING
     * @uses self::VALUE_REQUEST_FILTER
     * @uses self::VALUE_MAIL_SERVICE_RECORD
     * @uses self::VALUE_MAIL_SERVICE_LIST
     * @uses self::VALUE_GLOBAL_SEARCH
     * @uses self::VALUE_LIST_CALCULATION
     * @uses self::VALUE_PRINT_TEMPLATE
     * @uses self::VALUE_MAIL_SERVICE_STATUS
     * @uses self::VALUE_VALIDATE_RECORD
     * @uses self::VALUE_WITH_AUTOMATIC_RESPONSE
     * @uses self::VALUE_CHART
     * @uses self::VALUE_CHOICE
     * @uses self::VALUE_SCHEDULER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMPTY,
            self::VALUE_REPORT,
            self::VALUE_VALUE,
            self::VALUE_RECORD,
            self::VALUE_LIST,
            self::VALUE_THUMBNAIL,
            self::VALUE_AMBIGUOUS_ACTION,
            self::VALUE_IDENTIFICATION,
            self::VALUE_XSD,
            self::VALUE_MESSAGE_BOX,
            self::VALUE_VALIDATE_ACTION,
            self::VALUE_PLANNING,
            self::VALUE_REQUEST_FILTER,
            self::VALUE_MAIL_SERVICE_RECORD,
            self::VALUE_MAIL_SERVICE_LIST,
            self::VALUE_GLOBAL_SEARCH,
            self::VALUE_LIST_CALCULATION,
            self::VALUE_PRINT_TEMPLATE,
            self::VALUE_MAIL_SERVICE_STATUS,
            self::VALUE_VALIDATE_RECORD,
            self::VALUE_WITH_AUTOMATIC_RESPONSE,
            self::VALUE_CHART,
            self::VALUE_CHOICE,
            self::VALUE_SCHEDULER,
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
