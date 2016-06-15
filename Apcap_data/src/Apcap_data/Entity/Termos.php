<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Termos
 *
 * @ORM\Table(name="apcap_termos")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\TermosRepository")
 */
class Termos extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idTermo", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTermo;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataInsert", type="datetime", nullable=true)
     */
    private $dataInsert;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataUpdate", type="datetime", nullable=true)
     */
    private $dataUpdate;

    /**
     *
     * @var string @ORM\Column(name="titulo", type="string", length=64, nullable=true)
     */
    private $titulo;

    /**
     *
     * @var string @ORM\Column(name="arquivo", type="string", length=32, nullable=true)
     */
    private $arquivo;

    /**
     *
     * @var string @ORM\Column(name="versao", type="string", length=8, nullable=true)
     */
    private $versao;

    /**
     *
     * @var integer @ORM\Column(name="destinacao", type="integer", nullable=true)
     */
    private $destinacao;

    /**
     *
     * @return the $idTermo
     */
    public function getIdTermo()
    {
        return $this->idTermo;
    }

    /**
     *
     * @return the $dataInsert
     */
    public function getDataInsert()
    {
        return $this->dataInsert;
    }

    /**
     *
     * @return the $dataUpdate
     */
    public function getDataUpdate()
    {
        return $this->dataUpdate;
    }

    /**
     *
     * @return the $titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     *
     * @return the $arquivo
     */
    public function getArquivo()
    {
        return $this->arquivo;
    }

    /**
     *
     * @return the $versao
     */
    public function getVersao()
    {
        return $this->versao;
    }

    /**
     *
     * @return the $destinacao
     */
    public function getDestinacao()
    {
        return $this->destinacao;
    }

    /**
     *
     * @param number $idTermo            
     */
    public function setIdTermo($idTermo)
    {
        $this->idTermo = $idTermo;
    }

    /**
     *
     * @param DateTime $dataInsert            
     */
    public function setDataInsert($dataInsert)
    {
        $this->dataInsert = $dataInsert;
    }

    /**
     *
     * @param DateTime $dataUpdate            
     */
    public function setDataUpdate($dataUpdate)
    {
        $this->dataUpdate = $dataUpdate;
    }

    /**
     *
     * @param string $titulo            
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     *
     * @param string $arquivo            
     */
    public function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;
    }

    /**
     *
     * @param string $versao            
     */
    public function setVersao($versao)
    {
        $this->versao = $versao;
    }

    /**
     *
     * @param number $destinacao            
     */
    public function setDestinacao($destinacao)
    {
        $this->destinacao = $destinacao;
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
            'idTermo' => $this->idTermo,
            'dataInsert' => date_format($this->dataInsert, 'd/m/Y'),
            'dataUpdate' => date_format($this->dataUpdate, 'd/m/Y'),
            'titulo' => $this->titulo,
            'arquivo' => $this->arquivo,
            'versao' => $this->versao,
            'destinacao' => $this->destinacao
        ];
    }
}

