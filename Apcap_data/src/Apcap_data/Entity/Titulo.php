<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Titulo
 *
 * @ORM\Table(name="apcap_titulo")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\TituloRepository")
 */
class Titulo extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idTitulo", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idtitulo = '0';

    /**
     *
     * @var string @ORM\Column(name="dezenas", type="string", length=255, nullable=true)
     */
    private $dezenas;

    /**
     *
     * @var integer @ORM\Column(name="numTituloDuplo", type="integer", nullable=true)
     */
    private $numTituloDuplo;

    /**
     *
     * @var string @ORM\Column(name="dezenasTituloDuplo", type="string", length=255, nullable=true)
     */
    private $dezenasTituloDuplo;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

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
     * @return the $idtitulo
     */
    public function getIdtitulo()
    {
        return $this->idtitulo;
    }

    /**
     * @return the $dezenas
     */
    public function getDezenas()
    {
        return $this->dezenas;
    }

    /**
     * @return the $numTituloDuplo
     */
    public function getNumTituloDuplo()
    {
        return $this->numTituloDuplo;
    }

    /**
     * @return the $dezenasTituloDuplo
     */
    public function getDezenasTituloDuplo()
    {
        return $this->dezenasTituloDuplo;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
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
     * @param number $idtitulo
     */
    public function setIdtitulo($idtitulo)
    {
        $this->idtitulo = $idtitulo;
    }

    /**
     * @param string $dezenas
     */
    public function setDezenas($dezenas)
    {
        $this->dezenas = $dezenas;
    }

    /**
     * @param number $numTituloDuplo
     */
    public function setNumTituloDuplo($numTituloDuplo)
    {
        $this->numTituloDuplo = $numTituloDuplo;
    }

    /**
     * @param string $dezenasTituloDuplo
     */
    public function setDezenasTituloDuplo($dezenasTituloDuplo)
    {
        $this->dezenasTituloDuplo = $dezenasTituloDuplo;
    }

    /**
     * @param number $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idTitulo'=>$this->idtitulo,
            'dezenas'=>$this->dezenas,
            'numTituloDuplo'=>$this->numTituloDuplo,
            'dezenasTituloDuplo'=>$this->dezenasTituloDuplo,
            'status'=>$this->status,
            'dataInsert'=>date_format($this->dataInsert, 'd/m/Y'),
            'dataUpdate'=>date_format($this->dataUpdate, 'd/m/Y'),
        ];
        
    }

}

