<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for FolderCount StructType
 * @subpackage Structs
 */
class FolderCount extends AbstractStructBase
{
    /**
     * The NbUnRead
     * @var int
     */
    public $NbUnRead;
    /**
     * The NbReceive
     * @var int
     */
    public $NbReceive;
    /**
     * Constructor method for FolderCount
     * @uses FolderCount::setNbUnRead()
     * @uses FolderCount::setNbReceive()
     * @param int $nbUnRead
     * @param int $nbReceive
     */
    public function __construct($nbUnRead = null, $nbReceive = null)
    {
        $this
            ->setNbUnRead($nbUnRead)
            ->setNbReceive($nbReceive);
    }
    /**
     * Get NbUnRead value
     * @return int|null
     */
    public function getNbUnRead()
    {
        return $this->NbUnRead;
    }
    /**
     * Set NbUnRead value
     * @param int $nbUnRead
     * @return \NOUT\Soap\StructType\FolderCount
     */
    public function setNbUnRead($nbUnRead = null)
    {
        // validation for constraint: int
        if (!is_null($nbUnRead) && !(is_int($nbUnRead) || ctype_digit($nbUnRead))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbUnRead, true), gettype($nbUnRead)), __LINE__);
        }
        $this->NbUnRead = $nbUnRead;
        return $this;
    }
    /**
     * Get NbReceive value
     * @return int|null
     */
    public function getNbReceive()
    {
        return $this->NbReceive;
    }
    /**
     * Set NbReceive value
     * @param int $nbReceive
     * @return \NOUT\Soap\StructType\FolderCount
     */
    public function setNbReceive($nbReceive = null)
    {
        // validation for constraint: int
        if (!is_null($nbReceive) && !(is_int($nbReceive) || ctype_digit($nbReceive))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbReceive, true), gettype($nbReceive)), __LINE__);
        }
        $this->NbReceive = $nbReceive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\FolderCount
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
