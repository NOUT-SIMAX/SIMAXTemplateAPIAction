<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectPrintTemplate StructType
 * @subpackage Structs
 */
class SelectPrintTemplate extends AbstractStructBase
{
    /**
     * The Template
     * @var string
     */
    public $Template;
    /**
     * Constructor method for SelectPrintTemplate
     * @uses SelectPrintTemplate::setTemplate()
     * @param string $template
     */
    public function __construct($template = null)
    {
        $this
            ->setTemplate($template);
    }
    /**
     * Get Template value
     * @return string|null
     */
    public function getTemplate()
    {
        return $this->Template;
    }
    /**
     * Set Template value
     * @param string $template
     * @return \NOUT\Soap\StructType\SelectPrintTemplate
     */
    public function setTemplate($template = null)
    {
        // validation for constraint: string
        if (!is_null($template) && !is_string($template)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($template, true), gettype($template)), __LINE__);
        }
        $this->Template = $template;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\SelectPrintTemplate
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
