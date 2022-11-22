<?php

/**
 * Created by PhpStorm.
 * User: simon
 * Date: 10/03/2017
 * Time: 15:07
 */

namespace NOUT\Soap\Entity\CondListType;

use NOUT\Soap\Entity\Condition\Condition;

class UniqueCondListType extends CondListType
{
    /** @var  Condition */
    public $Condition;

    /**
     * UniqueCondListType constructor.
     * @param Condition $condition
     */
    public function __construct($condition)
    {
        $this->Condition = $condition;
    }

    public function getContent()
    {
        return $this->Condition->sToSOAP();
    }
}