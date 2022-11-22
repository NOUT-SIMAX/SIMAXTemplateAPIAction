<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 10/03/2017
 * Time: 16:22
 */

namespace NOUT\Soap\Entity\Condition;


use NOUT\Soap\Entity\SOAPParameter;

class CondColumn extends SOAPParameter
{
    /** @var  string $column */
    public $Column;

    public function __construct($column)
    {
        $this->Column = $column;
    }

    public function getOpeningTag()
    {
        return '<CondCol>';
    }

    public function getClosingTag()
    {
        return '</CondCol>';
    }

    public function getContent()
    {
        return $this->Column;
    }
}