<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for Form StructType
 * @subpackage Structs
 */
class Form extends AbstractStructBase
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
     * The checksum
     * @var string
     */
    public $checksum;
    /**
     * The typeform
     * @var string
     */
    public $typeform;
    /**
     * The withBtnOrderPossible
     * @var int
     */
    public $withBtnOrderPossible;
    /**
     * The sort1
     * @var string
     */
    public $sort1;
    /**
     * The sort2
     * @var string
     */
    public $sort2;
    /**
     * The sort3
     * @var string
     */
    public $sort3;
    /**
     * The sort1asc
     * @var string
     */
    public $sort1asc;
    /**
     * The sort2asc
     * @var string
     */
    public $sort2asc;
    /**
     * The sort3asc
     * @var string
     */
    public $sort3asc;
    /**
     * Constructor method for Form
     * @uses Form::set_()
     * @uses Form::setTitle()
     * @uses Form::setChecksum()
     * @uses Form::setTypeform()
     * @uses Form::setWithBtnOrderPossible()
     * @uses Form::setSort1()
     * @uses Form::setSort2()
     * @uses Form::setSort3()
     * @uses Form::setSort1asc()
     * @uses Form::setSort2asc()
     * @uses Form::setSort3asc()
     * @param string $_
     * @param string $title
     * @param string $checksum
     * @param string $typeform
     * @param int $withBtnOrderPossible
     * @param string $sort1
     * @param string $sort2
     * @param string $sort3
     * @param string $sort1asc
     * @param string $sort2asc
     * @param string $sort3asc
     */
    public function __construct($_ = null, $title = null, $checksum = null, $typeform = null, $withBtnOrderPossible = null, $sort1 = null, $sort2 = null, $sort3 = null, $sort1asc = null, $sort2asc = null, $sort3asc = null)
    {
        $this
            ->set_($_)
            ->setTitle($title)
            ->setChecksum($checksum)
            ->setTypeform($typeform)
            ->setWithBtnOrderPossible($withBtnOrderPossible)
            ->setSort1($sort1)
            ->setSort2($sort2)
            ->setSort3($sort3)
            ->setSort1asc($sort1asc)
            ->setSort2asc($sort2asc)
            ->setSort3asc($sort3asc);
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
     * @return \NOUT\Soap\StructType\Form
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
     * @return \NOUT\Soap\StructType\Form
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
     * Get checksum value
     * @return string|null
     */
    public function getChecksum()
    {
        return $this->checksum;
    }
    /**
     * Set checksum value
     * @param string $checksum
     * @return \NOUT\Soap\StructType\Form
     */
    public function setChecksum($checksum = null)
    {
        // validation for constraint: string
        if (!is_null($checksum) && !is_string($checksum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checksum, true), gettype($checksum)), __LINE__);
        }
        $this->checksum = $checksum;
        return $this;
    }
    /**
     * Get typeform value
     * @return string|null
     */
    public function getTypeform()
    {
        return $this->typeform;
    }
    /**
     * Set typeform value
     * @param string $typeform
     * @return \NOUT\Soap\StructType\Form
     */
    public function setTypeform($typeform = null)
    {
        // validation for constraint: string
        if (!is_null($typeform) && !is_string($typeform)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeform, true), gettype($typeform)), __LINE__);
        }
        $this->typeform = $typeform;
        return $this;
    }
    /**
     * Get withBtnOrderPossible value
     * @return int|null
     */
    public function getWithBtnOrderPossible()
    {
        return $this->withBtnOrderPossible;
    }
    /**
     * Set withBtnOrderPossible value
     * @param int $withBtnOrderPossible
     * @return \NOUT\Soap\StructType\Form
     */
    public function setWithBtnOrderPossible($withBtnOrderPossible = null)
    {
        // validation for constraint: int
        if (!is_null($withBtnOrderPossible) && !(is_int($withBtnOrderPossible) || ctype_digit($withBtnOrderPossible))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($withBtnOrderPossible, true), gettype($withBtnOrderPossible)), __LINE__);
        }
        $this->withBtnOrderPossible = $withBtnOrderPossible;
        return $this;
    }
    /**
     * Get sort1 value
     * @return string|null
     */
    public function getSort1()
    {
        return $this->sort1;
    }
    /**
     * Set sort1 value
     * @param string $sort1
     * @return \NOUT\Soap\StructType\Form
     */
    public function setSort1($sort1 = null)
    {
        // validation for constraint: string
        if (!is_null($sort1) && !is_string($sort1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sort1, true), gettype($sort1)), __LINE__);
        }
        $this->sort1 = $sort1;
        return $this;
    }
    /**
     * Get sort2 value
     * @return string|null
     */
    public function getSort2()
    {
        return $this->sort2;
    }
    /**
     * Set sort2 value
     * @param string $sort2
     * @return \NOUT\Soap\StructType\Form
     */
    public function setSort2($sort2 = null)
    {
        // validation for constraint: string
        if (!is_null($sort2) && !is_string($sort2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sort2, true), gettype($sort2)), __LINE__);
        }
        $this->sort2 = $sort2;
        return $this;
    }
    /**
     * Get sort3 value
     * @return string|null
     */
    public function getSort3()
    {
        return $this->sort3;
    }
    /**
     * Set sort3 value
     * @param string $sort3
     * @return \NOUT\Soap\StructType\Form
     */
    public function setSort3($sort3 = null)
    {
        // validation for constraint: string
        if (!is_null($sort3) && !is_string($sort3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sort3, true), gettype($sort3)), __LINE__);
        }
        $this->sort3 = $sort3;
        return $this;
    }
    /**
     * Get sort1asc value
     * @return string|null
     */
    public function getSort1asc()
    {
        return $this->sort1asc;
    }
    /**
     * Set sort1asc value
     * @param string $sort1asc
     * @return \NOUT\Soap\StructType\Form
     */
    public function setSort1asc($sort1asc = null)
    {
        // validation for constraint: string
        if (!is_null($sort1asc) && !is_string($sort1asc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sort1asc, true), gettype($sort1asc)), __LINE__);
        }
        $this->sort1asc = $sort1asc;
        return $this;
    }
    /**
     * Get sort2asc value
     * @return string|null
     */
    public function getSort2asc()
    {
        return $this->sort2asc;
    }
    /**
     * Set sort2asc value
     * @param string $sort2asc
     * @return \NOUT\Soap\StructType\Form
     */
    public function setSort2asc($sort2asc = null)
    {
        // validation for constraint: string
        if (!is_null($sort2asc) && !is_string($sort2asc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sort2asc, true), gettype($sort2asc)), __LINE__);
        }
        $this->sort2asc = $sort2asc;
        return $this;
    }
    /**
     * Get sort3asc value
     * @return string|null
     */
    public function getSort3asc()
    {
        return $this->sort3asc;
    }
    /**
     * Set sort3asc value
     * @param string $sort3asc
     * @return \NOUT\Soap\StructType\Form
     */
    public function setSort3asc($sort3asc = null)
    {
        // validation for constraint: string
        if (!is_null($sort3asc) && !is_string($sort3asc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sort3asc, true), gettype($sort3asc)), __LINE__);
        }
        $this->sort3asc = $sort3asc;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\Form
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
