<?php
namespace Apcap_mobile\Controller;

use Core\Web\SuperController;
use Zend\Json\Json;

class ApcapController extends SuperController
{

    public function consultarMeusApcapsAction()
    {
        try {
            $request = $this->getRequest();
            
            if (empty($request->getQuery('cpf'))) {
                return $this->getInvalidRequest("Json inválido ou faltando paramentros.");
            }
            
            $cpf = $request->getQuery('cpf');
            
            $apcaps = $this->getRepositorio()->findAll();
            
            /**
            $json = [
                "status" => false,
                "arrMeusApcaps" => [
                    [
                        "idValidado" => "4",
                        "idCartaoProposta" => "13737",
                        "numeroBilhete" => "0000000001",
                        "imgApcap" => "http://webcaps.ideams.com.br/UPLOADS/IMAGES/apcap.jpg",
                        "inicioVigencia" => "2016-05-24",
                        "fimVigencia" => "2016-06-23",
                        "inicioVigenciaF" => "24/05/2016",
                        "fimVigenciaF" => "23/06/2016",
                        "idSerie" => "1",
                        "numeroControle" => "001.203.737-1",
                        "codigoSeguranca" => "OAOBET",
                        "dataSorteio" => "28/05/2016",
                        "horaSorteio" => "22:00h",
                        "diaSorteio" => "Sábado",
                        "dataSorteioGiro" => "19/05/2016",
                        "horaSorteioGiro" => "16:00",
                        "diaSorteioGiro" => "Quinta",
                        "nomeTitular" => "ÉLON MURILO CASTRO ALVES",
                        "cpfTitular" => "023.223.815-43"
                    ],
                    [
                        "idValidado" => "4",
                        "idCartaoProposta" => "13737",
                        "numeroBilhete" => "0000000001",
                        "imgApcap" => "http://webcaps.ideams.com.br/UPLOADS/IMAGES/apcap.jpg",
                        "inicioVigencia" => "2016-05-24",
                        "fimVigencia" => "2016-06-23",
                        "inicioVigenciaF" => "24/05/2016",
                        "fimVigenciaF" => "23/06/2016",
                        "idSerie" => "1",
                        "numeroControle" => "001.203.737-1",
                        "codigoSeguranca" => "OAOBET",
                        "dataSorteio" => "28/05/2016",
                        "horaSorteio" => "22:00h",
                        "diaSorteio" => "Sábado",
                        "dataSorteioGiro" => "19/05/2016",
                        "horaSorteioGiro" => "16:00",
                        "diaSorteioGiro" => "Quinta",
                        "nomeTitular" => "ÉLON MURILO CASTRO ALVES",
                        "cpfTitular" => "023.223.815-43"
                    ]
                ]
            ];
            **/
            
            return $this->getJSONResponse($apcaps);
        } catch (\RuntimeException $e) {
            $this->getInternelServerError();
        }
    }

    protected function getHelperObject($json)
    {}

    protected function getRepositorio()
    {
        return $this->getEntityManager()->getRepository("Apcap_data\Entity\Validados");
    }
}

