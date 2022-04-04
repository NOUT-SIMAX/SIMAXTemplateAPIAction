<?php


namespace NOUT;

use NOUT\Soap\EnumType\ReturnType;
use NOUT\Soap\StructType\ConfirmResponse;
use NOUT\Soap\StructType\Execute;

class DeclenchementAutoClient extends NOUTClient
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
        //écriture dans le log
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
            case ReturnType::VALUE_MESSAGE_BOX:
            {
                $xml = simplexml_load_string($resultRequest->xml);
                $json = $this->_GetJSONFromMessageBox($xml->MessageBox);
                if ($json){

                    $idcontext = $this->_soapService->getSoapHeaderActionContext();
                    $this->_ConfirmMessageBox($idcontext, ConfirmResponse::IDOK);
                    return $json;
                }

                throw new \Exception($xml->MessageBox->Message, 101);
            }
        }

        return parent::_TraiteRetour($resultRequest, $returnType);
    }



}