<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Cartao
 *
 * @ORM\Table(name="apcap_cartao", indexes={@ORM\Index(name="idDistribuicaoCartao_fk_cartao_prop_idx", columns={"idDistribuicaoCartao"})})
  * @ORM\Entity(repositoryClass="Apcap_data\Repositories\CartaoRepository")
 */
class Cartao extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idCartao", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCartao;

    /**
     *
     * @var integer @ORM\Column(name="idPdv", type="integer", nullable=true)
     */
    private $idPdv;

    /**
     *
     * @var integer @ORM\Column(name="numeroControle", type="integer", nullable=true)
     */
    private $numeroControle;

    /**
     *
     * @var string @ORM\Column(name="codigoSeguranca", type="string", length=255, nullable=true)
     */
    private $codigoSeguranca;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     *
     * @var \ApcapIadmDistribuicaoCartao @ORM\ManyToOne(targetEntity="ApcapIadmDistribuicaoCartao")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="idDistribuicaoCartao", referencedColumnName="idDistribuicaoCartao")
     *      })
     */
    private $idDistribuicaoCartao;
    /**
     * @return the $idCartao
     */
    public function getIdCartao()
    {
        return $this->idCartao;
    }

    /**
     * @return the $idPdv
     */
    public function getIdPdv()
    {
        return $this->idPdv;
    }

    /**
     * @return the $numeroControle
     */
    public function getNumeroControle()
    {
        return $this->numeroControle;
    }

    /**
     * @return the $codigoSeguranca
     */
    public function getCodigoSeguranca()
    {
        return $this->codigoSeguranca;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return the $idDistribuicaoCartao
     */
    public function getIdDistribuicaoCartao()
    {
        return $this->idDistribuicaoCartao;
    }

    /**
     * @param number $idCartao
     */
    public function setIdCartao($idCartao)
    {
        $this->idCartao = $idCartao;
    }

    /**
     * @param number $idPdv
     */
    public function setIdPdv($idPdv)
    {
        $this->idPdv = $idPdv;
    }

    /**
     * @param number $numeroControle
     */
    public function setNumeroControle($numeroControle)
    {
        $this->numeroControle = $numeroControle;
    }

    /**
     * @param string $codigoSeguranca
     */
    public function setCodigoSeguranca($codigoSeguranca)
    {
        $this->codigoSeguranca = $codigoSeguranca;
    }

    /**
     * @param number $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param ApcapIadmDistribuicaoCartao $idDistribuicaoCartao
     */
    public function setIdDistribuicaoCartao($idDistribuicaoCartao)
    {
        $this->idDistribuicaoCartao = $idDistribuicaoCartao;
    }
    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return[
          'idCartao'=>$this->idCartao,
          'idPdv'=>$this->idPdv,
          'numeroControle'=>$this->numeroControle,
          'codigoSeguranca'=>$this->codigoSeguranca,
          'status'=>$this->status,
          'idDistribuicaoCartao'=>$this->idDistribuicaoCartao, 
              ];
        
    }


}

