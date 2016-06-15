<?php
namespace Apcap_mobile\Controller;

use Core\Web\SuperController;
use Apcap_data\Entity\Termos;
use Zend\Json\Json;
use Zend\Mvc\Controller\params;

class TermosController extends SuperController
{

    /**
     * ******************************************************************
     * PUBLIC FUNCTIONS
     * ******************************************************************
     */
    public function listarAction()
    {
        try {
            
            $termosDao = $this->getRepositorio();
            $termos = $termosDao->findAll();
            
            // VERIFICA SE FOI ENCONTRADO ALGUM REGISTRO
            if (! $termos) {
                // RETORNA CODIGO 204
                return $this->getContentNotFound();
            }
            
            return $this->getJSONResponse($termos);
        } catch (\RuntimeException $e) {
            // RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    public function editarAction()
    {
        try {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent(), Termos::class);
            // ////////////////////////////////////////////////////////////
            // TRATA REGISTROS
            if (is_null($json) || ! $this->validJson($json)) {
                // RETORNA CODIGO 400
                return $this->getInvalidRequest("Parametros inválidos.");
            }
            // ////////////////////////////////////////////////////////////
            // CONVERTE JSON EM OBJETO
            $termos = $this->getHelperObject($json);
            // ////////////////////////////////////////////////////////////
            // SALVA REGISTROS NO BF
            $this->getRepositorio()->editar($termos);
            // //////////////////////////////////////////////////////////
            // RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($termos);
        } catch (\RuntimeException $e) {
            // RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    public function salvarAction()
    {
        try {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent(), Termos::class);
            // ////////////////////////////////////////////////////////////
            // TRATA REGISTROS
            if (is_null($json) || ! $this->validJson($json)) {
                // RETORNA CODIGO 400
                return $this->getInvalidRequest("Parametros inválidos.");
            }
            // ////////////////////////////////////////////////////////////
            // CONVERTE JSON EM OBJETO
            $termos = $this->getHelperObject($json);
            // ////////////////////////////////////////////////////////////
            // SALVA REGISTROS NO BF
            $this->getRepositorio()->salvar($termos);
            // //////////////////////////////////////////////////////////
            // RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($termos);
        } catch (\RuntimeException $e) {
            // RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    public function recuperarPorIdAction()
    {
        try {
            $id = (int) $this->params()->fromRoute('id');
            
            $termos = $this->getRepositorio()->find($id);
            
            // VERIFICA SE FOI ENCONTRADO ALGUM REGISTRO
            if (! $termos) {
                // RETORNA CODIGO 204
                return $this->getContentNotFound();
            }
            
            return $this->getJSONResponse($termos);
        } catch (\RuntimeException $e) {
            // RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    /**
     * ******************************************************************
     * PROTECTED FUNCTIONS
     * ******************************************************************
     */
    protected function getRepositorio()
    {
        return $this->getEntityManager()->getRepository("Apcap_data\Entity\Termos");
    }

    protected function getHelperObject($json)
    {
        $termos = new Termos();
        
        if (! empty($json['idTermo']) && ! is_null($json['idTermo'])) {
            $termos->setIdTermo($json['idTermo']);
        }
        $termos->setTitulo($json['titulo']);
        $termos->setArquivo($json['arquivo']);
        $termos->setVersao($json['versao']);
        $termos->setDestinacao($json['destinacao']);
        
        /**
         * idTermo' => $this->idTermo,
         * 'dataInsert' => date_format($this->dataInsert, 'd/m/Y'),
         * 'dataUpdate' => date_format($this->dataUpdate, 'd/m/Y'),
         * 'titulo' => $this->titulo,
         * 'arquivo' => $this->arquivo,
         * 'versao' => $this->versao,
         * 'destinacao' => $this->destinacao
         */
        
        return $termos;
    }

    /**
     * ******************************************************************
     * PROTECTED FUNCTIONS
     * ******************************************************************
     */
    private function validJson($json)
    {
        return true;
    }
}

