<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 10/03/2017
 * Time: 15:18
 */

namespace NOUT\Soap\Entity\CondListType;


use NOUT\Soap\Entity\SOAPParameter;
use NOUT\Soap\Entity\SOAPParemeterInterface;

abstract class CondListType extends SOAPParameter implements SOAPParemeterInterface
{
    /** @inheritdoc */
    public function getOpeningTag()
    {
        return '<CondList>';
    }

    /** @inheritdoc */
    public function getClosingTag()
    {
        return '</CondList>';
    }
}