<?php
namespace Apcap_idist_motoboy\Controller;

use \RuntimeException;
use Core\Web\SuperController;
use Zend\Json\Json;
use Zend\Mvc\Controller\params;

class DadosVeiculoController extends SuperController
{

    public function salvarAction()
    {
        try {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent(), DadosVeiculo::class);
            
            $dadosVeiculo = $this->getHelperObject($json);
            
            $this->getRepositorio()->salvar($dadosVeiculo);
            return $this->getJSONResponse($dadosVeiculo);
        } catch (RuntimeException $e) {
            return $this->getInternelServerError();
        }
    }

    public function editarAction()
    {
        $dadosVeiculo = null;
        $request = $this->getRequest();
        $json = Json::decode($request->getContent(), DadosVeiculo::class);
        
        $dadosVeiculo = $this->getHelperObject($json);
        
        $dadosVeiculoDao = $this->getRepositorio();
        $dadosVeiculoDao->editar($dadosVeiculo);
        
        
        return $this->getJSONResponse($dadosVeiculoDao);
    }

    public function listarAction()
    {
        $dadosVeiculoDao = $this->getRepositorio();
        $dadosVeiculo = $dadosVeiculoDao->findAll();
        return $this->getJSONResponse($dadosVeiculo);
    }

    public function recuperarPorIdAction()
    {
        $id = (int) $this->params()->fromRoute('idInformacaoVeiculo');
        $dadosVeiculo = $this->getRepositorio()->find($id);
        
        return $this->getJSONResponse($dadosVeiculo);
    }

    protected function getRepositorio()
    {
        return $this->getEntityManager()->getRepository("Apcap\Entity\DadosVeiculo");
    }

    protected function getHelperObject($json)
    {
        $dadosVeiculo = new DadosVeiculoController();
        
        if (! empty($json['idInformacaoVeiculo']) && ! empty($json['idPessoa'])) {
            $dadosVeiculo->setIdInformacaoVeiculo($json['idInformacaoVeiculo']);
        }

        $dadosVeiculo->setIdInformacaoVeiculo($json['setIdInformacaoVeiculo']);
        $dadosVeiculo->setIdPessoa($json['setIdPessoa']);
        $dadosVeiculo->setStatus($json['setStatus']);
        $dadosVeiculo->setMarca($json['setMarca']);
        $dadosVeiculo->setModelo($json['setModelo']);
        $dadosVeiculo->setAno($json['setAno']);
        $dadosVeiculo->setPlaca($json['setPlaca']);
        $dadosVeiculo->setCnh($json['setCnh']);
        
        return $dadosVeiculo;
    }
}

