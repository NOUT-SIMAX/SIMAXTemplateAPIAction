<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 10/03/2017
 * Time: 15:36
 */

namespace NOUT\Soap\Entity\Operator;


use NOUT\Soap\Entity\Condition\Condition;
use NOUT\Soap\Entity\ConditionColonne;
use NOUT\Soap\Entity\SOAPParameter;
use NOUT\Soap\Entity\SOAPParemeterInterface;

class Operator extends SOAPParameter implements SOAPParemeterInterface
{
    /** @var  string */
    public $type;
    /** @var  ConditionColonne[] */
    public $Conditions = array();
    /** @var Operator[] */
    protected $Operators = array();

    /**
     * Operator constructor.
     * @param string $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getOpeningTag()
    {
        return '<Operator type="' . $this->type . '">';
    }

    public function getClosingTag()
    {
        return '</Operator>';
    }

    public function getContent()
    {
        $content = '';
        foreach($this->Conditions as $condition){
            $content .= $condition->sToSOAP();
        }
        foreach($this->Operators as $operator){
            $content .= $operator->sToSoap();
        }
        return $content;
    }

    /**
     * @param Condition $condition
     * @return $this
     */
    public function addCondition($condition){
        array_push($this->Conditions, $condition);
        return $this;
    }

    /**
     * @param Operator $operator
     * @return $this
     */
    public function addOperator($operator){
        array_push($this->Operators, $operator);
        return $this;
    }
}