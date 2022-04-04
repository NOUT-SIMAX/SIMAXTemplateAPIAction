<?php
/**
 * Created by PhpStorm.
 * User: Ninon
 * Date: 10/08/2016
 * Time: 15:08
 */

namespace NOUT\Entity;


use NOUT\Soap\StructType\UsernameTokenType;

class UsernameToken extends UsernameTokenType
{
    /**
     * @var string
     */
    protected $m_sClearPassword;
    /**
     * @var string
     */
    protected $m_sOasisSecurePassword;

    public function __construct($sUsername, $sPassword)
    {
        $this->Username         = $sUsername;
        $this->m_sClearPassword = $sPassword;

        if (!empty($this->m_sClearPassword))
        {
            $this->m_sOasisSecurePassword = base64_encode(md5($this->m_sClearPassword, true));
        }
        else
        {
            $this->m_sOasisSecurePassword = 'AAAAAAAAAAAAAAAAAAAAAA==';
        }

    }

    /**
     * @return bool
     */
    public function bIsValid()
    {
        return !empty($this->Username);
    }

    /**
     * fonction permettant de générer le mot de passe encrypter compatible avec la norme oasis.
     * elle initialise au passage, le nonce et le created
     *
     * @param string $strPassword le mot de passe en encrypter
     */
    public function ComputeCryptedPassword()
    {
        $this->Created = date('r');
        $this->Nonce   = base64_encode(microtime());

        $this->_OASIS();
    }

    /**
     * génère le mot de passe crypté pour OASIS (système d'identification par défaut)
     */
    protected function _OASIS()
    {
        $this->Password = base64_encode(sha1($this->Nonce.$this->Created.$this->m_sOasisSecurePassword, true));
    }

}