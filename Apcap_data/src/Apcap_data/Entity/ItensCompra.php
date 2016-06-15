<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * ItensCompra
 *
 * @ORM\Table(name="apcap_itens_compra", indexes={@ORM\Index(name="idx_idCompra", columns={"idCompra"}), @ORM\Index(name="idx_idTitular", columns={"idTitular"}), @ORM\Index(name="idx_idTitulo", columns={"idCartaoProposta"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\RepositoryItensCompra")
 */
class ItensCompra extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idItemCompra", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idItemCompra;

    /**
     *
     * @var string @ORM\Column(name="valor", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $valor;

    /**
     *
     * @var \DateTime @ORM\Column(name="datahora", type="datetime", nullable=true)
     */
    private $dataHora;

    /**
     *
     * @var \ApcapApcapCompra @ORM\ManyToOne(targetEntity="ApcapApcapCompra")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="idCompra", referencedColumnName="idCompra")
     *      })
     */
    private $idCompra;

    /**
     *
     * @var \ApcapApcapPessoas @ORM\ManyToOne(targetEntity="ApcapApcapPessoas")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="idTitular", referencedColumnName="idCliente")
     *      })
     */
    private $idTitular;

    /**
     *
     * @var \ApcapApcapCartao @ORM\ManyToOne(targetEntity="ApcapApcapCartao")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="idCartaoProposta", referencedColumnName="idCartao")
     *      })
     */
    private $idCartaoProposta;
    /**
     * @return the $idItemCompra
     */
    public function getIdItemCompra()
    {
        return $this->idItemCompra;
    }

    /**
     * @return the $valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @return the $dataHora
     */
    public function getDataHora()
    {
        return $this->dataHora;
    }

    /**
     * @return the $idCompra
     */
    public function getIdCompra()
    {
        return $this->idCompra;
    }

    /**
     * @return the $idTitular
     */
    public function getIdTitular()
    {
        return $this->idTitular;
    }

    /**
     * @return the $idCartaoProposta
     */
    public function getIdCartaoProposta()
    {
        return $this->idCartaoProposta;
    }

    /**
     * @param number $idItemCompra
     */
    public function setIdItemCompra($idItemCompra)
    {
        $this->idItemCompra = $idItemCompra;
    }

    /**
     * @param string $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @param DateTime $dataHora
     */
    public function setDataHora($dataHora)
    {
        $this->dataHora = $dataHora;
    }

    /**
     * @param ApcapApcapCompra $idCompra
     */
    public function setIdCompra($idCompra)
    {
        $this->idCompra = $idCompra;
    }

    /**
     * @param ApcapApcapPessoas $idTitular
     */
    public function setIdTitular($idTitular)
    {
        $this->idTitular = $idTitular;
    }

    /**
     * @param ApcapApcapCartao $idCartaoProposta
     */
    public function setIdCartaoProposta($idCartaoProposta)
    {
        $this->idCartaoProposta = $idCartaoProposta;
    }
    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idItemCompra'=>$this->idItemCompra,
            'valor'=>$this->valor,
            'dataHora'=>date_format($this->dataHora, 'd/m/Y'),
            'idCompra'=>$this->idCompra,
            'idTitular'=>$this->idTitular,
            'idCartaoProposta'=>$this->idCartaoProposta,
               ];
        
    }


}

