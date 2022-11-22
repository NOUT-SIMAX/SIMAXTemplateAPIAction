<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for InitRecordFromMessage StructType
 * @subpackage Structs
 */
class InitRecordFromMessage extends AbstractStructBase
{
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The Record
     * @var string
     */
    public $Record;
    /**
     * The IDMessage
     * @var string
     */
    public $IDMessage;
    /**
     * Constructor method for InitRecordFromMessage
     * @uses InitRecordFromMessage::setTable()
     * @uses InitRecordFromMessage::setRecord()
     * @uses InitRecordFromMessage::setIDMessage()
     * @param string $table
     * @param string $record
     * @param string $iDMessage
     */
    public function __construct($table = null, $record = null, $iDMessage = null)
    {
        $this
            ->setTable($table)
            ->setRecord($record)
            ->setIDMessage($iDMessage);
    }
    /**
     * Get Table value
     * @return string|null
     */
    public function getTable()
    {
        return $this->Table;
    }
    /**
     * Set Table value
     * @param string $table
     * @return \NOUT\Soap\StructType\InitRecordFromMessage
     */
    public function setTable($table = null)
    {
        // validation for constraint: string
        if (!is_null($table) && !is_string($table)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($table, true), gettype($table)), __LINE__);
        }
        $this->Table = $table;
        return $this;
    }
    /**
     * Get Record value
     * @return string|null
     */
    public function getRecord()
    {
        return $this->Record;
    }
    /**
     * Set Record value
     * @param string $record
     * @return \NOUT\Soap\StructType\InitRecordFromMessage
     */
    public function setRecord($record = null)
    {
        // validation for constraint: string
        if (!is_null($record) && !is_string($record)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($record, true), gettype($record)), __LINE__);
        }
        $this->Record = $record;
        return $this;
    }
    /**
     * Get IDMessage value
     * @return string|null
     */
    public function getIDMessage()
    {
        return $this->IDMessage;
    }
    /**
     * Set IDMessage value
     * @param string $iDMessage
     * @return \NOUT\Soap\StructType\InitRecordFromMessage
     */
    public function setIDMessage($iDMessage = null)
    {
        // validation for constraint: string
        if (!is_null($iDMessage) && !is_string($iDMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iDMessage, true), gettype($iDMessage)), __LINE__);
        }
        $this->IDMessage = $iDMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\InitRecordFromMessage
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
