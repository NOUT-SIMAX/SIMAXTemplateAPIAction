<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for LanguageCodeList StructType
 * @subpackage Structs
 */
class LanguageCodeList extends AbstractStructBase
{
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $LanguageCode;
    /**
     * Constructor method for LanguageCodeList
     * @uses LanguageCodeList::setLanguageCode()
     * @param int[] $languageCode
     */
    public function __construct(array $languageCode = array())
    {
        $this
            ->setLanguageCode($languageCode);
    }
    /**
     * Get LanguageCode value
     * @return int[]|null
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }
    /**
     * This method is responsible for validating the values passed to the setLanguageCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLanguageCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLanguageCodeForArrayConstraintsFromSetLanguageCode(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $languageCodeListLanguageCodeItem) {
            // validation for constraint: itemType
            if (!(is_int($languageCodeListLanguageCodeItem) || ctype_digit($languageCodeListLanguageCodeItem))) {
                $invalidValues[] = is_object($languageCodeListLanguageCodeItem) ? get_class($languageCodeListLanguageCodeItem) : sprintf('%s(%s)', gettype($languageCodeListLanguageCodeItem), var_export($languageCodeListLanguageCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LanguageCode property can only contain items of type integer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set LanguageCode value
     * @throws \InvalidArgumentException
     * @param int[] $languageCode
     * @return \NOUT\Soap\StructType\LanguageCodeList
     */
    public function setLanguageCode(array $languageCode = array())
    {
        // validation for constraint: array
        if ('' !== ($languageCodeArrayErrorMessage = self::validateLanguageCodeForArrayConstraintsFromSetLanguageCode($languageCode))) {
            throw new \InvalidArgumentException($languageCodeArrayErrorMessage, __LINE__);
        }
        $this->LanguageCode = $languageCode;
        return $this;
    }
    /**
     * Add item to LanguageCode value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \NOUT\Soap\StructType\LanguageCodeList
     */
    public function addToLanguageCode($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The LanguageCode property can only contain items of type integer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LanguageCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\LanguageCodeList
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
