<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionDialogue StructType
 * @subpackage Structs
 */
class OptionDialogue extends AbstractStructBase
{
    /**
     * The Readable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Readable;
    /**
     * The EncodingOutput
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EncodingOutput;
    /**
     * The ReturnValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ReturnValue;
    /**
     * The ReturnXSD
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ReturnXSD;
    /**
     * The HTTPForceReturn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $HTTPForceReturn;
    /**
     * The Ghost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Ghost;
    /**
     * The DefaultPagination
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DefaultPagination;
    /**
     * The DisplayValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DisplayValue;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LanguageCode;
    /**
     * The WithFieldStateControl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $WithFieldStateControl;
    /**
     * The ListContentAsync
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ListContentAsync;
    /**
     * The VersionMin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VersionMin;
    /**
     * The VersionPref
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VersionPref;
    /**
     * The Others
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Others;
    /**
     * Constructor method for OptionDialogue
     * @uses OptionDialogue::setReadable()
     * @uses OptionDialogue::setEncodingOutput()
     * @uses OptionDialogue::setReturnValue()
     * @uses OptionDialogue::setReturnXSD()
     * @uses OptionDialogue::setHTTPForceReturn()
     * @uses OptionDialogue::setGhost()
     * @uses OptionDialogue::setDefaultPagination()
     * @uses OptionDialogue::setDisplayValue()
     * @uses OptionDialogue::setLanguageCode()
     * @uses OptionDialogue::setWithFieldStateControl()
     * @uses OptionDialogue::setListContentAsync()
     * @uses OptionDialogue::setVersionMin()
     * @uses OptionDialogue::setVersionPref()
     * @uses OptionDialogue::setOthers()
     * @param int $readable
     * @param int $encodingOutput
     * @param int $returnValue
     * @param int $returnXSD
     * @param int $hTTPForceReturn
     * @param int $ghost
     * @param int $defaultPagination
     * @param int $displayValue
     * @param int $languageCode
     * @param int $withFieldStateControl
     * @param int $listContentAsync
     * @param int $versionMin
     * @param int $versionPref
     * @param int $others
     */
    public function __construct($readable = null, $encodingOutput = null, $returnValue = null, $returnXSD = null, $hTTPForceReturn = null, $ghost = null, $defaultPagination = null, $displayValue = null, $languageCode = null, $withFieldStateControl = null, $listContentAsync = null, $versionMin = null, $versionPref = null, $others = null)
    {
        $this
            ->setReadable($readable)
            ->setEncodingOutput($encodingOutput)
            ->setReturnValue($returnValue)
            ->setReturnXSD($returnXSD)
            ->setHTTPForceReturn($hTTPForceReturn)
            ->setGhost($ghost)
            ->setDefaultPagination($defaultPagination)
            ->setDisplayValue($displayValue)
            ->setLanguageCode($languageCode)
            ->setWithFieldStateControl($withFieldStateControl)
            ->setListContentAsync($listContentAsync)
            ->setVersionMin($versionMin)
            ->setVersionPref($versionPref)
            ->setOthers($others);
    }
    /**
     * Get Readable value
     * @return int|null
     */
    public function getReadable()
    {
        return $this->Readable;
    }
    /**
     * Set Readable value
     * @param int $readable
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setReadable($readable = null)
    {
        // validation for constraint: int
        if (!is_null($readable) && !(is_int($readable) || ctype_digit($readable))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($readable, true), gettype($readable)), __LINE__);
        }
        $this->Readable = $readable;
        return $this;
    }
    /**
     * Get EncodingOutput value
     * @return int|null
     */
    public function getEncodingOutput()
    {
        return $this->EncodingOutput;
    }
    /**
     * Set EncodingOutput value
     * @param int $encodingOutput
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setEncodingOutput($encodingOutput = null)
    {
        // validation for constraint: int
        if (!is_null($encodingOutput) && !(is_int($encodingOutput) || ctype_digit($encodingOutput))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($encodingOutput, true), gettype($encodingOutput)), __LINE__);
        }
        $this->EncodingOutput = $encodingOutput;
        return $this;
    }
    /**
     * Get ReturnValue value
     * @return int|null
     */
    public function getReturnValue()
    {
        return $this->ReturnValue;
    }
    /**
     * Set ReturnValue value
     * @param int $returnValue
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setReturnValue($returnValue = null)
    {
        // validation for constraint: int
        if (!is_null($returnValue) && !(is_int($returnValue) || ctype_digit($returnValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnValue, true), gettype($returnValue)), __LINE__);
        }
        $this->ReturnValue = $returnValue;
        return $this;
    }
    /**
     * Get ReturnXSD value
     * @return int|null
     */
    public function getReturnXSD()
    {
        return $this->ReturnXSD;
    }
    /**
     * Set ReturnXSD value
     * @param int $returnXSD
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setReturnXSD($returnXSD = null)
    {
        // validation for constraint: int
        if (!is_null($returnXSD) && !(is_int($returnXSD) || ctype_digit($returnXSD))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnXSD, true), gettype($returnXSD)), __LINE__);
        }
        $this->ReturnXSD = $returnXSD;
        return $this;
    }
    /**
     * Get HTTPForceReturn value
     * @return int|null
     */
    public function getHTTPForceReturn()
    {
        return $this->HTTPForceReturn;
    }
    /**
     * Set HTTPForceReturn value
     * @param int $hTTPForceReturn
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setHTTPForceReturn($hTTPForceReturn = null)
    {
        // validation for constraint: int
        if (!is_null($hTTPForceReturn) && !(is_int($hTTPForceReturn) || ctype_digit($hTTPForceReturn))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hTTPForceReturn, true), gettype($hTTPForceReturn)), __LINE__);
        }
        $this->HTTPForceReturn = $hTTPForceReturn;
        return $this;
    }
    /**
     * Get Ghost value
     * @return int|null
     */
    public function getGhost()
    {
        return $this->Ghost;
    }
    /**
     * Set Ghost value
     * @param int $ghost
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setGhost($ghost = null)
    {
        // validation for constraint: int
        if (!is_null($ghost) && !(is_int($ghost) || ctype_digit($ghost))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ghost, true), gettype($ghost)), __LINE__);
        }
        $this->Ghost = $ghost;
        return $this;
    }
    /**
     * Get DefaultPagination value
     * @return int|null
     */
    public function getDefaultPagination()
    {
        return $this->DefaultPagination;
    }
    /**
     * Set DefaultPagination value
     * @param int $defaultPagination
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setDefaultPagination($defaultPagination = null)
    {
        // validation for constraint: int
        if (!is_null($defaultPagination) && !(is_int($defaultPagination) || ctype_digit($defaultPagination))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultPagination, true), gettype($defaultPagination)), __LINE__);
        }
        $this->DefaultPagination = $defaultPagination;
        return $this;
    }
    /**
     * Get DisplayValue value
     * @return int|null
     */
    public function getDisplayValue()
    {
        return $this->DisplayValue;
    }
    /**
     * Set DisplayValue value
     * @param int $displayValue
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setDisplayValue($displayValue = null)
    {
        // validation for constraint: int
        if (!is_null($displayValue) && !(is_int($displayValue) || ctype_digit($displayValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($displayValue, true), gettype($displayValue)), __LINE__);
        }
        $this->DisplayValue = $displayValue;
        return $this;
    }
    /**
     * Get LanguageCode value
     * @return int|null
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param int $languageCode
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setLanguageCode($languageCode = null)
    {
        // validation for constraint: int
        if (!is_null($languageCode) && !(is_int($languageCode) || ctype_digit($languageCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        return $this;
    }
    /**
     * Get WithFieldStateControl value
     * @return int|null
     */
    public function getWithFieldStateControl()
    {
        return $this->WithFieldStateControl;
    }
    /**
     * Set WithFieldStateControl value
     * @param int $withFieldStateControl
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setWithFieldStateControl($withFieldStateControl = null)
    {
        // validation for constraint: int
        if (!is_null($withFieldStateControl) && !(is_int($withFieldStateControl) || ctype_digit($withFieldStateControl))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($withFieldStateControl, true), gettype($withFieldStateControl)), __LINE__);
        }
        $this->WithFieldStateControl = $withFieldStateControl;
        return $this;
    }
    /**
     * Get ListContentAsync value
     * @return int|null
     */
    public function getListContentAsync()
    {
        return $this->ListContentAsync;
    }
    /**
     * Set ListContentAsync value
     * @param int $listContentAsync
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setListContentAsync($listContentAsync = null)
    {
        // validation for constraint: int
        if (!is_null($listContentAsync) && !(is_int($listContentAsync) || ctype_digit($listContentAsync))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listContentAsync, true), gettype($listContentAsync)), __LINE__);
        }
        $this->ListContentAsync = $listContentAsync;
        return $this;
    }
    /**
     * Get VersionMin value
     * @return int|null
     */
    public function getVersionMin()
    {
        return $this->VersionMin;
    }
    /**
     * Set VersionMin value
     * @param int $versionMin
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setVersionMin($versionMin = null)
    {
        // validation for constraint: int
        if (!is_null($versionMin) && !(is_int($versionMin) || ctype_digit($versionMin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($versionMin, true), gettype($versionMin)), __LINE__);
        }
        $this->VersionMin = $versionMin;
        return $this;
    }
    /**
     * Get VersionPref value
     * @return int|null
     */
    public function getVersionPref()
    {
        return $this->VersionPref;
    }
    /**
     * Set VersionPref value
     * @param int $versionPref
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setVersionPref($versionPref = null)
    {
        // validation for constraint: int
        if (!is_null($versionPref) && !(is_int($versionPref) || ctype_digit($versionPref))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($versionPref, true), gettype($versionPref)), __LINE__);
        }
        $this->VersionPref = $versionPref;
        return $this;
    }
    /**
     * Get Others value
     * @return int|null
     */
    public function getOthers()
    {
        return $this->Others;
    }
    /**
     * Set Others value
     * @param int $others
     * @return \NOUT\Soap\StructType\OptionDialogue
     */
    public function setOthers($others = null)
    {
        // validation for constraint: int
        if (!is_null($others) && !(is_int($others) || ctype_digit($others))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($others, true), gettype($others)), __LINE__);
        }
        $this->Others = $others;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\OptionDialogue
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

    const DISPLAYVALUE_All = 65635;
    const DISPLAYVALUE_None = 0;
    const DISPLAYVALUE_WithoutElemLinked = 18431; //sans les listes elem, les elem, les combo
    const DISPLAYVALUE_TemporalOnly = 16608;
    const DISPLAYVALUE_NumericOnly = 28;
    const DISPLAYVALUE_NumericTemporal = 252;
}
