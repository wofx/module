<?php
namespace Apcap_data\Entity;

use Core\data\SuperEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * TipoBem
 *
 * @ORM\Table(name="apcap_tipo_bem")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\TipoBemRepository")
 */
class TipoBem extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idTipoBem", type="integer")
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTipoBem;

    /**
     *
     * @var string @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     *
     * @return the $idTipoBem
     */
    public function getIdTipoBem()
    {
        return $this->idTipoBem;
    }

    /**
     *
     * @param number $idTipoBem            
     */
    public function setIdTipoBem($idTipoBem)
    {
        $this->idTipoBem = $idTipoBem;
    }

    /**
     *
     * @return the $descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     *
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *
     * @param string $descricao            
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     *
     * @param number $status            
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        return [
            "idTipoBem" => $this->idTipoBem,
            "descricao" => $this->descricao,
            "status" => $this->status
        ];
    }
}

