<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePJ StructType
 * @subpackage Structs
 */
class DeletePJ extends AbstractStructBase
{
    /**
     * The IDMessage
     * @var string
     */
    public $IDMessage;
    /**
     * The IDPJ
     * @var string
     */
    public $IDPJ;
    /**
     * Constructor method for DeletePJ
     * @uses DeletePJ::setIDMessage()
     * @uses DeletePJ::setIDPJ()
     * @param string $iDMessage
     * @param string $iDPJ
     */
    public function __construct($iDMessage = null, $iDPJ = null)
    {
        $this
            ->setIDMessage($iDMessage)
            ->setIDPJ($iDPJ);
    }
    /**
     * Get IDMessage value
     * @return string|null
     */
    public function getIDMessage()
    {
        return $this->IDMessage;
    }
    /**
     * Set IDMessage value
     * @param string $iDMessage
     * @return \NOUT\Soap\StructType\DeletePJ
     */
    public function setIDMessage($iDMessage = null)
    {
        // validation for constraint: string
        if (!is_null($iDMessage) && !is_string($iDMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iDMessage, true), gettype($iDMessage)), __LINE__);
        }
        $this->IDMessage = $iDMessage;
        return $this;
    }
    /**
     * Get IDPJ value
     * @return string|null
     */
    public function getIDPJ()
    {
        return $this->IDPJ;
    }
    /**
     * Set IDPJ value
     * @param string $iDPJ
     * @return \NOUT\Soap\StructType\DeletePJ
     */
    public function setIDPJ($iDPJ = null)
    {
        // validation for constraint: string
        if (!is_null($iDPJ) && !is_string($iDPJ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iDPJ, true), gettype($iDPJ)), __LINE__);
        }
        $this->IDPJ = $iDPJ;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\DeletePJ
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
