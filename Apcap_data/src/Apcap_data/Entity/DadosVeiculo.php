<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;
use \DateTime;

/**
 * DadosVeiculo
 *
 * @ORM\Table(name="iDist_Informacao_Veiculo")
 * @ORM\Entity(repositoryClass="Apcap\Repositories\DadosVeiculoRepository")
 */
class DadosVeiculo extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idInformacaoVeiculo", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idInformacaoVeiculo;
   
    /**
     *
     * @var integer @ORM\Column(name="idPessoa", type="integer", nullable=false)
     */
    private $idPessoa;
   
    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;
   
    /**
     *
     * @var string @ORM\Column(name="marca", type="string", length=50, nullable=true)
     */
    private $marca;
   
    /**
     *
     * @var string @ORM\Column(name="modelo", type="string", length=50, nullable=true)
     */
    private $modelo;
   
    /**
     *
     * @var integer @ORM\Column(name="ano", type="integer", nullable=true)
     */
    private $ano;
   
    /**
     *
     * @var string @ORM\Column(name="placa", type="string", length=7, nullable=true)
     */
    private $placa;
   
    /**
     *
     * @var integer @ORM\Column(name="cnh", type="integer", nullable=true)
     */
    private $cnh;
   
    /**
     *
     * @var \DateTime @ORM\Column(name="DataInsert", type="date", nullable=true)
     */
    private $DataInsert;
   
    /**
     *
     * @var \DateTime @ORM\Column(name="DataUpdate", type="date", nullable=true)
     */
    private $DataUpdate;

    /**
     *
     * @return the $idInformacaoVeiculo
     */
    public function getIdInformacaoVeiculo()
    {
        return $this->idInformacaoVeiculo;
    }

    /**
     *
     * @return the $idPessoa
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
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
     * @return the $marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     *
     * @return the $modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     *
     * @return the $ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     *
     * @return the $placa
     */
    public function getPlaca()
    {
        return $this->placa;
    }
   
    /**
     *
     * @return the $cnh
     */
    public function getCnh()
    {
        return $this->cnh;
    }

    /**
     *
     * @param number $idInformacaoVeiculo           
     */
    public function setIdInformacaoVeiculo($idInformacaoVeiculo)
    {
        $this->idInformacaoVeiculo = $idInformacaoVeiculo;
    }

    /**
     *
     * @param number $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
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
     * @param string $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
   
    /**
     *
     * @param string $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
   
    /**
     *
     * @param string $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
   
    /**
     *
     * @param string $placa
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }
   
    /**
     *
     * @param number $cnh
     */
    public function setCnh($cnh)
    {
        $this->cnh = $cnh;
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
            'idInformacaoVeiculo' => "1",
            'idPessoa' => "37",
            'status' => "1",
            'marca' => "Honda",
            'modelo' => "CG125",
            'ano' => "2015",
            'placa' => "TYU",
            'cnh' => "2345"
        ];
    }
}