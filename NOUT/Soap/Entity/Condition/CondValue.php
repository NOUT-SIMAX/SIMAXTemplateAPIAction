<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 10/03/2017
 * Time: 16:22
 */

namespace NOUT\Soap\Entity\Condition;


use NOUT\Soap\Entity\SOAPParameter;

class CondValue extends SOAPParameter
{
    /** @var  string $value */
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getOpeningTag()
    {
        return '<CondValue>';
    }

    public function getClosingTag()
    {
        return '</CondValue>';
    }

    public function getContent()
    {
        return $this->value;
    }
}