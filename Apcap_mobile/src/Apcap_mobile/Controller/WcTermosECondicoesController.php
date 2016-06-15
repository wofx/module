<?php
namespace Apcap\Controller;

use Core\Web\SuperController;
use Apcap\Entity\WcTermosECondicoes;
use Zend\Json\Json;
use Zend\Mvc\Controller\params;

class WcTermosECondicoesController extends SuperController
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
            $json = Json::decode($request->getContent(), WcTermosECondicoes::class);
            ////////////////////////////////////////////////////////////
            //TRATA REGISTROS
            if (is_null($json))
            {
                //RETORNA ERRO 204
                return $this->getContentNotFound();
            }
            else
            {
                //if(!$this->validJson($json))
                //{
                    //return $this->getInvalidRequest("Parametros inválidos.");
                //}
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
            $json = Json::decode($request->getContent(), WcTermosECondicoes::class);
            ////////////////////////////////////////////////////////////
            //TRATA REGISTROS
            if (is_null($json))
            {
                //RETORNA ERRO 204
                return $this->getContentNotFound();
            }
            else
            {
                //if(!$this->validJson($json))
                //{
                    //return $this->getInvalidRequest("Parametros inválidos.");
                //}
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
        return $this->getEntityManager()->getRepository("Apcap\Entity\WcTermosECondicoes");
    }
    
    protected function getHelperObject($json)
    {
        $termosECondicoes = new WcTermosECondicoes();
        
        if (!empty($json['idTermosECondicoes']))
        {
            $termosECondicoes->setIdTermosECondicoes($json['idTermosECondicoes']);
        }
        ////////////////////////////////////////////////////////////////////////////////////////
        $termosECondicoes->setIdPraca($json['idPraca']);
        $termosECondicoes->setDataAplicacao($this->convertDate($json['dataAplicacao']));
        $termosECondicoes->setNome($json['nome']);
        $termosECondicoes->setArquivo($json['arquivo']);
    
        return $termosECondicoes;
    }
    
    /**
     *******************************************************************
     * PROTECTED FUNCTIONS
     *******************************************************************
     */
    
    private function validJson($json)
    {
        
    }
    
    private function convertDate($date)
    {
        #INVERTE AS DATAS (dd/mm/yyyy) PARA FORMATO (yyyy-mm-dd)
        $strDate = implode("-",array_reverse(explode("/", $date)));
        #CONVERTE AS DATAS DE STRING PARA DATE
        $dateConverted = new \DateTime($strDate);
        #RETORNA DATA CONVERTIDA
        return $dateConverted;
    }
}

