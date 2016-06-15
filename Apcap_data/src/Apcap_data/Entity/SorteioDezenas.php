<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * SorteioDezenas
 *
 * @ORM\Table(name="apcap_sorteio_dezenas", indexes={@ORM\Index(name="idSorteio_fk_sorteio_dezenas_idx", columns={"idSorteio"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\SorteioDezenasRepository")
 */
class SorteioDezenas extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idSorteioDezenas", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idSorteioDezenas;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataInsert", type="date", nullable=false)
     */
    private $dataInsert;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataUpdate", type="date", nullable=false)
     */
    private $dataUpdate;

    /**
     *
     * @var string @ORM\Column(name="dezenasSorteio", type="string", length=256, nullable=true)
     */
    private $dezenasSorteio;

    /**
     *
     * @var integer @ORM\Column(name="idSorteio", type="integer", nullable=true)
     */
    private $idSorteio;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status = '1';
    /**
     * @return the $idSorteioDezenas
     */
    public function getIdSorteioDezenas()
    {
        return $this->idSorteioDezenas;
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
     * @return the $dezenasSorteio
     */
    public function getDezenasSorteio()
    {
        return $this->dezenasSorteio;
    }

    /**
     * @return the $idSorteio
     */
    public function getIdSorteio()
    {
        return $this->idSorteio;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param number $idSorteioDezenas
     */
    public function setIdSorteioDezenas($idSorteioDezenas)
    {
        $this->idSorteioDezenas = $idSorteioDezenas;
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
     * @param string $dezenasSorteio
     */
    public function setDezenasSorteio($dezenasSorteio)
    {
        $this->dezenasSorteio = $dezenasSorteio;
    }

    /**
     * @param number $idSorteio
     */
    public function setIdSorteio($idSorteio)
    {
        $this->idSorteio = $idSorteio;
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
            'idSorteioDezenas'=>$this->idSorteioDezenas,
            'dataInsert'=>date_format($this->dataInsert, 'd/m/Y'),
            'dataUpdate'=>date_format($this->dataUpdate, 'd/m/Y'),
            'dezenasSorteio'=>$this->dezenasSorteio,
            'idSorteio'=>$this->idSorteio,
            'status'=>$this->status,
               ];
        
    }

}

