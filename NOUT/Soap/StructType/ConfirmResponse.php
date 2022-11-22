<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmResponse StructType
 * @subpackage Structs
 */
class ConfirmResponse extends AbstractStructBase
{
    const IDOK          = 1;    //The OK button was selected.
    const IDCANCEL      = 2;    //The Cancel button was selected.
    const IDABORT       = 3;    //The Abort button was selected.
    const IDRETRY       = 4;    //The Retry button was selected.
    const IDIGNORE      = 5;    //The Ignore button was selected.
    const IDYES         = 6;    //The Yes button was selected.
    const IDNO          = 7;    //The No button was selected.
    const IDCONTINUE    = 11;   //The Continue button was selected.
    const IDTRYAGAIN    = 10;   //The Try Again button was selected.

    /**
     * The TypeConfirmation
     * @var int
     */
    public $TypeConfirmation;
    /**
     * Constructor method for ConfirmResponse
     * @uses ConfirmResponse::setTypeConfirmation()
     * @param int $typeConfirmation
     */
    public function __construct($typeConfirmation = null)
    {
        $this
            ->setTypeConfirmation($typeConfirmation);
    }
    /**
     * Get TypeConfirmation value
     * @return int|null
     */
    public function getTypeConfirmation()
    {
        return $this->TypeConfirmation;
    }
    /**
     * Set TypeConfirmation value
     * @param int $typeConfirmation
     * @return \NOUT\Soap\StructType\ConfirmResponse
     */
    public function setTypeConfirmation($typeConfirmation = null)
    {
        // validation for constraint: int
        if (!is_null($typeConfirmation) && !(is_int($typeConfirmation) || ctype_digit($typeConfirmation))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeConfirmation, true), gettype($typeConfirmation)), __LINE__);
        }
        $this->TypeConfirmation = $typeConfirmation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\ConfirmResponse
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
