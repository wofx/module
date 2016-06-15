<?php

namespace Apcap_iadm\Controller;

use Core\Web\SuperController;
use Apcap_data\Entity\Serie;
use Zend\Json\Json;
use Zend\Mvc\Controller\params;
use Zend\Validator\Date;
use Core\utils\DateUtils;

class SerieController extends SuperController
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
            $json = Json::decode($request->getContent(), Serie::class);
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
            $serie = $this->getHelperObject($json);
            ////////////////////////////////////////////////////////////
            //SALVA REGISTROS NO BF
            $this->getRepositorio()->editar($serie);
            ////////////////////////////////////////////////////////////
            //RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($serie);
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
            $json = Json::decode($request->getContent(), Serie::class);
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
            $serie = $this->getHelperObject($json);
            ////////////////////////////////////////////////////////////
            //SALVA REGISTROS NO BF
            $this->getRepositorio()->salvar($serie);
            ////////////////////////////////////////////////////////////
            //RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($serie);
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
        return $this->getEntityManager()->getRepository("Apcap_data\Entity\Serie");
    }
    
    protected function getHelperObject($json)
    {
        $serie = new Serie();
        
        if (!empty($json['idSerie']))
        {
            $serie->setIdSerie($json['idSerie']);
        }
        ////////////////////////////////////////////////////////////////////////////////////////
        $serie->setDataVigenciaInicio(DateUtils::convertDate($json['dataVigenciaInicio']));
        $serie->setDataVigenciaFim(DateUtils::convertDate($json['dataVigenciaFim']));
        $serie->setRangeInicio($json['rangeInicio']);
        $serie->setRangeFim($json['rangeFim']);
        $serie->setValor($json['valor']);
        $serie->setStatus($json['status']);
        
        return $serie;
    }

    /**
     *******************************************************************
     * PROTECTED FUNCTIONS
     *******************************************************************
     */
    
    private function validJson($json)
    {
        //ESTANCIA CLASSE DE DATAS PARA TRATAR DATAS PASSANDO O FORMATO DESEJADO
        $date = new Date(array('format' => 'd/m/Y'));
        
        //VERIFICA SE DATAS VALIDAS
        if(!$date->isValid($json['dataVigenciaInicio']))
        {
            return false;
        }
        if(!$date->isValid($json['dataVigenciaFim']))
        {
            return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VALIDA SE DATA DE VIGENCIA INICIO E MAIOR QUE A DATA DE VIGENCIA FIM        
        if(DateUtils::convertDate($json['dataVigenciaInicio']) > DateUtils::convertDate($json['dataVigenciaFim']))
        {
           return false;
        }
       
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VALIDA RANGES
        if(isset($json['rangeInicio']) && isset($json['rangeFim']))
        {
            #VERIFICA SE RANGE INICIO E MAIOR QUE O FINAL
            if($json['rangeInicio'] > $json['rangeFim'])
            {
                return false;
            }
        }
        else
        {
            return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VALIDA VALOR
        if(!isset($json['valor']))
        {
            return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //SE TUDO OK
        return true;
    }
}

