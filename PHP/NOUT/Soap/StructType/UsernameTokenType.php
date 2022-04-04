<?php

namespace NOUT\Soap\StructType;

use \NOUT\Soap\PackageBase\AbstractStructBase;

/**
 * This class stands for UsernameTokenType StructType
 * @subpackage Structs
 */
class UsernameTokenType extends AbstractStructBase
{
    /**
     * The Username
     * @var string
     */
    public $Username;
    /**
     * The Password
     * @var string
     */
    public $Password;
    /**
     * The Nonce
     * @var string
     */
    public $Nonce;
    /**
     * The Created
     * @var string
     */
    public $Created;
    /**
     * The Encryption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUT\Soap\StructType\EncryptionType
     */
    public $Encryption;
    /**
     * Constructor method for UsernameTokenType
     * @uses UsernameTokenType::setUsername()
     * @uses UsernameTokenType::setPassword()
     * @uses UsernameTokenType::setNonce()
     * @uses UsernameTokenType::setCreated()
     * @uses UsernameTokenType::setEncryption()
     * @param string $username
     * @param string $password
     * @param string $nonce
     * @param string $created
     * @param \NOUT\Soap\StructType\EncryptionType $encryption
     */
    public function __construct($username = null, $password = null, $nonce = null, $created = null, \NOUT\Soap\StructType\EncryptionType $encryption = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setNonce($nonce)
            ->setCreated($created)
            ->setEncryption($encryption);
    }
    /**
     * Get Username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param string $username
     * @return \NOUT\Soap\StructType\UsernameTokenType
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->Username = $username;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \NOUT\Soap\StructType\UsernameTokenType
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get Nonce value
     * @return string|null
     */
    public function getNonce()
    {
        return $this->Nonce;
    }
    /**
     * Set Nonce value
     * @param string $nonce
     * @return \NOUT\Soap\StructType\UsernameTokenType
     */
    public function setNonce($nonce = null)
    {
        // validation for constraint: string
        if (!is_null($nonce) && !is_string($nonce)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nonce, true), gettype($nonce)), __LINE__);
        }
        $this->Nonce = $nonce;
        return $this;
    }
    /**
     * Get Created value
     * @return string|null
     */
    public function getCreated()
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param string $created
     * @return \NOUT\Soap\StructType\UsernameTokenType
     */
    public function setCreated($created = null)
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->Created = $created;
        return $this;
    }
    /**
     * Get Encryption value
     * @return \NOUT\Soap\StructType\EncryptionType|null
     */
    public function getEncryption()
    {
        return $this->Encryption;
    }
    /**
     * Set Encryption value
     * @param \NOUT\Soap\StructType\EncryptionType $encryption
     * @return \NOUT\Soap\StructType\UsernameTokenType
     */
    public function setEncryption(\NOUT\Soap\StructType\EncryptionType $encryption = null)
    {
        $this->Encryption = $encryption;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUT\Soap\StructType\UsernameTokenType
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
