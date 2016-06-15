<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Carrinho
 *
 * @ORM\Table(name="apcap_carrinho", indexes={@ORM\Index(name="idx_idCartaoProposta", columns={"idCartaoProposta"}), @ORM\Index(name="idx_idCliente", columns={"idPessoa"}), @ORM\Index(name="idx_idTitular", columns={"idTitular"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\CarrinhoRepository")
 */
class Carrinho extends SuperEntity

{

    /**
     *
     * @var integer @ORM\Column(name="idCarrinhoApcap", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCarrinhoApcap;

    /**
     *
     * @var integer @ORM\Column(name="idPessoa", type="integer", nullable=false)
     */
    private $idPessoa;

    /**
     *
     * @var integer @ORM\Column(name="idTitular", type="integer", nullable=false)
     */
    private $idTitular;

    /**
     *
     * @var integer @ORM\Column(name="idCartaoProposta", type="integer", nullable=false)
     */
    private $idCartaoProposta;

    /**
     *
     * @var string @ORM\Column(name="valor", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $valor;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     *
     * @return the $idCarrinhoApcap
     */
    public function getIdCarrinhoApcap()
    {
        return $this->idCarrinhoApcap;
    }

    /**
     *
     * @return the $idPessoa
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     *
     * @return the $idTitular
     */
    public function getIdTitular()
    {
        return $this->idTitular;
    }

    /**
     *
     * @return the $idCartaoProposta
     */
    public function getIdCartaoProposta()
    {
        return $this->idCartaoProposta;
    }

    /**
     *
     * @return the $valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     *
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *
     * @param number $idCarrinhoApcap            
     */
    public function setIdCarrinhoApcap($idCarrinhoApcap)
    {
        $this->idCarrinhoApcap = $idCarrinhoApcap;
    }

    /**
     *
     * @param number $idPessoa            
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }

    /**
     *
     * @param number $idTitular            
     */
    public function setIdTitular($idTitular)
    {
        $this->idTitular = $idTitular;
    }

    /**
     *
     * @param number $idCartaoProposta            
     */
    public function setIdCartaoProposta($idCartaoProposta)
    {
        $this->idCartaoProposta = $idCartaoProposta;
    }

    /**
     *
     * @param string $valor            
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     *
     * @param number $status            
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idCarrinhoApcap' => $this->idCarrinhoApcap,
            'idPessoa' => $this->idPessoa,
            'idtitular' => $this->idTitular,
            'idCartaoProposta' => $this->idCartaoProposta,
            'valor' => $this->valor,
            'status' => $this->status
        ];
    }
}

