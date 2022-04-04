<?php


namespace NOUT;


use NOUT\Soap\EnumType\ReturnType;
use NOUT\Soap\StructType\Execute;

class Ping extends NOUTClient
{
    /**
     * @param       $idAction
     * @param array $TabParams
     * @return bool
     * @throws \Exception
     */
    public function execute($idAction, $TabParams = array())
    {
        return true;
    }
}