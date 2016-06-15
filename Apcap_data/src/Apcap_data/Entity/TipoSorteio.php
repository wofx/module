<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * TipoSorteio
 *
 * @ORM\Table(name="apcap_tipo_sorteio")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\TipoSorteioRepository")
 */
class TipoSorteio extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idTipoSorteio", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTipoSorteio;

    /**
     *
     * @var string @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status = '1';

    /**
     *
     * @return the $idTipoSorteio
     */
    public function getIdTipoSorteio()
    {
        return $this->idTipoSorteio;
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
     * @param number $idTipoSorteio            
     */
    public function setIdTipoSorteio($idTipoSorteio)
    {
        $this->idTipoSorteio = $idTipoSorteio;
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
        // TODO Auto-generated method stub
        return [
            "idTipoSorteio" => $this->idTipoSorteio,
            "descricao" => $this->descricao,
            "status" => $this->status
        ];
    }
}