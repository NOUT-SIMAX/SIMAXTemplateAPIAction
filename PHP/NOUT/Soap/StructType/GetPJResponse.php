<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPJResponse StructType
 * @subpackage Structs
 */
class GetPJResponse extends AbstractStructBase
{
    /**
     * The xml
     * @var \NOUT\Soap\StructType\GetPJResponseType
     */
    public $xml;
    /**
     * Constructor method for GetPJResponse
     * @uses GetPJResponse::setXml()
     * @param \NOUT\Soap\StructType\GetPJResponseType $xml
     */
    public function __construct(\NOUT\Soap\StructType\GetPJResponseType $xml = null)
    {
        $this
            ->setXml($xml);
    }
    /**
     * Get xml value
     * @return \NOUT\Soap\StructType\GetPJResponseType|null
     */
    public function getXml()
    {
        return $this->xml;
    }
    /**
     * Set xml value
     * @param \NOUT\Soap\StructType\GetPJResponseType $xml
     * @return \NOUT\Soap\StructType\GetPJResponse
     */
    public function setXml(\NOUT\Soap\StructType\GetPJResponseType $xml = null)
    {
        $this->xml = $xml;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\GetPJResponse
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
