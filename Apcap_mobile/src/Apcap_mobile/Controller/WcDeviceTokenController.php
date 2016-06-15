<?php
namespace Apcap\Controller;

use Core\Web\SuperController;
use Apcap\Entity\WcDeviceToken;
use Zend\Json\Json;
use Zend\Mvc\Controller\params;

class WcDeviceTokenController extends SuperController
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
            $json = Json::decode($request->getContent(), WcDeviceToken::class);
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
            $json = Json::decode($request->getContent(), WcDeviceToken::class);
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
        return $this->getEntityManager()->getRepository("Apcap\Entity\WcDeviceToken");
    }
    
    protected function getHelperObject($json)
    {
        $deviceToken = new WcDeviceToken();
        
        if (!empty($json['idTermosECondicoes']))
        {
            $deviceToken->setIdDeviceToken($json['idDeviceToken']);
        }
        ///////////////////////////////////////////////////////////
        $deviceToken->setIdPessoa($json['idPessoa']);
        $deviceToken->setDeviceType($json['deviceType']);
        $deviceToken->setDeviceToken($json['deviceToken']);
    
        return $deviceToken;
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

