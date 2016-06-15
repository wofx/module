<?php

namespace Apcap_iadm\Controller;

use Core\Web\SuperController;
use Apcap_data\Entity\Sorteio;
use Zend\Json\Json;
use Zend\Mvc\Controller\params;

class SorteioController extends SuperController
{
    /**
     *******************************************************************
     * PUBLIC FUNCTIONS
     *******************************************************************
     */
    
    public function listarAction()
    {
        try
        {
            $sorteioDao = $this->getRepositorio();
            $sorteios = $sorteioDao->findAll();
    
            return $this->getJSONResponse($sorteios);
        }
        catch (\RuntimeException $e)
        {
            //RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }
    
    public function editarAction()
    {
        try
        {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent(), Sorteio::class);
            ////////////////////////////////////////////////////////////
            //TRATA REGISTROS
            if (is_null($json))
            {
                //RETORNA ERRO 204
                return $this->getContentNotFound();
            }
            else
            {
                if(!$this->validJson($json))
                {
                    return $this->getInvalidRequest("Parametros inválidos.");
                }
            }
            ////////////////////////////////////////////////////////////
            //CONVERTE JSON EM OBJETO
            $sorteio = $this->getHelperObject($json);
            ////////////////////////////////////////////////////////////
            //SALVA REGISTROS NO BF
            $this->getRepositorio()->editar($sorteio);
            ////////////////////////////////////////////////////////////
            //RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($sorteio);
        }
        catch (\RuntimeException $e)
        {
            //RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }
    
    public function salvarAction()
    {
        try
        {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent(), Sorteio::class);
            ////////////////////////////////////////////////////////////
            //TRATA REGISTROS
            if (is_null($json))
            {
                //RETORNA ERRO 204
                return $this->getContentNotFound();
            }
            else
            {
                if(!$this->validJson($json))
                {
                    return $this->getInvalidRequest("Parametros inválidos.");
                }
            }
            ////////////////////////////////////////////////////////////
            //CONVERTE JSON EM OBJETO
            $sorteio = $this->getHelperObject($json);
            ////////////////////////////////////////////////////////////
            //SALVA REGISTROS NO BF
            $this->getRepositorio()->salvar($sorteio);
            ////////////////////////////////////////////////////////////
            //RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($sorteio);
        }
        catch (\RuntimeException $e)
        {
            //RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }
    
    public function recuperarPorIdAction()
    {
        try
        {
            $id = (int)$this->params()->fromRoute('id');
    
            $sorteio = $this->getRepositorio()->find($id);
    
            return $this->getJSONResponse($sorteio);
    
        }
        catch (\RuntimeException $e)
        {
            //RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }
    
    /**
     *******************************************************************
     * PROTECTED FUNCTIONS
     *******************************************************************
     */
    
    protected function getRepositorio()
    {
        return $this->getEntityManager()->getRepository("Apcap_data\Entity\Sorteio");
    }
    
    protected function getHelperObject($json)
    {
        $sorteio = new Sorteio();
    
        if (!empty($json['idSorteio']))
        {
            $sorteio->setIdPremio($json['idSorteio']);
        }
        /////////////////////////////////////////////////////////////
        $sorteio->setDescricao($json['descricao']);
        $sorteio->setValorSugerido($json['valorSugerido']);
        $sorteio->setValorCapitalizacao($json['valorCapitalizacao']);
        $sorteio->setIdTipoSorteio($json['idTiposorteio']);
        $sorteio->setIdEvento($json['idEvento']);
    
        return $sorteio;
    }
    
    /**
     *******************************************************************
     * PROTECTED FUNCTIONS
     *******************************************************************
     */
    
    private function validJson($json)
    {
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VALIDA DESCRICAO
        if(!isset($json['descricao']))
        {
            return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VALIDA VALOR SUGERIDO
        if(!isset($json['valorSugerido']))
        {
            return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VALIDA VALOR CAPTALIZACAO
        if(!isset($json['valorCapitalizacao']))
        {
            return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VALIDA ID TIPO DO SORTEIO
        if(!isset($json['idTiposorteio']))
        {
            return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VALIDA ID DO EVENTO
        if(!isset($json['idEvento']))
        {
            return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //SE TUDO OK
        return true;
    }
}

