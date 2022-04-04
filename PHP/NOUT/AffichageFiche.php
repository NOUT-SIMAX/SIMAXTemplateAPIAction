<?php


namespace NOUT;


use NOUT\Soap\EnumType\ReturnType;
use NOUT\Soap\StructType\Execute;

class AffichageFiche extends NOUTClient
{
    /**
     * @param       $idAction
     * @param array $TabParams
     * @return mixed|string|null
     * @throws \Exception
     */
    public function execute($idAction, $TabParams = array())
    {
        $stParam = new Execute($idAction, null, $this->_TabParams2ParamXML($TabParams));
        $resultRequest = $this->_soapService->Execute($stParam);
        $this->_writeLog($this->_soapService);

        $returnType = $this->_soapService->getSoapHeaderReturnType();

        return $this->_TraiteRetour($resultRequest, $returnType);
    }


    /**
     * @param $resultRequest
     * @param $returnType
     * @return mixed|string|null
     * @throws \Exception
     */
    protected function _TraiteRetour($resultRequest, $returnType)
    {
        switch ($returnType)
        {
            case ReturnType::VALUE_RECORD:
            {
                return simplexml_load_string($resultRequest->xml);
            }
        }

        return parent::_TraiteRetour($resultRequest, $returnType);
    }

}