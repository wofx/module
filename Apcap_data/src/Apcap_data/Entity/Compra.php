<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Compra
 *
 * @ORM\Table(name="apcap_compra", indexes={@ORM\Index(name="idx_idCliente", columns={"idPessoa"}), @ORM\Index(name="idValidado_fk_compra_idx", columns={"idValidado"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\CompraRepository")
 */
class Compra extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idCompra", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCompra;

    /**
     *
     * @var integer @ORM\Column(name="idPessoa", type="integer", nullable=false)
     */
    private $idPessoa;

    /**
     *
     * @var integer @ORM\Column(name="idValidado", type="integer", nullable=true)
     */
    private $idValidado;

    /**
     *
     * @var string @ORM\Column(name="valor", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $valor;

    /**
     *
     * @var string @ORM\Column(name="tipoCartao", type="string", length=1, nullable=false)
     */
    private $tipoCartao;

    /**
     *
     * @var integer @ORM\Column(name="qtdParcelas", type="integer", nullable=false)
     */
    private $qtdParcelas;

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
     * @var string @ORM\Column(name="enderecoCobranca", type="string", length=512, nullable=true)
     */
    private $enderecoCobranca;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;
    /**
     * @return the $idCompra
     */
    public function getIdCompra()
    {
        return $this->idCompra;
    }

    /**
     * @return the $idPessoa
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * @return the $idValidado
     */
    public function getIdValidado()
    {
        return $this->idValidado;
    }

    /**
     * @return the $valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @return the $tipoCartao
     */
    public function getTipoCartao()
    {
        return $this->tipoCartao;
    }

    /**
     * @return the $qtdParcelas
     */
    public function getQtdParcelas()
    {
        return $this->qtdParcelas;
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
     * @return the $enderecoCobranca
     */
    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param number $idCompra
     */
    public function setIdCompra($idCompra)
    {
        $this->idCompra = $idCompra;
    }

    /**
     * @param number $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }

    /**
     * @param number $idValidado
     */
    public function setIdValidado($idValidado)
    {
        $this->idValidado = $idValidado;
    }

    /**
     * @param string $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @param string $tipoCartao
     */
    public function setTipoCartao($tipoCartao)
    {
        $this->tipoCartao = $tipoCartao;
    }

    /**
     * @param number $qtdParcelas
     */
    public function setQtdParcelas($qtdParcelas)
    {
        $this->qtdParcelas = $qtdParcelas;
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
     * @param string $enderecoCobranca
     */
    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
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
          'idCompra'=>$this->idCompra,
          'idPessoa'=>$this->idPessoa,
          'idValidado'=>$this->idValidado,
          'valor'=>$this->valor,
          'tipoCartao'=>$this->tipoCartao,
          'qtdParcelas'=>$this->qtdParcelas,
          'bandeiraCartao'=>$this->bandeiraCartao,  
          'numeroCartao'=>$this->numeroCartao,  
          'validadeCartao'=>$this->validadeCartao,
          'nomeCompletoCartao'=>$this->nomeCompletoCartao,
          'enderecoCobranca'=>$this->enderecoCobranca,
          'status'=>$this->status,  
              ];
    
    }

    
}

