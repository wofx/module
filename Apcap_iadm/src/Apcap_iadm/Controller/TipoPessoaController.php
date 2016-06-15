<?php

namespace Apcap_iadm\Controller;

use Core\Web\SuperController;
use Apcap_data\Entity\TipoPessoa;
use Zend\Json\Json;


class TipoPessoaController extends SuperController
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
            $serieDao = $this->getRepositorio();
            $series = $serieDao->findAll();
            
            return $this->getJSONResponse($series);
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
            $json = Json::decode($request->getContent(), TipoPessoa::class);
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
            $tipoSorteio = $this->getHelperObject($json);
            ////////////////////////////////////////////////////////////
            //SALVA REGISTROS NO BF
            $this->getRepositorio()->editar($tipoSorteio);
            ////////////////////////////////////////////////////////////
            //RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($tipoSorteio);
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
            $json = Json::decode($request->getContent(), TipoPessoa::class);
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
            $tipoPessoa = $this->getHelperObject($json);            
            ////////////////////////////////////////////////////////////
            //SALVA REGISTROS NO BF
            $this->getRepositorio()->salvar($tipoPessoa);            
            ////////////////////////////////////////////////////////////
            //RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($tipoPessoa);
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
            
            $serie = $this->getRepositorio()->find($id);
            
            return $this->getJSONResponse($serie);
            
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
        return $this->getEntityManager()->getRepository("Apcap_data\Entity\TipoPessoa");
    }
    
    protected function getHelperObject($json)
    {
        $tipoPessoa = new TipoPessoa();
        
        if (!empty($json['idTipoPessoa']))
        {
            $tipoPessoa->setIdTipoPessoa($json['idTipoPessoa']);
        }
        ////////////////////////////////////////////////////////
        $tipoPessoa->setDescricao($json['descricao']);
        $tipoPessoa->setStatus($json['status']);
        
        return $tipoPessoa;
    }
    
    /**
     *******************************************************************
     * PROTECTED FUNCTIONS
     *******************************************************************
     */
    
    private function validJson($json)
    {
        if(isset($json['descricao']))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

