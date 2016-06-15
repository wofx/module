<?php
namespace Apcap_mobile\Controller;

use Apcap_data\Entity\RegistroCompra;
use Core\Web\SuperController;

class RegistroCompraController extends SuperController
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
            $registroCompraDao = $this->getRepositorio();
            $registroCompras = $registroCompraDao->findAll();
            
            return $this->getJSONResponse($registroCompras);
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
            $json = Json::decode($request->getContent(), RegistroCompra::class);
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
            $registroCompra = $this->getHelperObject($json);
            ////////////////////////////////////////////////////////////
            //SALVA REGISTROS NO BF
            $this->getRepositorio()->editar($registroCompra);
            ////////////////////////////////////////////////////////////
            //RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($registroCompra);
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
            $json = Json::decode($request->getContent(), RegistroCompra::class);
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
            $registroCompra = $this->getHelperObject($json);
            ////////////////////////////////////////////////////////////
            //SALVA REGISTROS NO BF
            $this->getRepositorio()->salvar($registroCompra);
            ////////////////////////////////////////////////////////////
            //RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($registroCompra);
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
            
            $registroCompra = $this->getRepositorio()->find($id);
            
            return $this->getJSONResponse($registroCompra);
            
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
        return $this->getEntityManager()->getRepository("Apcap\Entity\RegistroCompra");
    }
    
    protected function getHelperObject($json)
    {
        $registroCompra = new \RegistroCompra();
        
        if (!empty($json['idregistroCompra']))
        {
            $registroCompra->setIdregistroCompra($json['idregistroCompra']);
        }
        ////////////////////////////////////////////////////////////////////////////////////////
        $registroCompra->setDataVigenciaInicio(DateUtils::convertDate($json['dataVigenciaInicio']));
        $registroCompra->setDataVigenciaFim(DateUtils::convertDate($json['dataVigenciaFim']));
        $registroCompra->setRangeInicio($json['rangeInicio']);
        $registroCompra->setRangeFim($json['rangeFim']);
        $registroCompra->setValor($json['valor']);
        $registroCompra->setStatus($json['status']);
        
        return $registroCompra;
    }

    /**
     *******************************************************************
     * PROTECTED FUNCTIONS
     *******************************************************************
     */
    
    private function validJson($json)
    {
        
    }
}

