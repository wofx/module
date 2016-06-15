<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Apcap for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Apcap_iadm\Controller;

use Core\Web\SuperController;
use Apcap_data\Entity\TipoBem;
use Zend\Json\Json;
use Zend\Mvc\Controller\params;


class TipoBemController extends SuperController
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
            $tipoBemDao = $this->getRepositorio();
            $tipoBems = $tipoBemDao->findAll();
        
        
            return $this->getJSONResponse($tipoBems);
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
            $json = Json::decode($request->getContent(), TipoBem::class);
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
                    //RETORNA ERRO 400
                    return $this->getInvalidRequest("Parametros inválidos.");
                }
            }
            ////////////////////////////////////////////////////////////
            //CONVERTE JSON EM OBJETO
            $tipobem = $this->getHelperObject($json);
            ////////////////////////////////////////////////////////////
            //SALVA REGISTROS NO BF
            $this->getRepositorio()->editar($tipobem);
            ////////////////////////////////////////////////////////////
            //RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($tipobem);
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
            $json = Json::decode($request->getContent(), TipoBem::class);
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
                    //RETORNA ERRO 400
                    return $this->getInvalidRequest("Parametros inválidos.");
                }
            }
            ////////////////////////////////////////////////////////////
            //CONVERTE JSON EM OBJETO
             $tipobem = $this->getHelperObject($json);
            ////////////////////////////////////////////////////////////
            //SALVA REGISTROS NO BF
            $this->getRepositorio()->salvar($tipobem);
            ////////////////////////////////////////////////////////////
            //RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($tipobem);
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
        return $this->getEntityManager()->getRepository("Apcap_data\Entity\TipoBem");
    }

    
    protected function getHelperObject($json)
    {
        $tipobem = new TipoBem();
        
        if (!empty($json['idTipoBem']) && !is_null($json['idTipoBem']))
        {
            $tipobem->setIdTipoBem($json['idTipoBem']);
        }
        
        $tipobem->setDescricao($json['descricao']);
        $tipobem->setStatus($json['status']);
        return $tipobem;
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
