<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for SortType StructType
 * @subpackage Structs
 */
class SortType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The asc
     * @var string
     */
    public $asc;
    /**
     * Constructor method for SortType
     * @uses SortType::set_()
     * @uses SortType::setAsc()
     * @param string $_
     * @param string $asc
     */
    public function __construct($_ = null, $asc = null)
    {
        $this
            ->set_($_)
            ->setAsc($asc);
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
     * @return \NOUT\Soap\StructType\SortType
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
     * Get asc value
     * @return string|null
     */
    public function getAsc()
    {
        return $this->asc;
    }
    /**
     * Set asc value
     * @param string $asc
     * @return \NOUT\Soap\StructType\SortType
     */
    public function setAsc($asc = null)
    {
        // validation for constraint: string
        if (!is_null($asc) && !is_string($asc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asc, true), gettype($asc)), __LINE__);
        }
        $this->asc = $asc;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\SortType
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
