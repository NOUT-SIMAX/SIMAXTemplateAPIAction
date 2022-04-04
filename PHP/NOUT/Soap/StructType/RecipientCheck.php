<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for RecipientCheck StructType
 * @subpackage Structs
 */
class RecipientCheck extends AbstractStructBase
{
    /**
     * The To
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $To;
    /**
     * The Cc
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Cc;
    /**
     * The Cci
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Cci;
    /**
     * Constructor method for RecipientCheck
     * @uses RecipientCheck::setTo()
     * @uses RecipientCheck::setCc()
     * @uses RecipientCheck::setCci()
     * @param string[] $to
     * @param string[] $cc
     * @param string[] $cci
     */
    public function __construct(array $to = array(), array $cc = array(), array $cci = array())
    {
        $this
            ->setTo($to)
            ->setCc($cc)
            ->setCci($cci);
    }
    /**
     * Get To value
     * @return string[]|null
     */
    public function getTo()
    {
        return $this->To;
    }
    /**
     * This method is responsible for validating the values passed to the setTo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateToForArrayConstraintsFromSetTo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recipientCheckToItem) {
            // validation for constraint: itemType
            if (!is_string($recipientCheckToItem)) {
                $invalidValues[] = is_object($recipientCheckToItem) ? get_class($recipientCheckToItem) : sprintf('%s(%s)', gettype($recipientCheckToItem), var_export($recipientCheckToItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The To property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set To value
     * @throws \InvalidArgumentException
     * @param string[] $to
     * @return \NOUT\Soap\StructType\RecipientCheck
     */
    public function setTo(array $to = array())
    {
        // validation for constraint: array
        if ('' !== ($toArrayErrorMessage = self::validateToForArrayConstraintsFromSetTo($to))) {
            throw new \InvalidArgumentException($toArrayErrorMessage, __LINE__);
        }
        $this->To = $to;
        return $this;
    }
    /**
     * Add item to To value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NOUT\Soap\StructType\RecipientCheck
     */
    public function addToTo($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The To property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->To[] = $item;
        return $this;
    }
    /**
     * Get Cc value
     * @return string[]|null
     */
    public function getCc()
    {
        return $this->Cc;
    }
    /**
     * This method is responsible for validating the values passed to the setCc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCc method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCcForArrayConstraintsFromSetCc(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recipientCheckCcItem) {
            // validation for constraint: itemType
            if (!is_string($recipientCheckCcItem)) {
                $invalidValues[] = is_object($recipientCheckCcItem) ? get_class($recipientCheckCcItem) : sprintf('%s(%s)', gettype($recipientCheckCcItem), var_export($recipientCheckCcItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Cc property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Cc value
     * @throws \InvalidArgumentException
     * @param string[] $cc
     * @return \NOUT\Soap\StructType\RecipientCheck
     */
    public function setCc(array $cc = array())
    {
        // validation for constraint: array
        if ('' !== ($ccArrayErrorMessage = self::validateCcForArrayConstraintsFromSetCc($cc))) {
            throw new \InvalidArgumentException($ccArrayErrorMessage, __LINE__);
        }
        $this->Cc = $cc;
        return $this;
    }
    /**
     * Add item to Cc value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NOUT\Soap\StructType\RecipientCheck
     */
    public function addToCc($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Cc property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Cc[] = $item;
        return $this;
    }
    /**
     * Get Cci value
     * @return string[]|null
     */
    public function getCci()
    {
        return $this->Cci;
    }
    /**
     * This method is responsible for validating the values passed to the setCci method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCci method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCciForArrayConstraintsFromSetCci(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recipientCheckCciItem) {
            // validation for constraint: itemType
            if (!is_string($recipientCheckCciItem)) {
                $invalidValues[] = is_object($recipientCheckCciItem) ? get_class($recipientCheckCciItem) : sprintf('%s(%s)', gettype($recipientCheckCciItem), var_export($recipientCheckCciItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Cci property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Cci value
     * @throws \InvalidArgumentException
     * @param string[] $cci
     * @return \NOUT\Soap\StructType\RecipientCheck
     */
    public function setCci(array $cci = array())
    {
        // validation for constraint: array
        if ('' !== ($cciArrayErrorMessage = self::validateCciForArrayConstraintsFromSetCci($cci))) {
            throw new \InvalidArgumentException($cciArrayErrorMessage, __LINE__);
        }
        $this->Cci = $cci;
        return $this;
    }
    /**
     * Add item to Cci value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NOUT\Soap\StructType\RecipientCheck
     */
    public function addToCci($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Cci property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Cci[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\RecipientCheck
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
