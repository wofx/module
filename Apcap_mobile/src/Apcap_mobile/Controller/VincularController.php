<?php
namespace Apcap_mobile\Controller;

use Core\Web\SuperController;
use Zend\Json\Json;
use \RuntimeException;

class VincularController extends SuperController
{

    public function vincularApcapAction()
    {
        try {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent());
            
            if (! $this->isValidateBodyVincularApcap($json)) {
                return $this->getInvalidRequest("Json inválido ou faltando paramentros.");
            }
            
            $json = [
                'idCartaoProposta' => 19,
                'idValidado' => 6,
                'status' => true
            ];
            return $this->getJSONResponse($json);
        } catch (RuntimeException $e) {
            return $this->getInternelServerError();
        }
    }

    public function vincularTituloApcapAction()
    {
        try {
            $request = $this->getRequest();
            $body = Json::decode($request->getContent());
            
            if (! $this->isValidateBodyVincularTituloApcap($body)) {
                return $this->getInvalidRequest("Json inválido ou faltando paramentros.");
            }
            
            $json = [
                'idsValidados' => [
                    19,
                    20,
                    21
                ],
                'idsNaoValidados' => [
                    6,
                    10,
                    20
                ],
                'status' => true
            ];
            return $this->getJSONResponse($json);
        } catch (RuntimeException $e) {
            return $this->getInternelServerError();
        }
    }

    protected function isValidateBodyVincularApcap($json)
    {
        if (is_null($json->idCartaoProposta) && empty($json->idCartaoProposta)) {
            return false;
        }
        if (is_null($json->idTitular) && empty($json->idTitular)) {
            return false;
        }
        return true;
    }

    protected function isValidateBodyVincularTituloApcap($body)
    {
        if (is_null($body->idsCartoes)) {
            return false;
        }
        return true;
    }

    protected function getHelperObject($json)
    {}

    protected function getRepositorio()
    {}
}

