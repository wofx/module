<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * DistribuicaoPdv
 *
 * @ORM\Table(name="apcap_distribuicao_pdv")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\DistribuicaoPdvRepository")
 */
class DistribuicaoPdv extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="id_distribuicao_pdv", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idDistribuicaoPdv;

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
     * @var integer @ORM\Column(name="id_pdv", type="integer", nullable=true)
     */
    private $id_pdv;

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
     * @return the $idDistribuicaoPdv
     */
    public function getIdDistribuicaoPdv()
    {
        return $this->idDistribuicaoPdv;
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
     * @return the $id_pdv
     */
    public function getId_pdv()
    {
        return $this->id_pdv;
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
     * @param number $idDistribuicaoPdv
     */
    public function setIdDistribuicaoPdv($idDistribuicaoPdv)
    {
        $this->idDistribuicaoPdv = $idDistribuicaoPdv;
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
     * @param number $id_pdv
     */
    public function setId_pdv($id_pdv)
    {
        $this->id_pdv = $id_pdv;
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
            'idDistribuicaoPdv'=>$this->idDistribuicaoPdv,
            'range_inicial'=>$this->range_inicial,
            'range_final'=>$this->range_final,
            'id_distribuidor'=>$this->id_distribuidor,
            'id_pdv'=>$this->id_pdv,
            'id_serie'=>$this->id_serie,
            'datahora_distribuicao'=>date_format($this->datahora_distribuicao, "d/m/Y H:i:s"),           
               ];
        
    }

}

