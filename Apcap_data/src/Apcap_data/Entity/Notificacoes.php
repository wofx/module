<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Notificacoes
 *
 * @ORM\Table(name="apcap_notificacoes")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\NotificacoesRepository")
 */
class Notificacoes extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="id", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @var string @ORM\Column(name="titulo", type="string", length=32, nullable=false)
     */
    private $titulo;

    /**
     *
     * @var string @ORM\Column(name="notificacao", type="string", length=256, nullable=false)
     */
    private $notificacao;

    /**
     *
     * @var \DateTime @ORM\Column(name="datahora", type="datetime", nullable=false)
     */
    private $datahora;
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @return the $notificacao
     */
    public function getNotificacao()
    {
        return $this->notificacao;
    }

    /**
     * @return the $datahora
     */
    public function getDatahora()
    {
        return $this->datahora;
    }

    /**
     * @param number $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @param string $notificacao
     */
    public function setNotificacao($notificacao)
    {
        $this->notificacao = $notificacao;
    }

    /**
     * @param DateTime $datahora
     */
    public function setDatahora($datahora)
    {
        $this->datahora = $datahora;
    }
    
    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'id'=>$this->id,
            'titulo'=>$this->titulo,
            'notificacao'=>$this->notificacao,
            'datahora'=>date_format($this->datahora, 'd/m/Y'),
               ];
        
    }


}

