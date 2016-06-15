<?php

namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Evento
 *
 * @ORM\Table(name="apcap_evento", indexes={@ORM\Index(name="idPromocao_fk_evento_idx", columns={"idPromocao"}), @ORM\Index(name="idReferenciaEvento_fk_evento_idx", columns={"idReferenciaEvento"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\EventoRepository")
 */
class Evento extends SuperEntity
{
    /**
     *
     * @var integer @ORM\Column(name="idEvento", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idEvento;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataEvento", type="date", nullable=true)
     */
    private $dataEvento;

    /**
     *
     * @var \DateTime @ORM\Column(name="horaEvento", type="time", nullable=true)
     */
    private $horaEvento;

    /**
     *
     * @var string @ORM\Column(name="valorCapitalizacao", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valorCapitalizacao;

    /**
     *
     * @var integer @ORM\Column(name="ordem", type="integer", nullable=true)
     */
    private $ordem;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     *
     * @var integer @ORM\Column(name="idPromocao", type="integer", nullable=true)
     */
    private $idPromocao;

    /**
     *
     * @var \ReferenciaEvento @ORM\ManyToOne(targetEntity="ReferenciaEvento")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="idReferenciaEvento", referencedColumnName="idReferenciaEvento")
     *      })
     */
    private $idReferenciaEvento;
    
    /**
     * @return the $idEvento
     */
    public function getIdEvento()
    {
        return $this->idEvento;
    }

    /**
     * @return the $dataEvento
     */
    public function getDataEvento()
    {
        return $this->dataEvento;
    }

    /**
     * @return the $horaEvento
     */
    public function getHoraEvento()
    {
        return $this->horaEvento;
    }

    /**
     * @return the $valorCapitalizacao
     */
    public function getValorCapitalizacao()
    {
        return $this->valorCapitalizacao;
    }

    /**
     * @return the $ordem
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return the $idPromocao
     */
    public function getIdPromocao()
    {
        return $this->idPromocao;
    }

    /**
     * @return the $idReferenciaEvento
     */
    public function getIdReferenciaEvento()
    {
        return $this->idReferenciaEvento;
    }

    /**
     * @param number $idEvento
     */
    public function setIdEvento($idEvento)
    {
        $this->idEvento = $idEvento;
    }

    /**
     * @param DateTime $dataEvento
     */
    public function setDataEvento($dataEvento)
    {
        $this->dataEvento = $dataEvento;
    }

    /**
     * @param DateTime $horaEvento
     */
    public function setHoraEvento($horaEvento)
    {
        $this->horaEvento = $horaEvento;
    }

    /**
     * @param string $valorCapitalizacao
     */
    public function setValorCapitalizacao($valorCapitalizacao)
    {
        $this->valorCapitalizacao = $valorCapitalizacao;
    }

    /**
     * @param number $ordem
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;
    }

    /**
     * @param number $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param number $idPromocao
     */
    public function setIdPromocao($idPromocao)
    {
        $this->idPromocao = $idPromocao;
    }

    /**
     * @param ApcapApcapReferenciaEvento $idReferenciaEvento
     */
    public function setIdReferenciaEvento($idReferenciaEvento)
    {
        $this->idReferenciaEvento = $idReferenciaEvento;
    }

    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idEvento'=>$this->idEvento,
            'dataEvento'=>date_format($this->dataEvento, "d/m/Y"),           
            'horaEvento'=>date_format($this->horaEvento, "H:i:s"),
            'valorCapitalizacao'=>$this->valorCapitalizacao,
            'ordem'=>$this->ordem,
            'status'=>$this->status,
            'idPromocao'=>$this->idPromocao,
            'idReferenciaEvento'=>$this->idReferenciaEvento,
              ];
    }

}