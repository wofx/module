<?php
namespace Apcap_mobile\Controller;

use Core\Web\SuperController;
use phpDocumentor\Reflection\Types\This;
use Zend\Json\Json;
use \RuntimeException;

class ValidacaoController extends SuperController
{

    public function validarApcapAction()
    {
        try {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent());
            
            if (! $this->isValidateValidacaoApcap($json)) {
                return $this->getInvalidRequest("Json inválido ou faltando paramentros.");
            }
            
            $json = [
                'status' => true,
                'idCartaoProposta' => 1234,
                'idTitular' => 2
            ];
            return $this->getJSONResponse($json);
        } catch (RuntimeException $e) {
            return $this->getInternelServerError();
        }
    }

    protected function isValidateValidacaoApcap($json)
    {
        if (empty($json->numeroControle)) {
            return false;
        }
        if (empty($json->codigoSeguranca)) {
            return false;
        }
        if (empty($json->cpf)) {
            return false;
        }
        return true;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Web\SuperController::getHelperObject()
     */
    protected function getHelperObject($json)
    {
        // TODO Auto-generated method stub
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Web\SuperController::getRepositorio()
     */
    protected function getRepositorio()
    {
        // TODO Auto-generated method stub
    }
}

