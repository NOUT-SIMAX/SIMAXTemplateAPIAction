<?php

/**
 * Created by PhpStorm.
 * User: simon
 * Date: 10/03/2017
 * Time: 15:07
 */

namespace NOUT\Soap\Entity\CondListType;

use NOUT\Soap\Entity\Operator\Operator;

class MultipleCondListType extends CondListType
{
    /** @var  Operator $operator */
    public $Operator;

    public function __construct($operator)
    {
        $this->Operator = $operator;
    }

    public function getContent()
    {
        return $this->Operator->sToSoap();
    }
}