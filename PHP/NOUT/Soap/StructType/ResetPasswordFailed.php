<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for ResetPasswordFailed StructType
 * @subpackage Structs
 */
class ResetPasswordFailed extends AbstractStructBase
{
    /**
     * The Login
     * @var string
     */
    public $Login;
    /**
     * Constructor method for ResetPasswordFailed
     * @uses ResetPasswordFailed::setLogin()
     * @param string $login
     */
    public function __construct($login = null)
    {
        $this
            ->setLogin($login);
    }
    /**
     * Get Login value
     * @return string|null
     */
    public function getLogin()
    {
        return $this->Login;
    }
    /**
     * Set Login value
     * @param string $login
     * @return \NOUT\Soap\StructType\ResetPasswordFailed
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        $this->Login = $login;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\ResetPasswordFailed
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
