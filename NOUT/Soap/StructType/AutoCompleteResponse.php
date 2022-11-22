<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoCompleteResponse StructType
 * @subpackage Structs
 */
class AutoCompleteResponse extends AbstractStructBase
{
    /**
     * The json
     * @var string
     */
    public $json;
    /**
     * Constructor method for AutoCompleteResponse
     * @uses AutoCompleteResponse::setJson()
     * @param string $json
     */
    public function __construct($json = null)
    {
        $this
            ->setJson($json);
    }
    /**
     * Get json value
     * @return string|null
     */
    public function getJson()
    {
        return $this->json;
    }
    /**
     * Set json value
     * @param string $json
     * @return \NOUT\Soap\StructType\AutoCompleteResponse
     */
    public function setJson($json = null)
    {
        // validation for constraint: string
        if (!is_null($json) && !is_string($json)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($json, true), gettype($json)), __LINE__);
        }
        $this->json = $json;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\AutoCompleteResponse
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
