<?php

namespace  Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Serie
 *
 * @ORM\Table(name="apcap_serie")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\SerieRepository")
 */
class Serie extends SuperEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSerie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="imgApcap2", type="string", length=45, nullable=true)
     */
    private $imgApcap2;

    /**
     * @var string
     *
     * @ORM\Column(name="imgApcap", type="string", length=45, nullable=true)
     */
    private $imgApcap;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataVigenciaInicio", type="date", nullable=true)
     */
    private $dataVigenciaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataVigenciaFim", type="date", nullable=true)
     */
    private $dataVigenciaFim;

    /**
     * @var integer
     *
     * @ORM\Column(name="rangeInicio", type="integer", nullable=true)
     */
    private $rangeInicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="rangeFim", type="integer", nullable=true)
     */
    private $rangeFim;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status = '1';
 
    /**
     * @return the $idSerie
     */
    public function getIdSerie()
    {
        return $this->idSerie;
    }

    /**
     * @return the $imgApcap2
     */
    public function getImgApcap2()
    {
        return $this->imgApcap2;
    }

    /**
     * @return the $imgApcap
     */
    public function getImgApcap()
    {
        return $this->imgApcap;
    }

    /**
     * @return the $dataVigenciaInicio
     */
    public function getDataVigenciaInicio()
    {
        return $this->dataVigenciaInicio;
    }

    /**
     * @return the $dataVigenciaFim
     */
    public function getDataVigenciaFim()
    {
        return $this->dataVigenciaFim;
    }

    /**
     * @return the $rangeInicio
     */
    public function getRangeInicio()
    {
        return $this->rangeInicio;
    }

    /**
     * @return the $rangeFim
     */
    public function getRangeFim()
    {
        return $this->rangeFim;
    }

    /**
     * @return the $valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param number $idSerie
     */
    public function setIdSerie($idSerie)
    {
        $this->idSerie = $idSerie;
    }

    /**
     * @param string $imgApcap2
     */
    public function setImgApcap2($imgApcap2)
    {
        $this->imgApcap2 = $imgApcap2;
    }

    /**
     * @param string $imgApcap
     */
    public function setImgApcap($imgApcap)
    {
        $this->imgApcap = $imgApcap;
    }

    /**
     * @param DateTime $dataVigenciaInicio
     */
    public function setDataVigenciaInicio($dataVigenciaInicio)
    {
        $this->dataVigenciaInicio = $dataVigenciaInicio;
    }

    /**
     * @param DateTime $dataVigenciaFim
     */
    public function setDataVigenciaFim($dataVigenciaFim)
    {
        $this->dataVigenciaFim = $dataVigenciaFim;
    }

    /**
     * @param number $rangeInicio
     */
    public function setRangeInicio($rangeInicio)
    {
        $this->rangeInicio = $rangeInicio;
    }

    /**
     * @param number $rangeFim
     */
    public function setRangeFim($rangeFim)
    {
        $this->rangeFim = $rangeFim;
    }

    /**
     * @param string $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
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
            'idSerie'=>$this->idSerie,
            'imgApcap'=>$this->imgApcap,
            'imgApcap2'=>$this->imgApcap2,
            'dataVigenciaInicio'=>date_format($this->dataVigenciaInicio, "d/m/Y"),
            'dataVigenciaFim'=>date_format($this->dataVigenciaFim, "d/m/Y"),
            'rangeInicio'=>$this->rangeInicio,
            'rangeFim'=>$this->rangeFim,
            'valor'=>$this->valor,
            'status'=>$this->status,
              ];
    }
}

