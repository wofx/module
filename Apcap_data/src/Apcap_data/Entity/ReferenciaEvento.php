<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * ReferenciaEvento
 *
 * @ORM\Table(name="apcap_referencia_evento")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\ReferenciaEventoRepository")
 */
class ReferenciaEvento extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idReferenciaEvento", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idReferenciaEvento;

    /**
     *
     * @var \DateTime @ORM\Column(name="hora", type="time", nullable=true)
     */
    private $hora;

    /**
     *
     * @var string @ORM\Column(name="referencia", type="string", length=45, nullable=true)
     */
    private $referencia;

    /**
     *
     * @var string @ORM\Column(name="ordem", type="string", length=45, nullable=true)
     */
    private $ordem;
    /**
     * @return the $idReferenciaEvento
     */
    public function getIdReferenciaEvento()
    {
        return $this->idReferenciaEvento;
    }

    /**
     * @return the $hora
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @return the $referencia
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * @return the $ordem
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * @param number $idReferenciaEvento
     */
    public function setIdReferenciaEvento($idReferenciaEvento)
    {
        $this->idReferenciaEvento = $idReferenciaEvento;
    }

    /**
     * @param DateTime $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    /**
     * @param string $referencia
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    /**
     * @param string $ordem
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;
    }

    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idReferenciaEvento'=>$this->idReferenciaEvento,
            'hora'=>date_format($this->hora, 'd/m/Y'),
            'referencia'=>$this->referencia,
            'ordem'=>$this->ordem,
               ];
        
    }

}

