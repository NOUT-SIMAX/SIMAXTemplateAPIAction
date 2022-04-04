<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMailServiceStatusResponse StructType
 * @subpackage Structs
 */
class GetMailServiceStatusResponse extends AbstractStructBase
{
    /**
     * The UnRead
     * @var int
     */
    public $UnRead;
    /**
     * The Receive
     * @var int
     */
    public $Receive;
    /**
     * The LastUnRead
     * @var \NOUT\Soap\StructType\LastUnReadType
     */
    public $LastUnRead;
    /**
     * Constructor method for GetMailServiceStatusResponse
     * @uses GetMailServiceStatusResponse::setUnRead()
     * @uses GetMailServiceStatusResponse::setReceive()
     * @uses GetMailServiceStatusResponse::setLastUnRead()
     * @param int $unRead
     * @param int $receive
     * @param \NOUT\Soap\StructType\LastUnReadType $lastUnRead
     */
    public function __construct($unRead = null, $receive = null, \NOUT\Soap\StructType\LastUnReadType $lastUnRead = null)
    {
        $this
            ->setUnRead($unRead)
            ->setReceive($receive)
            ->setLastUnRead($lastUnRead);
    }
    /**
     * Get UnRead value
     * @return int|null
     */
    public function getUnRead()
    {
        return $this->UnRead;
    }
    /**
     * Set UnRead value
     * @param int $unRead
     * @return \NOUT\Soap\StructType\GetMailServiceStatusResponse
     */
    public function setUnRead($unRead = null)
    {
        // validation for constraint: int
        if (!is_null($unRead) && !(is_int($unRead) || ctype_digit($unRead))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unRead, true), gettype($unRead)), __LINE__);
        }
        $this->UnRead = $unRead;
        return $this;
    }
    /**
     * Get Receive value
     * @return int|null
     */
    public function getReceive()
    {
        return $this->Receive;
    }
    /**
     * Set Receive value
     * @param int $receive
     * @return \NOUT\Soap\StructType\GetMailServiceStatusResponse
     */
    public function setReceive($receive = null)
    {
        // validation for constraint: int
        if (!is_null($receive) && !(is_int($receive) || ctype_digit($receive))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receive, true), gettype($receive)), __LINE__);
        }
        $this->Receive = $receive;
        return $this;
    }
    /**
     * Get LastUnRead value
     * @return \NOUT\Soap\StructType\LastUnReadType|null
     */
    public function getLastUnRead()
    {
        return $this->LastUnRead;
    }
    /**
     * Set LastUnRead value
     * @param \NOUT\Soap\StructType\LastUnReadType $lastUnRead
     * @return \NOUT\Soap\StructType\GetMailServiceStatusResponse
     */
    public function setLastUnRead(\NOUT\Soap\StructType\LastUnReadType $lastUnRead = null)
    {
        $this->LastUnRead = $lastUnRead;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\GetMailServiceStatusResponse
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
