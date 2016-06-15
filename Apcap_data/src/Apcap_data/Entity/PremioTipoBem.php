<?php

namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * PremioTipoBem
 *
 * @ORM\Table(name="apcap_premio_tipo_bem", indexes={@ORM\Index(name="id_tipo_bem_fk_premio_tipo_idx", columns={"idPremio"}), @ORM\Index(name="id_tipo_bem_fk_idx", columns={"idTipoBem"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\PremioTipoBemRepository")
 */
class PremioTipoBem extends SuperEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPremio", type="integer", nullable=true)
     */
    private $idPremio;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTipoBem", type="integer", nullable=true)
     */
    private $idTipoBem;
    
    /**
     * @return the $idPremio
     */
    public function getIdPremio()
    {
        return $this->idPremio;
    }

    /**
     * @return the $idTipoBem
     */
    public function getIdTipoBem()
    {
        return $this->idTipoBem;
    }

    /**
     * @param number $idPremio
     */
    public function setIdPremio($idPremio)
    {
        $this->idPremio = $idPremio;
    }

    /**
     * @param number $idTipoBem
     */
    public function setIdTipoBem($idTipoBem)
    {
        $this->idTipoBem = $idTipoBem;
    }
    
    
    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idTipoBem'=>$this->idTipoBem,
            'idPremio'=>$this->idPremio,
        ];
    }
}