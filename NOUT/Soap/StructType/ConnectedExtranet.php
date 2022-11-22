<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectedExtranet StructType
 * @subpackage Structs
 */
class ConnectedExtranet extends AbstractStructBase
{
    /**
     * The Form
     * @var string
     */
    public $Form;
    /**
     * The Element
     * @var string
     */
    public $Element;
    /**
     * Constructor method for ConnectedExtranet
     * @uses ConnectedExtranet::setForm()
     * @uses ConnectedExtranet::setElement()
     * @param string $form
     * @param string $element
     */
    public function __construct($form = null, $element = null)
    {
        $this
            ->setForm($form)
            ->setElement($element);
    }
    /**
     * Get Form value
     * @return string|null
     */
    public function getForm()
    {
        return $this->Form;
    }
    /**
     * Set Form value
     * @param string $form
     * @return \NOUT\Soap\StructType\ConnectedExtranet
     */
    public function setForm($form = null)
    {
        // validation for constraint: string
        if (!is_null($form) && !is_string($form)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($form, true), gettype($form)), __LINE__);
        }
        $this->Form = $form;
        return $this;
    }
    /**
     * Get Element value
     * @return string|null
     */
    public function getElement()
    {
        return $this->Element;
    }
    /**
     * Set Element value
     * @param string $element
     * @return \NOUT\Soap\StructType\ConnectedExtranet
     */
    public function setElement($element = null)
    {
        // validation for constraint: string
        if (!is_null($element) && !is_string($element)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($element, true), gettype($element)), __LINE__);
        }
        $this->Element = $element;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\ConnectedExtranet
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
