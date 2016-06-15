<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * WcTermosECondicoes
 *
 * @ORM\Table(name="wc_termosECondicoes")
 * @ORM\Entity(repositoryClass="Apcap\Repositories\WcTermosECondicoesRepository")
 */
class WcTermosECondicoes extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idTermosECondicoes", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTermosECondicoes;

    /**
     *
     * @var integer @ORM\Column(name="idPraca", type="integer", nullable=false)
     */
    private $idPraca;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataAplicacao", type="date", nullable=false)
     */
    private $dataAplicacao;

    /**
     *
     * @var string @ORM\Column(name="nome", type="string", length=64, nullable=false)
     */
    private $nome;

    /**
     *
     * @var string @ORM\Column(name="arquivo", type="string", length=32, nullable=false)
     */
    private $arquivo;

    /**
     *
     * @return the $idTermosECondicoes
     */
    public function getIdTermosECondicoes()
    {
        return $this->idTermosECondicoes;
    }

    /**
     *
     * @return the $idPraca
     */
    public function getIdPraca()
    {
        return $this->idPraca;
    }

    /**
     *
     * @return the $dataAplicacao
     */
    public function getDataAplicacao()
    {
        return $this->dataAplicacao;
    }

    /**
     *
     * @return the $nome
     */
    public function getNome()
    {
        return $this->nome;
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
     * @param number $idTermosECondicoes            
     */
    public function setIdTermosECondicoes($idTermosECondicoes)
    {
        $this->idTermosECondicoes = $idTermosECondicoes;
    }

    /**
     *
     * @param number $idPraca            
     */
    public function setIdPraca($idPraca)
    {
        $this->idPraca = $idPraca;
    }

    /**
     *
     * @param DateTime $dataAplicacao            
     */
    public function setDataAplicacao($dataAplicacao)
    {
        $this->dataAplicacao = $dataAplicacao;
    }

    /**
     *
     * @param string $nome            
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
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
     * {@inheritdoc}
     *
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idTermosECondicoes' => $this->idTermosECondicoes,
            'idPraca' => $this->idPraca,
            'dataAplicacao' => date_format($this->dataAplicacao, "d/m/Y"),
            'nome' => $this->nome,
            'arquivo' => $this->arquivo
        ];
    }
}

