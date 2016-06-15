<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * IadmDistribuicaodistribuido
 *
 * @ORM\Table(name="iadm_distribuicaodistribuido")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\IadmDistribuicaoDistribuidoRepository")

 */
class IadmDistribuicaodistribuido extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idDistribuicaoDistribuido", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idDistribuicaoDistribuido;

    /**
     *
     * @var integer @ORM\Column(name="idDistribuicao", type="integer", nullable=false)
     */
    private $idDistribuicao;

    /**
     *
     * @var integer @ORM\Column(name="idPraca", type="integer", nullable=true)
     */
    private $idPraca;

    /**
     *
     * @var integer @ORM\Column(name="idDistribuidor", type="integer", nullable=true)
     */
    private $idDistribuidor;

    /**
     *
     * @var integer @ORM\Column(name="idSerie", type="integer", nullable=true)
     */
    private $idSerie;

    /**
     *
     * @var integer @ORM\Column(name="idSorteio", type="integer", nullable=false)
     */
    private $idSorteio;

    /**
     *
     * @var integer @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     *
     * @var string @ORM\Column(name="inicio", type="string", length=32, nullable=false)
     */
    private $inicio = '0';

    /**
     *
     * @var string @ORM\Column(name="termino", type="string", length=32, nullable=false)
     */
    private $termino = '0';

    /**
     *
     * @var string @ORM\Column(name="quantidade", type="string", length=32, nullable=false)
     */
    private $quantidade;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     *
     * @var integer @ORM\Column(name="datahoraInsert", type="integer", nullable=true)
     */
    private $datahoraInsert;
    /**
     * @return the $idDistribuicaoDistribuido
     */
    public function getIdDistribuicaoDistribuido()
    {
        return $this->idDistribuicaoDistribuido;
    }

    /**
     * @return the $idDistribuicao
     */
    public function getIdDistribuicao()
    {
        return $this->idDistribuicao;
    }

    /**
     * @return the $idPraca
     */
    public function getIdPraca()
    {
        return $this->idPraca;
    }

    /**
     * @return the $idDistribuidor
     */
    public function getIdDistribuidor()
    {
        return $this->idDistribuidor;
    }

    /**
     * @return the $idSerie
     */
    public function getIdSerie()
    {
        return $this->idSerie;
    }

    /**
     * @return the $idSorteio
     */
    public function getIdSorteio()
    {
        return $this->idSorteio;
    }

    /**
     * @return the $tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @return the $inicio
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * @return the $termino
     */
    public function getTermino()
    {
        return $this->termino;
    }

    /**
     * @return the $quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return the $datahoraInsert
     */
    public function getDatahoraInsert()
    {
        return $this->datahoraInsert;
    }

    /**
     * @param number $idDistribuicaoDistribuido
     */
    public function setIdDistribuicaoDistribuido($idDistribuicaoDistribuido)
    {
        $this->idDistribuicaoDistribuido = $idDistribuicaoDistribuido;
    }

    /**
     * @param number $idDistribuicao
     */
    public function setIdDistribuicao($idDistribuicao)
    {
        $this->idDistribuicao = $idDistribuicao;
    }

    /**
     * @param number $idPraca
     */
    public function setIdPraca($idPraca)
    {
        $this->idPraca = $idPraca;
    }

    /**
     * @param number $idDistribuidor
     */
    public function setIdDistribuidor($idDistribuidor)
    {
        $this->idDistribuidor = $idDistribuidor;
    }

    /**
     * @param number $idSerie
     */
    public function setIdSerie($idSerie)
    {
        $this->idSerie = $idSerie;
    }

    /**
     * @param number $idSorteio
     */
    public function setIdSorteio($idSorteio)
    {
        $this->idSorteio = $idSorteio;
    }

    /**
     * @param number $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @param string $inicio
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;
    }

    /**
     * @param string $termino
     */
    public function setTermino($termino)
    {
        $this->termino = $termino;
    }

    /**
     * @param string $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @param number $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param number $datahoraInsert
     */
    public function setDatahoraInsert($datahoraInsert)
    {
        $this->datahoraInsert = $datahoraInsert;
    }

    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idDistribuicaoDistribuido'=>$this->idDistribuicaoDistribuido,
            'idDistribuicao'=>$this->idDistribuicao,
            'idPraca'=>$this->idPraca,
            'idDistribuidor'=>$this->idDistribuidor,
            'idSerie'=>$this->idSerie,
            'idSorteio'=>$this->idSorteio,
            'tipo'=>$this->tipo,
            'inicio'=>$this->inicio,
            'termino'=>$this->termino,
            'quantidade'=>$this->quantidade,
            'status'=>$this->status,
            'datahoraInsert'=>date_format($this->datahoraInsert, 'd/m/Y'),           
               ];
        
    }

}

