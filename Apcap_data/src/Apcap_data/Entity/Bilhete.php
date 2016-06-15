<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Bilhete
 *
 * @ORM\Table(name="apcap_bilhete")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\BilheteRepository")
 */
class Bilhete extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idBilhete", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idBilhete;

    /**
     *
     * @var integer @ORM\Column(name="numeroBilhete", type="integer", nullable=true)
     */
    private $numeroBilhete;

    /**
     *
     * @var \DateTime @ORM\Column(name="inicioVigencia", type="datetime", nullable=true)
     */
    private $inicioVigencia;

    /**
     *
     * @var \DateTime @ORM\Column(name="fimVigencia", type="datetime", nullable=true)
     */
    private $fimVigencia;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;
    /**
     * @return the $idBilhete
     */
    public function getIdBilhete()
    {
        return $this->idBilhete;
    }

    /**
     * @return the $numeroBilhete
     */
    public function getNumeroBilhete()
    {
        return $this->numeroBilhete;
    }

    /**
     * @return the $inicioVigencia
     */
    public function getInicioVigencia()
    {
        return $this->inicioVigencia;
    }

    /**
     * @return the $fimVigencia
     */
    public function getFimVigencia()
    {
        return $this->fimVigencia;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param number $idBilhete
     */
    public function setIdBilhete($idBilhete)
    {
        $this->idBilhete = $idBilhete;
    }

    /**
     * @param number $numeroBilhete
     */
    public function setNumeroBilhete($numeroBilhete)
    {
        $this->numeroBilhete = $numeroBilhete;
    }

    /**
     * @param DateTime $inicioVigencia
     */
    public function setInicioVigencia($inicioVigencia)
    {
        $this->inicioVigencia = $inicioVigencia;
    }

    /**
     * @param DateTime $fimVigencia
     */
    public function setFimVigencia($fimVigencia)
    {
        $this->fimVigencia = $fimVigencia;
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
            'idBilhete'=>$this->idBilhete,
            'numeroBilhete'=>$this->numeroBilhete,
            'inicioVigencia'=>date_format($this->inicioVigencia, "d/m/Y H:i:s"),
            'fimVigencia'=>date_format($this->fimVigencia, "d/m/Y H:i:s"),
            'status'=>$this->status,
               ];
        
    }



   
}

