<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * FormasPagamentos
 *
 * @ORM\Table(name="apcap_formas_pagamentos", indexes={@ORM\Index(name="idx_idCliente", columns={"idPessoa"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\FormasPagamentosRepository")
 */
class FormasPagamentos extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idFormaDePagamento", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idFormaDePagamento;

    /**
     *
     * @var integer @ORM\Column(name="idPessoa", type="integer", nullable=false)
     */
    private $idPessoa;

    /**
     *
     * @var integer @ORM\Column(name="tipoCartao", type="integer", nullable=true)
     */
    private $tipoCartao;

    /**
     *
     * @var string @ORM\Column(name="bandeiraCartao", type="string", length=128, nullable=false)
     */
    private $bandeiraCartao;

    /**
     *
     * @var string @ORM\Column(name="numeroCartao", type="string", length=128, nullable=false)
     */
    private $numeroCartao;

    /**
     *
     * @var string @ORM\Column(name="validadeCartao", type="string", length=128, nullable=false)
     */
    private $validadeCartao;

    /**
     *
     * @var string @ORM\Column(name="nomeCompletoCartao", type="string", length=128, nullable=false)
     */
    private $nomeCompletoCartao;

    
    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;
    /**
     * @return the $idFormaDePagamento
     */
    public function getIdFormaDePagamento()
    {
        return $this->idFormaDePagamento;
    }

    /**
     * @return the $idPessoa
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * @return the $tipoCartao
     */
    public function getTipoCartao()
    {
        return $this->tipoCartao;
    }

    /**
     * @return the $bandeiraCartao
     */
    public function getBandeiraCartao()
    {
        return $this->bandeiraCartao;
    }

    /**
     * @return the $numeroCartao
     */
    public function getNumeroCartao()
    {
        return $this->numeroCartao;
    }

    /**
     * @return the $validadeCartao
     */
    public function getValidadeCartao()
    {
        return $this->validadeCartao;
    }

    /**
     * @return the $nomeCompletoCartao
     */
    public function getNomeCompletoCartao()
    {
        return $this->nomeCompletoCartao;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param number $idFormaDePagamento
     */
    public function setIdFormaDePagamento($idFormaDePagamento)
    {
        $this->idFormaDePagamento = $idFormaDePagamento;
    }

    /**
     * @param number $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }

    /**
     * @param number $tipoCartao
     */
    public function setTipoCartao($tipoCartao)
    {
        $this->tipoCartao = $tipoCartao;
    }

    /**
     * @param string $bandeiraCartao
     */
    public function setBandeiraCartao($bandeiraCartao)
    {
        $this->bandeiraCartao = $bandeiraCartao;
    }

    /**
     * @param string $numeroCartao
     */
    public function setNumeroCartao($numeroCartao)
    {
        $this->numeroCartao = $numeroCartao;
    }

    /**
     * @param string $validadeCartao
     */
    public function setValidadeCartao($validadeCartao)
    {
        $this->validadeCartao = $validadeCartao;
    }

    /**
     * @param string $nomeCompletoCartao
     */
    public function setNomeCompletoCartao($nomeCompletoCartao)
    {
        $this->nomeCompletoCartao = $nomeCompletoCartao;
    }

    /**
     * @param number $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idFormaDePagamento'=>$this->idFormaDePagamento,
            'idPessoa'=>$this->idPessoa,
            'tipoCartao'=>$this->tipoCartao,
            'bandeiraCartao'=>$this->bandeiraCartao,
            'numeroCartao'=>$this->numeroCartao,
            'validadeCartao'=>$this->validadeCartao,  
            'nomeCompletoCartao'=>$this->nomeCompletoCartao,
            'status'=>$this->status,
              ];
        
    }


}

