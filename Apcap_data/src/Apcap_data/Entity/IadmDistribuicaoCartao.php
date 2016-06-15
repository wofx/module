<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * IadmDistribuicaoCartao
 *
 * @ORM\Table(name="iadm_distribuicao_cartao", indexes={@ORM\Index(name="idDistribuidor_fk_distribuicao_cartao_idx", columns={"idDistribuidor"}), @ORM\Index(name="idSerie_fk_distribuicao_cartao_idx", columns={"idSerie"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\IadmDistribuicaoCartaoRepository")
 */
class IadmDistribuicaoCartao extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idDistribuicaoCartao", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idDistribuicaoCartao;

    /**
     *
     * @var integer @ORM\Column(name="idSerie", type="integer", nullable=true)
     */
    private $idSerie;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataInsert", type="datetime", nullable=true)
     */
    private $dataInsert;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataUpdate", type="datetime", nullable=true)
     */
    private $dataUpdate;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     *
     * @var \ApcapIadmDistribuidores @ORM\ManyToOne(targetEntity="ApcapIadmDistribuidores")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="idDistribuidor", referencedColumnName="idDistribuidor")
     *      })
     */
    private $idDistribuidor;
    /**
     * @return the $idDistribuicaoCartao
     */
    public function getIdDistribuicaoCartao()
    {
        return $this->idDistribuicaoCartao;
    }

    /**
     * @return the $idSerie
     */
    public function getIdSerie()
    {
        return $this->idSerie;
    }

    /**
     * @return the $dataInsert
     */
    public function getDataInsert()
    {
        return $this->dataInsert;
    }

    /**
     * @return the $dataUpdate
     */
    public function getDataUpdate()
    {
        return $this->dataUpdate;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return the $idDistribuidor
     */
    public function getIdDistribuidor()
    {
        return $this->idDistribuidor;
    }

    /**
     * @param number $idDistribuicaoCartao
     */
    public function setIdDistribuicaoCartao($idDistribuicaoCartao)
    {
        $this->idDistribuicaoCartao = $idDistribuicaoCartao;
    }

    /**
     * @param number $idSerie
     */
    public function setIdSerie($idSerie)
    {
        $this->idSerie = $idSerie;
    }

    /**
     * @param DateTime $dataInsert
     */
    public function setDataInsert($dataInsert)
    {
        $this->dataInsert = $dataInsert;
    }

    /**
     * @param DateTime $dataUpdate
     */
    public function setDataUpdate($dataUpdate)
    {
        $this->dataUpdate = $dataUpdate;
    }

    /**
     * @param number $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param ApcapIadmDistribuidores $idDistribuidor
     */
    public function setIdDistribuidor($idDistribuidor)
    {
        $this->idDistribuidor = $idDistribuidor;
    }

    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idDistribuicaoCartao'=>$this->idDistribuicaoCartao,
            'idSerie'=>$this->idSerie,
            'dataInsert'=>date_format($this->dataInsert, 'd/m/Y'),
            'dataUpdate'=>date_format($this->dataUpdate, 'd/m/Y'),
            'status'=>$this->status,
            'idDistribuidor'=>$this->idDistribuidor,           
               ];
        
    }

}

