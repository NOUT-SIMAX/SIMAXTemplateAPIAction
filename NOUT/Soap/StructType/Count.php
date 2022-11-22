<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for Count StructType
 * @subpackage Structs
 */
class Count extends AbstractStructBase
{
    /**
     * The NbFiltered
     * @var int
     */
    public $NbFiltered;
    /**
     * The NbTotal
     * @var int
     */
    public $NbTotal;
    /**
     * The NbCalculation
     * @var int
     */
    public $NbCalculation;
    /**
     * The NbLine
     * @var int
     */
    public $NbLine;
    /**
     * Constructor method for Count
     * @uses Count::setNbFiltered()
     * @uses Count::setNbTotal()
     * @uses Count::setNbCalculation()
     * @uses Count::setNbLine()
     * @param int $nbFiltered
     * @param int $nbTotal
     * @param int $nbCalculation
     * @param int $nbLine
     */
    public function __construct($nbFiltered = null, $nbTotal = null, $nbCalculation = null, $nbLine = null)
    {
        $this
            ->setNbFiltered($nbFiltered)
            ->setNbTotal($nbTotal)
            ->setNbCalculation($nbCalculation)
            ->setNbLine($nbLine);
    }
    /**
     * Get NbFiltered value
     * @return int|null
     */
    public function getNbFiltered()
    {
        return $this->NbFiltered;
    }
    /**
     * Set NbFiltered value
     * @param int $nbFiltered
     * @return \NOUT\Soap\StructType\Count
     */
    public function setNbFiltered($nbFiltered = null)
    {
        // validation for constraint: int
        if (!is_null($nbFiltered) && !(is_int($nbFiltered) || ctype_digit($nbFiltered))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbFiltered, true), gettype($nbFiltered)), __LINE__);
        }
        $this->NbFiltered = $nbFiltered;
        return $this;
    }
    /**
     * Get NbTotal value
     * @return int|null
     */
    public function getNbTotal()
    {
        return $this->NbTotal;
    }
    /**
     * Set NbTotal value
     * @param int $nbTotal
     * @return \NOUT\Soap\StructType\Count
     */
    public function setNbTotal($nbTotal = null)
    {
        // validation for constraint: int
        if (!is_null($nbTotal) && !(is_int($nbTotal) || ctype_digit($nbTotal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbTotal, true), gettype($nbTotal)), __LINE__);
        }
        $this->NbTotal = $nbTotal;
        return $this;
    }
    /**
     * Get NbCalculation value
     * @return int|null
     */
    public function getNbCalculation()
    {
        return $this->NbCalculation;
    }
    /**
     * Set NbCalculation value
     * @param int $nbCalculation
     * @return \NOUT\Soap\StructType\Count
     */
    public function setNbCalculation($nbCalculation = null)
    {
        // validation for constraint: int
        if (!is_null($nbCalculation) && !(is_int($nbCalculation) || ctype_digit($nbCalculation))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbCalculation, true), gettype($nbCalculation)), __LINE__);
        }
        $this->NbCalculation = $nbCalculation;
        return $this;
    }
    /**
     * Get NbLine value
     * @return int|null
     */
    public function getNbLine()
    {
        return $this->NbLine;
    }
    /**
     * Set NbLine value
     * @param int $nbLine
     * @return \NOUT\Soap\StructType\Count
     */
    public function setNbLine($nbLine = null)
    {
        // validation for constraint: int
        if (!is_null($nbLine) && !(is_int($nbLine) || ctype_digit($nbLine))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbLine, true), gettype($nbLine)), __LINE__);
        }
        $this->NbLine = $nbLine;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\Count
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
