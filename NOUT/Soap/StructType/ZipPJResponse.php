<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for ZipPJResponse StructType
 * @subpackage Structs
 */
class ZipPJResponse extends AbstractStructBase
{
    /**
     * The xml
     * @var string
     */
    public $xml;
    /**
     * Constructor method for ZipPJResponse
     * @uses ZipPJResponse::setXml()
     * @param string $xml
     */
    public function __construct($xml = null)
    {
        $this
            ->setXml($xml);
    }
    /**
     * Get xml value
     * @return string|null
     */
    public function getXml()
    {
        return $this->xml;
    }
    /**
     * Set xml value
     * @param string $xml
     * @return \NOUT\Soap\StructType\ZipPJResponse
     */
    public function setXml($xml = null)
    {
        // validation for constraint: string
        if (!is_null($xml) && !is_string($xml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xml, true), gettype($xml)), __LINE__);
        }
        $this->xml = $xml;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\ZipPJResponse
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
