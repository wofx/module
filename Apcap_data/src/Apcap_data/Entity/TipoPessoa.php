<?php
namespace Apcap_data\Entity;

use Core\data\SuperEntity;
use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * ApcapApcapTipoPessoa
 * @package Apcap_data\Entity
 * @ORM\Table(name="apcap_tipo_pessoa")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\TipoPessoaRepository")
 */
class TipoPessoa extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idTipoPessoa", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTipoPessoa;

    /**
     *
     * @var string @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;
     
    
    /**
     *
     * @return the $idTipoPessoa
     */
    public function getIdTipoPessoa()
    {
        return $this->idTipoPessoa;
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
     * @param number $idTipoPessoa            
     */
    public function setIdTipoPessoa($idTipoPessoa)
    {
        $this->idTipoPessoa = $idTipoPessoa;
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
            "idTipoPessoa" => $this->idTipoPessoa,
            "descricao" => $this->descricao,
            "status" => $this->status
        ];
    }

}

