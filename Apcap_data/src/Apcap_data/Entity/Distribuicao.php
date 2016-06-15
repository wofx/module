<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Distribuicao
 *
 * @ORM\Table(name="apcap_distribuicao")
 * @ORM\Entity(RepositoryClass="Apcap_data\Repositories\DistribuicaoRepository")
 */
class Distribuicao extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="id_distribuicao", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_distribuicao;

    /**
     *
     * @var integer @ORM\Column(name="range_inicial", type="integer", nullable=true)
     */
    private $range_inicial;

    /**
     *
     * @var integer @ORM\Column(name="range_final", type="integer", nullable=true)
     */
    private $range_final;

    /**
     *
     * @var integer @ORM\Column(name="id_distribuidor", type="integer", nullable=true)
     */
    private $id_distribuidor;

    /**
     *
     * @var integer @ORM\Column(name="id_serie", type="integer", nullable=true)
     */
    private $id_serie;

    /**
     *
     * @var \DateTime @ORM\Column(name="datahora_distribuicao", type="datetime", nullable=true)
     */
    private $datahora_distribuicao;
    /**
     * @return the $id_distribuicao
     */
    public function getId_distribuicao()
    {
        return $this->id_distribuicao;
    }

    /**
     * @return the $range_inicial
     */
    public function getRange_inicial()
    {
        return $this->range_inicial;
    }

    /**
     * @return the $range_final
     */
    public function getRange_final()
    {
        return $this->range_final;
    }

    /**
     * @return the $id_distribuidor
     */
    public function getId_distribuidor()
    {
        return $this->id_distribuidor;
    }

    /**
     * @return the $id_serie
     */
    public function getId_serie()
    {
        return $this->id_serie;
    }

    /**
     * @return the $datahora_distribuicao
     */
    public function getDatahora_distribuicao()
    {
        return $this->datahora_distribuicao;
    }

    /**
     * @param number $id_distribuicao
     */
    public function setId_distribuicao($id_distribuicao)
    {
        $this->id_distribuicao = $id_distribuicao;
    }

    /**
     * @param number $range_inicial
     */
    public function setRange_inicial($range_inicial)
    {
        $this->range_inicial = $range_inicial;
    }

    /**
     * @param number $range_final
     */
    public function setRange_final($range_final)
    {
        $this->range_final = $range_final;
    }

    /**
     * @param number $id_distribuidor
     */
    public function setId_distribuidor($id_distribuidor)
    {
        $this->id_distribuidor = $id_distribuidor;
    }

    /**
     * @param number $id_serie
     */
    public function setId_serie($id_serie)
    {
        $this->id_serie = $id_serie;
    }

    /**
     * @param DateTime $datahora_distribuicao
     */
    public function setDatahora_distribuicao($datahora_distribuicao)
    {
        $this->datahora_distribuicao = $datahora_distribuicao;
    }
    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'id_distribuicao'=>$this->id_distribuicao,
            'range_inicial'=>$this->range_inicial,
            'range_final'=>$this->range_final,
            'id_distribuidor'=>$this->id_distribuidor,
            'id_serie'=>$this->id_serie,
            'datahora_distribuicao'=>date_format($this->datahora_distribuicao, "d/m/Y H:i:s"),
            
               ];
        
    }


}

