<?php
namespace Apcap_mobile\Controller;

use Core\Web\SuperController;
use Apcap_data\Entity\Carrinho;
use Zend\Json\Json;
use Zend\Mvc\Controller\params;

class CarrinhoController extends SuperController
{

    /**
     * ******************************************************************
     * PUBLIC FUNCTIONS
     * ******************************************************************
     */
    public function listarAction()
    {
        try {
            
            $carrinhoDao = $this->getRepositorio();
            $carrinho = $carrinhoDao->findAll();         
            
            
            // VERIFICA SE FOI ENCONTRADO ALGUM REGISTRO
            if (! $carrinho) {
                // RETORNA CODIGO 204
                return $this->getContentNotFound();
            }
            
            return $this->getJSONResponse($carrinho);
        } catch (\RuntimeException $e) {
            // RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    public function editarAction()
    {
        try {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent(), Carrinho::class);
            // ////////////////////////////////////////////////////////////
            // TRATA REGISTROS
            if (is_null($json) || ! $this->validJson($json)) {
                // RETORNA CODIGO 400
                return $this->getInvalidRequest("Parametros inválidos.");
            }
            // ////////////////////////////////////////////////////////////
            // CONVERTE JSON EM OBJETO
            $carrinho = $this->getHelperObject($json);
            // ////////////////////////////////////////////////////////////
            // SALVA REGISTROS NO BF
            $this->getRepositorio()->editar($carrinho);
            // //////////////////////////////////////////////////////////
            // RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($carrinho);
        } catch (\RuntimeException $e) {
            // RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    public function salvarAction()
    {
        try {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent(), Carrinho::class);
            // ////////////////////////////////////////////////////////////
            // TRATA REGISTROS
            if (is_null($json) || ! $this->validJson($json)) {
                // RETORNA CODIGO 400
                return $this->getInvalidRequest("Parametros inválidos.");
            }
            // ////////////////////////////////////////////////////////////
            // CONVERTE JSON EM OBJETO
            $carrinho = $this->getHelperObject($json);
            // ////////////////////////////////////////////////////////////
            // SALVA REGISTROS NO BF
            $this->getRepositorio()->salvar($carrinho);
            // //////////////////////////////////////////////////////////
            // RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($carrinho);
        } catch (\RuntimeException $e) {
            // RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    public function recuperarPorIdAction()
    {
        try {
            $id = (int) $this->params()->fromRoute('id');
            
            $carrinho = $this->getRepositorio()->find($id);
            
            // VERIFICA SE FOI ENCONTRADO ALGUM REGISTRO
            if (! $carrinho) {
                // RETORNA CODIGO 204
                return $this->getContentNotFound();
            }
            
            return $this->getJSONResponse($carrinho);
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
        return $this->getEntityManager()->getRepository("Apcap_data\Entity\Carrinho");
    }

    protected function getHelperObject($json)
    {
        $carrinho = new Carrinho();
        
        if (! empty($json['idCarrinhoApcap']) && ! is_null($json['idCarrinhoApcap'])) {
            $carrinho->setIdCarrinhoApcap($json['idCarrinhoApcap']);
        }
        
        $carrinho->setIdPessoa($json['idPessoa']);
        $carrinho->setIdTitular($json['idTitular']);
        $carrinho->setIdCartaoProposta($json['idCartaoProposta']);
        $carrinho->setValor($json['valor']);
        $carrinho->setStatus($json['status']);
        
        /**
         * 'idCarrinhoApcap'=>$this->idCarrinhoApcap,
         * 'idPessoa'=>$this->idPessoa,
         * 'idtitular'=>$this->idTitular,
         * 'idCartaoProposta'=>$this->idCartaoProposta,
         * 'valor'=>$this->valor,
         * 'status'=>$this->status,
         */
        
        return $carrinho;
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

