<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectForm StructType
 * @subpackage Structs
 */
class SelectForm extends AbstractStructBase
{
    /**
     * The Form
     * @var string
     */
    public $Form;
    /**
     * Constructor method for SelectForm
     * @uses SelectForm::setForm()
     * @param string $form
     */
    public function __construct($form = null)
    {
        $this
            ->setForm($form);
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
     * @return \NOUT\Soap\StructType\SelectForm
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\SelectForm
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
