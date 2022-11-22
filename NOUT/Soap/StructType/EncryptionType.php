<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for EncryptionType StructType
 * @subpackage Structs
 */
class EncryptionType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The md5
     * @var string
     */
    public $md5;
    /**
     * The iv
     * @var string
     */
    public $iv;
    /**
     * The ks
     * @var int
     */
    public $ks;
    /**
     * Constructor method for EncryptionType
     * @uses EncryptionType::set_()
     * @uses EncryptionType::setMd5()
     * @uses EncryptionType::setIv()
     * @uses EncryptionType::setKs()
     * @param string $_
     * @param string $md5
     * @param string $iv
     * @param int $ks
     */
    public function __construct($_ = null, $md5 = null, $iv = null, $ks = null)
    {
        $this
            ->set_($_)
            ->setMd5($md5)
            ->setIv($iv)
            ->setKs($ks);
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
     * @return \NOUT\Soap\StructType\EncryptionType
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
     * Get md5 value
     * @return string|null
     */
    public function getMd5()
    {
        return $this->md5;
    }
    /**
     * Set md5 value
     * @param string $md5
     * @return \NOUT\Soap\StructType\EncryptionType
     */
    public function setMd5($md5 = null)
    {
        // validation for constraint: string
        if (!is_null($md5) && !is_string($md5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($md5, true), gettype($md5)), __LINE__);
        }
        $this->md5 = $md5;
        return $this;
    }
    /**
     * Get iv value
     * @return string|null
     */
    public function getIv()
    {
        return $this->iv;
    }
    /**
     * Set iv value
     * @param string $iv
     * @return \NOUT\Soap\StructType\EncryptionType
     */
    public function setIv($iv = null)
    {
        // validation for constraint: string
        if (!is_null($iv) && !is_string($iv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iv, true), gettype($iv)), __LINE__);
        }
        $this->iv = $iv;
        return $this;
    }
    /**
     * Get ks value
     * @return int|null
     */
    public function getKs()
    {
        return $this->ks;
    }
    /**
     * Set ks value
     * @param int $ks
     * @return \NOUT\Soap\StructType\EncryptionType
     */
    public function setKs($ks = null)
    {
        // validation for constraint: int
        if (!is_null($ks) && !(is_int($ks) || ctype_digit($ks))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ks, true), gettype($ks)), __LINE__);
        }
        $this->ks = $ks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\EncryptionType
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
