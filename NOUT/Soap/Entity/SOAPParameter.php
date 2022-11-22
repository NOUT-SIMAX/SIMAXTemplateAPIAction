<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 10/03/2017
 * Time: 15:50
 */

namespace NOUT\Soap\Entity;


abstract class SOAPParameter implements SOAPParemeterInterface
{
    /** @inheritdoc */
    public function sToSoap()
    {
        $xml = $this->getOpeningTag();
        $xml .= $this->getContent();
        $xml .= $this->getClosingTag();
        return $xml;
    }

    /**
     * NUSOAP client will try to get the parameter content by converting it to string
     * @return string
     */
    public function __toString()
    {
        return $this->getContent();
    }
}