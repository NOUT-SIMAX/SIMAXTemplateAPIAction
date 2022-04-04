<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for Action StructType
 * @subpackage Structs
 */
class Action extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The title
     * @var string
     */
    public $title;
    /**
     * The typeaction
     * @var string
     */
    public $typeaction;
    /**
     * The typereturn
     * @var string
     */
    public $typereturn;
    /**
     * The actionForm
     * @var string
     */
    public $actionForm;
    /**
     * The assistantMode
     * @var int
     */
    public $assistantMode;
    /**
     * Constructor method for Action
     * @uses Action::set_()
     * @uses Action::setTitle()
     * @uses Action::setTypeaction()
     * @uses Action::setTypereturn()
     * @uses Action::setActionForm()
     * @uses Action::setAssistantMode()
     * @param string $_
     * @param string $title
     * @param string $typeaction
     * @param string $typereturn
     * @param string $actionForm
     * @param int $assistantMode
     */
    public function __construct($_ = null, $title = null, $typeaction = null, $typereturn = null, $actionForm = null, $assistantMode = null)
    {
        $this
            ->set_($_)
            ->setTitle($title)
            ->setTypeaction($typeaction)
            ->setTypereturn($typereturn)
            ->setActionForm($actionForm)
            ->setAssistantMode($assistantMode);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \NOUT\Soap\StructType\Action
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \NOUT\Soap\StructType\Action
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
    /**
     * Get typeaction value
     * @return string|null
     */
    public function getTypeaction()
    {
        return $this->typeaction;
    }
    /**
     * Set typeaction value
     * @param string $typeaction
     * @return \NOUT\Soap\StructType\Action
     */
    public function setTypeaction($typeaction = null)
    {
        // validation for constraint: string
        if (!is_null($typeaction) && !is_string($typeaction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeaction, true), gettype($typeaction)), __LINE__);
        }
        $this->typeaction = $typeaction;
        return $this;
    }
    /**
     * Get typereturn value
     * @return string|null
     */
    public function getTypereturn()
    {
        return $this->typereturn;
    }
    /**
     * Set typereturn value
     * @param string $typereturn
     * @return \NOUT\Soap\StructType\Action
     */
    public function setTypereturn($typereturn = null)
    {
        // validation for constraint: string
        if (!is_null($typereturn) && !is_string($typereturn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typereturn, true), gettype($typereturn)), __LINE__);
        }
        $this->typereturn = $typereturn;
        return $this;
    }
    /**
     * Get actionForm value
     * @return string|null
     */
    public function getActionForm()
    {
        return $this->actionForm;
    }
    /**
     * Set actionForm value
     * @param string $actionForm
     * @return \NOUT\Soap\StructType\Action
     */
    public function setActionForm($actionForm = null)
    {
        // validation for constraint: string
        if (!is_null($actionForm) && !is_string($actionForm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionForm, true), gettype($actionForm)), __LINE__);
        }
        $this->actionForm = $actionForm;
        return $this;
    }
    /**
     * Get assistantMode value
     * @return int|null
     */
    public function getAssistantMode()
    {
        return $this->assistantMode;
    }
    /**
     * Set assistantMode value
     * @param int $assistantMode
     * @return \NOUT\Soap\StructType\Action
     */
    public function setAssistantMode($assistantMode = null)
    {
        // validation for constraint: int
        if (!is_null($assistantMode) && !(is_int($assistantMode) || ctype_digit($assistantMode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($assistantMode, true), gettype($assistantMode)), __LINE__);
        }
        $this->assistantMode = $assistantMode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\Action
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
