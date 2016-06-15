<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Ganhadores
 *
 * @ORM\Table(name="apcap_ganhadores", indexes={@ORM\Index(name="idValidados_fk_ganhadores_idx", columns={"idValidados"}), @ORM\Index(name="idSorteio_idx", columns={"idSorteio"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\TipoBemRepository")

 */
class Ganhadores extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idGanhador", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idGanhador;

    /**
     *
     * @var integer @ORM\Column(name="idSorteio", type="integer", nullable=true)
     */
    private $idSorteio;

    /**
     *
     * @var integer @ORM\Column(name="idValidados", type="integer", nullable=true)
     */
    private $idValidados;
    /**
     * @return the $idGanhador
     */
    public function getIdGanhador()
    {
        return $this->idGanhador;
    }

    /**
     * @return the $idSorteio
     */
    public function getIdSorteio()
    {
        return $this->idSorteio;
    }

    /**
     * @return the $idValidados
     */
    public function getIdValidados()
    {
        return $this->idValidados;
    }

    /**
     * @param number $idGanhador
     */
    public function setIdGanhador($idGanhador)
    {
        $this->idGanhador = $idGanhador;
    }

    /**
     * @param number $idSorteio
     */
    public function setIdSorteio($idSorteio)
    {
        $this->idSorteio = $idSorteio;
    }

    /**
     * @param number $idValidados
     */
    public function setIdValidados($idValidados)
    {
        $this->idValidados = $idValidados;
    }

    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idGanhador'=>$this->idGanhador,
            'idSorteio'=>$this->idSorteio,
            'idValidados'=>$this->idValidados,
               ];
        
    }

}

