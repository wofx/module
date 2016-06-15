<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;
use DateTime;

/**
 * Promocao
 *
 * @ORM\Table(name="apcap_promocao")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\PromocaoRepository")
 */
class Promocao extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idPromocao", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPromocao;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataReferencia", type="date", nullable=true)
     */
    private $dataReferencia;

    /**
     *
     * @var string @ORM\Column(name="cgSusep", type="string", length=32, nullable=true)
     */
    private $cgSusep;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataVigenciaInicio", type="datetime", nullable=true)
     */
    private $dataVigenciaInicio;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataVigenciaFim", type="datetime", nullable=true)
     */
    private $dataVigenciaFim;

    /**
     *
     * @var integer @ORM\Column(name="categoria", type="integer", nullable=true)
     */
    private $categoria;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     *
     * @return the $idPromocao
     */
    public function getIdPromocao()
    {
        return $this->idPromocao;
    }

    /**
     *
     * @return the $dataReferencia
     */
    public function getdataReferencia()
    {
        return $this->dataReferencia;
    }

    /**
     *
     * @return the $cgSusep
     */
    public function getCgSusep()
    {
        return $this->cgSusep;
    }

    /**
     *
     * @return the $dataVigenciaInicio
     */
    public function getDataVigenciaInicio()
    {
        return $this->dataVigenciaInicio;
    }

    /**
     *
     * @return the $dataVigenciaFim
     */
    public function getDataVigenciaFim()
    {
        return $this->dataVigenciaFim;
    }

    /**
     *
     * @return the $categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
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
     * @param number $idPromocao            
     */
    public function setIdPromocao($idPromocao)
    {
        $this->idPromocao = $idPromocao;
    }

    /**
     *
     * @param DateTime $dataReferencia            
     */
    public function setdataReferencia(DateTime $dataReferencia)
    {
        $this->dataReferencia = $dataReferencia;
    }

    /**
     *
     * @param string $cgSusep            
     */
    public function setCgSusep($cgSusep)
    {
        $this->cgSusep = $cgSusep;
    }

    /**
     *
     * @param DateTime $dataVigenciaInicio            
     */
    public function setDataVigenciaInicio(DateTime $dataVigenciaInicio)
    {
        $this->dataVigenciaInicio = $dataVigenciaInicio;
    }

    /**
     *
     * @param DateTime $dataVigenciaFim            
     */
    public function setDataVigenciaFim(DateTime $dataVigenciaFim)
    {
        $this->dataVigenciaFim = $dataVigenciaFim;
    }

    /**
     *
     * @param number $categoria            
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
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
        // Formata datas e separa data da hora
        $dataVigenciaInicio = explode(' ', date_format($this->dataVigenciaInicio, "d/m/Y H:i:s"));
        $dataVigenciaFim = explode(' ', date_format($this->dataVigenciaFim, "d/m/Y H:i:s"));
        ///////////////////////////////////////////////////////////////////////////////////////////
        return [
            'idPromocao' => $this->idPromocao,
            'dataReferencia' => date_format($this->dataReferencia, "d/m/Y"),
            'cgSusep' => $this->cgSusep,
            'dataVigenciaInicio' => $dataVigenciaInicio[0],
            'horaVigenciaInicio' => substr($dataVigenciaInicio[1], 0, 5), //Pega somente, hora e minuto. Ex: 10:30.
            'dataVigenciaFim' => $dataVigenciaFim[0],
            'horaVigenciaFim' => substr($dataVigenciaFim[1], 0, 5), //Pega somente, hora e minuto. Ex: 10:30.
            'status' => $this->status,
            'categoria' => $this->categoria
        ];
    }
}