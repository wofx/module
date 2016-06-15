<?php
namespace Apcap_mobile\Controller;

use Core\Web\SuperController;
use Apcap_data\Entity\Cartao;
use Zend\Json\Json;
use Zend\Mvc\Controller\params;

class CartaoController extends SuperController
{

    /**
     * ******************************************************************
     * PUBLIC FUNCTIONS
     * ******************************************************************
     */
    public function listarAction()
    {
        try {
            
            $cartaoDao = $this->getRepositorio();
            $cartao = $cartaoDao->findAll();
            
            // VERIFICA SE FOI ENCONTRADO ALGUM REGISTRO
            if (! $cartao) {
                // RETORNA CODIGO 204
                return $this->getContentNotFound();
            }
            
            return $this->getJSONResponse($cartao);
        } catch (\RuntimeException $e) {
            // RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    public function editarAction()
    {
        try {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent(), Cartao::class);
            // ////////////////////////////////////////////////////////////
            // TRATA REGISTROS
            if (is_null($json) || ! $this->validJson($json)) {
                // RETORNA CODIGO 400
                return $this->getInvalidRequest("Parametros inválidos.");
            }
            // ////////////////////////////////////////////////////////////
            // CONVERTE JSON EM OBJETO
            $cartao = $this->getHelperObject($json);
            // ////////////////////////////////////////////////////////////
            // SALVA REGISTROS NO BF
            $this->getRepositorio()->editar($cartao);
            // //////////////////////////////////////////////////////////
            // RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($cartao);
        } catch (\RuntimeException $e) {
            // RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    public function salvarAction()
    {
        try {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent(), Cartao::class);
            // ////////////////////////////////////////////////////////////
            // TRATA REGISTROS
            if (is_null($json) || ! $this->validJson($json)) {
                // RETORNA CODIGO 400
                return $this->getInvalidRequest("Parametros inválidos.");
            }
            // ////////////////////////////////////////////////////////////
            // CONVERTE JSON EM OBJETO
            $cartao = $this->getHelperObject($json);
            // ////////////////////////////////////////////////////////////
            // SALVA REGISTROS NO BF
            $this->getRepositorio()->salvar($cartao);
            // //////////////////////////////////////////////////////////
            // RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($cartao);
        } catch (\RuntimeException $e) {
            // RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    public function recuperarPorIdAction()
    {
        try {
            $id = (int) $this->params()->fromRoute('id');
            
            $cartao = $this->getRepositorio()->find($id);
            
            // VERIFICA SE FOI ENCONTRADO ALGUM REGISTRO
            if (! $cartao) {
                // RETORNA CODIGO 204
                return $this->getContentNotFound();
            }
            
            return $this->getJSONResponse($cartao);
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
        return $this->getEntityManager()->getRepository("Apcap_data\Entity\Cartao");
    }

    protected function getHelperObject($json)
    {
        $cartao = new Cartao();
        
        if (! empty($json['idCartao']) && ! is_null($json['idCartao'])) {
            $cartao->setIdCartao($json['idCartao']);
        }
        $cartao->setIdPdv($json['idPdv']);
        $cartao->setNumeroControle($json['numeroControle']);
        $cartao->setCodigoSeguranca($json['codigoSeguranca']);
        $cartao->setStatus($json['status']);
        $cartao->setIdDistribuicaoCartao($json['idDistribuicaoCartao']);
        
        /**
        'idCartao'=>$this->idCartao,
          'idPdv'=>$this->idPdv,
          'numeroControle'=>$this->numeroControle,
          'codigoSeguranca'=>$this->codigoSeguranca,
          'status'=>$this->status,
          'idDistribuicaoCartao'=>$this->idDistribuicaoCartao, 
         */
        
        return $cartao;
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



