<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Mensagens
 *
 * @ORM\Table(name="apcap_mensagens")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\MensagensRepository")
 */
    class Mensagens extends SuperEntity
    {

    /**
     *
     * @var integer @ORM\Column(name="idMensagem", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idMensagem;

    /**
     *
     * @var string @ORM\Column(name="titulo", type="string", length=128, nullable=true)
     */
    private $titulo;

    /**
     *
     * @var string @ORM\Column(name="texto", type="text", length=65535, nullable=true)
     */
    private $texto;

    /**
     *
     * @var \DateTime @ORM\Column(name="datahora", type="datetime", nullable=false)
     */
    private $dataHora;

    /**
     *
     * @var string @ORM\Column(name="urlImagem", type="string", length=32, nullable=true)
     */
    private $urlImagem;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;
    /**
     * @return the $idMensagem
     */
    public function getIdMensagem()
    {
        return $this->idMensagem;
    }

    /**
     * @return the $titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @return the $texto
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * @return the $dataHora
     */
    public function getDataHora()
    {
        return $this->dataHora;
    }

    /**
     * @return the $urlImagem
     */
    public function getUrlImagem()
    {
        return $this->urlImagem;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param number $idMensagem
     */
    public function setIdMensagem($idMensagem)
    {
        $this->idMensagem = $idMensagem;
    }

    /**
     * @param string $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @param string $texto
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    /**
     * @param DateTime $dataHora
     */
    public function setDataHora($dataHora)
    {
        $this->dataHora = $dataHora;
    }

    /**
     * @param string $urlImagem
     */
    public function setUrlImagem($urlImagem)
    {
        $this->urlImagem = $urlImagem;
    }

    /**
     * @param number $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
        
        /**
         * {@inheritDoc}
         * @see JsonSerializable::jsonSerialize()
         */       
    }
        public function jsonSerialize()
        {         
            // TODO Auto-generated method stub
            return [
                'idMensagem'=>$this->idMensagem,
                'titulo'=>$this->titulo,
                'texto'=>$this->texto,
                'dataHora'=>date_format($this->dataHora, 'd/m/Y'),
                'urlImagem'=>$this->urlImagem,
                'status'=>$this->status,
                   ];
        
        }
    


}

