<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLanguagesResponse StructType
 * @subpackage Structs
 */
class GetLanguagesResponse extends AbstractStructBase
{
    /**
     * The xml
     * @var \NOUT\Soap\StructType\LanguageCodeList
     */
    public $xml;
    /**
     * Constructor method for GetLanguagesResponse
     * @uses GetLanguagesResponse::setXml()
     * @param \NOUT\Soap\StructType\LanguageCodeList $xml
     */
    public function __construct(\NOUT\Soap\StructType\LanguageCodeList $xml = null)
    {
        $this
            ->setXml($xml);
    }
    /**
     * Get xml value
     * @return \NOUT\Soap\StructType\LanguageCodeList|null
     */
    public function getXml()
    {
        return $this->xml;
    }
    /**
     * Set xml value
     * @param \NOUT\Soap\StructType\LanguageCodeList $xml
     * @return \NOUT\Soap\StructType\GetLanguagesResponse
     */
    public function setXml(\NOUT\Soap\StructType\LanguageCodeList $xml = null)
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
     * @return \NOUT\Soap\StructType\GetLanguagesResponse
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
