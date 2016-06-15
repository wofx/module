<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * DadosCpf
 *
 * @ORM\Table(name="ad_dadosCPF")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\DadosCpfRepository")
 */
class DadosCpf extends SuperEntity
{ 

    /**
     *
     * @var integer @ORM\Column(name="idDadosCPF", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idDadosCPF;

    /**
     *
     * @var string @ORM\Column(name="cpf", type="string", length=16, nullable=false)
     */
    private $cpf;

    /**
     *
     * @var string @ORM\Column(name="nome", type="string", length=64, nullable=false)
     */
    private $nome;

    /**
     *
     * @var string @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataNascimento", type="date", nullable=true)
     */
    private $dataNascimento;

    /**
     *
     * @var string @ORM\Column(name="tipoLogradouro", type="string", length=1, nullable=true)
     */
    private $tipoLogradouro;

    /**
     *
     * @var string @ORM\Column(name="logradouro", type="string", length=64, nullable=true)
     */
    private $logradouro;

    /**
     *
     * @var string @ORM\Column(name="numero", type="string", length=4, nullable=true)
     */
    private $numero;

    /**
     *
     * @var string @ORM\Column(name="complemento", type="string", length=64, nullable=true)
     */
    private $complemento;

    /**
     *
     * @var string @ORM\Column(name="bairro", type="string", length=64, nullable=true)
     */
    private $bairro;

    /**
     *
     * @var string @ORM\Column(name="cep", type="string", length=16, nullable=true)
     */
    private $cep;

    /**
     *
     * @var string @ORM\Column(name="municipio", type="string", length=64, nullable=true)
     */
    private $municipio;

    /**
     *
     * @var string @ORM\Column(name="uf", type="string", length=2, nullable=true)
     */
    private $uf;

    /**
     *
     * @var string @ORM\Column(name="ddd1", type="string", length=2, nullable=true)
     */
    private $ddd1;

    /**
     *
     * @var string @ORM\Column(name="numero1", type="string", length=16, nullable=true)
     */
    private $numero1;

    /**
     *
     * @var string @ORM\Column(name="ddd2", type="string", length=2, nullable=true)
     */
    private $ddd2;

    /**
     *
     * @var string @ORM\Column(name="numero2", type="string", length=16, nullable=true)
     */
    private $numero2;

    /**
     *
     * @var string @ORM\Column(name="ddd3", type="string", length=2, nullable=true)
     */
    private $ddd3;

    /**
     *
     * @var string @ORM\Column(name="numero3", type="string", length=16, nullable=true)
     */
    private $numero3;

    /**
     *
     * @var string @ORM\Column(name="ddd4", type="string", length=2, nullable=true)
     */
    private $ddd4;

    /**
     *
     * @var string @ORM\Column(name="numero4", type="string", length=16, nullable=true)
     */
    private $numero4;

    /**
     *
     * @var string @ORM\Column(name="ddd5", type="string", length=2, nullable=true)
     */
    private $ddd5;

    /**
     *
     * @var string @ORM\Column(name="numero5", type="string", length=16, nullable=true)
     */
    private $numero5;

    /**
     *
     * @var string @ORM\Column(name="dddCelular1", type="string", length=2, nullable=true)
     */
    private $dddCelular1;

    /**
     *
     * @var string @ORM\Column(name="celular1", type="string", length=16, nullable=true)
     */
    private $celular1;

    /**
     *
     * @var string @ORM\Column(name="dddCelular2", type="string", length=2, nullable=true)
     */
    private $dddCelular2;

    /**
     *
     * @var string @ORM\Column(name="celular2", type="string", length=16, nullable=true)
     */
    private $celular2;

    /**
     *
     * @var string @ORM\Column(name="dddCelular3", type="string", length=2, nullable=true)
     */
    private $dddCelular3;

    /**
     *
     * @var string @ORM\Column(name="celular3", type="string", length=16, nullable=true)
     */
    private $celular3;

    /**
     *
     * @var string @ORM\Column(name="dddCelular4", type="string", length=2, nullable=true)
     */
    private $dddCelular4;

    /**
     *
     * @var string @ORM\Column(name="celular4", type="string", length=16, nullable=true)
     */
    private $celular4;

    /**
     *
     * @var string @ORM\Column(name="dddCelular5", type="string", length=2, nullable=true)
     */
    private $dddCelular5;

    /**
     *
     * @var string @ORM\Column(name="celular5", type="string", length=16, nullable=true)
     */
    private $celular5;
    /**
     * @return the $idDadosCPF
     */
    public function getIdDadosCPF()
    {
        return $this->idDadosCPF;
    }

    /**
     * @return the $cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @return the $nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return the $sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @return the $dataNascimento
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * @return the $tipoLogradouro
     */
    public function getTipoLogradouro()
    {
        return $this->tipoLogradouro;
    }

    /**
     * @return the $logradouro
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @return the $numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @return the $complemento
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @return the $bairro
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @return the $cep
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @return the $municipio
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @return the $uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @return the $ddd1
     */
    public function getDdd1()
    {
        return $this->ddd1;
    }

    /**
     * @return the $numero1
     */
    public function getNumero1()
    {
        return $this->numero1;
    }

    /**
     * @return the $ddd2
     */
    public function getDdd2()
    {
        return $this->ddd2;
    }

    /**
     * @return the $numero2
     */
    public function getNumero2()
    {
        return $this->numero2;
    }

    /**
     * @return the $ddd3
     */
    public function getDdd3()
    {
        return $this->ddd3;
    }

    /**
     * @return the $numero3
     */
    public function getNumero3()
    {
        return $this->numero3;
    }

    /**
     * @return the $ddd4
     */
    public function getDdd4()
    {
        return $this->ddd4;
    }

    /**
     * @return the $numero4
     */
    public function getNumero4()
    {
        return $this->numero4;
    }

    /**
     * @return the $ddd5
     */
    public function getDdd5()
    {
        return $this->ddd5;
    }

    /**
     * @return the $numero5
     */
    public function getNumero5()
    {
        return $this->numero5;
    }

    /**
     * @return the $dddCelular1
     */
    public function getDddCelular1()
    {
        return $this->dddCelular1;
    }

    /**
     * @return the $celular1
     */
    public function getCelular1()
    {
        return $this->celular1;
    }

    /**
     * @return the $dddCelular2
     */
    public function getDddCelular2()
    {
        return $this->dddCelular2;
    }

    /**
     * @return the $celular2
     */
    public function getCelular2()
    {
        return $this->celular2;
    }

    /**
     * @return the $dddCelular3
     */
    public function getDddCelular3()
    {
        return $this->dddCelular3;
    }

    /**
     * @return the $celular3
     */
    public function getCelular3()
    {
        return $this->celular3;
    }

    /**
     * @return the $dddCelular4
     */
    public function getDddCelular4()
    {
        return $this->dddCelular4;
    }

    /**
     * @return the $celular4
     */
    public function getCelular4()
    {
        return $this->celular4;
    }

    /**
     * @return the $dddCelular5
     */
    public function getDddCelular5()
    {
        return $this->dddCelular5;
    }

    /**
     * @return the $celular5
     */
    public function getCelular5()
    {
        return $this->celular5;
    }

    /**
     * @param number $idDadosCPF
     */
    public function setIdDadosCPF($idDadosCPF)
    {
        $this->idDadosCPF = $idDadosCPF;
    }

    /**
     * @param string $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @param DateTime $dataNascimento
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * @param string $tipoLogradouro
     */
    public function setTipoLogradouro($tipoLogradouro)
    {
        $this->tipoLogradouro = $tipoLogradouro;
    }

    /**
     * @param string $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    /**
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @param string $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @param string $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @param string $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @param string $municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     * @param string $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @param string $ddd1
     */
    public function setDdd1($ddd1)
    {
        $this->ddd1 = $ddd1;
    }

    /**
     * @param string $numero1
     */
    public function setNumero1($numero1)
    {
        $this->numero1 = $numero1;
    }

    /**
     * @param string $ddd2
     */
    public function setDdd2($ddd2)
    {
        $this->ddd2 = $ddd2;
    }

    /**
     * @param string $numero2
     */
    public function setNumero2($numero2)
    {
        $this->numero2 = $numero2;
    }

    /**
     * @param string $ddd3
     */
    public function setDdd3($ddd3)
    {
        $this->ddd3 = $ddd3;
    }

    /**
     * @param string $numero3
     */
    public function setNumero3($numero3)
    {
        $this->numero3 = $numero3;
    }

    /**
     * @param string $ddd4
     */
    public function setDdd4($ddd4)
    {
        $this->ddd4 = $ddd4;
    }

    /**
     * @param string $numero4
     */
    public function setNumero4($numero4)
    {
        $this->numero4 = $numero4;
    }

    /**
     * @param string $ddd5
     */
    public function setDdd5($ddd5)
    {
        $this->ddd5 = $ddd5;
    }

    /**
     * @param string $numero5
     */
    public function setNumero5($numero5)
    {
        $this->numero5 = $numero5;
    }

    /**
     * @param string $dddCelular1
     */
    public function setDddCelular1($dddCelular1)
    {
        $this->dddCelular1 = $dddCelular1;
    }

    /**
     * @param string $celular1
     */
    public function setCelular1($celular1)
    {
        $this->celular1 = $celular1;
    }

    /**
     * @param string $dddCelular2
     */
    public function setDddCelular2($dddCelular2)
    {
        $this->dddCelular2 = $dddCelular2;
    }

    /**
     * @param string $celular2
     */
    public function setCelular2($celular2)
    {
        $this->celular2 = $celular2;
    }

    /**
     * @param string $dddCelular3
     */
    public function setDddCelular3($dddCelular3)
    {
        $this->dddCelular3 = $dddCelular3;
    }

    /**
     * @param string $celular3
     */
    public function setCelular3($celular3)
    {
        $this->celular3 = $celular3;
    }

    /**
     * @param string $dddCelular4
     */
    public function setDddCelular4($dddCelular4)
    {
        $this->dddCelular4 = $dddCelular4;
    }

    /**
     * @param string $celular4
     */
    public function setCelular4($celular4)
    {
        $this->celular4 = $celular4;
    }

    /**
     * @param string $dddCelular5
     */
    public function setDddCelular5($dddCelular5)
    {
        $this->dddCelular5 = $dddCelular5;
    }

    /**
     * @param string $celular5
     */
    public function setCelular5($celular5)
    {
        $this->celular5 = $celular5;
    }
    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idDadosCPF'=>$this->idDadosCPF,
            'cpf'=>$this->cpf,
            'nome'=>$this->nome,
            'sexo'=>$this->sexo,
            'dataNascimento'=>$this->dataNascimento,
            'tipoLogradouro'=>$this->tipoLogradouro,
            'logradouro'=>$this->logradouro,
            'numero'=>$this->numero,
            'complemento'=>$this->complemento,
            'bairro'=>$this->bairro,
            'cep'=>$this->cep,
            'municipio'=>$this->municipio,
            'uf'=>$this->uf,
            'ddd1'=>$this->ddd1,
            'numero1'=>$this->numero1,
            'ddd2'=>$this->ddd2,
            'numero2'=>$this->numero2,
            'ddd3'=>$this->ddd3,
            'numero3'=>$this->numero3,
            'ddd4'=>$this->ddd4,
            'numero4'=>$this->numero4,
            'ddd5'=>$this->ddd5,
            'numero5'=>$this->numero5,
            'dddCelular1'=>$this->dddCelular1,
            'celular1'=>$this->celular1,
            'dddCelular2'=>$this->dddCelular2,
            'celular2'=>$this->celular2,
            'dddCelular3'=>$this->dddCelular3,
            'celular3'=>$this->celular3,
            'dddCelular4'=>$this->dddCelular4,
            'celular4'=>$this->celular4,
            'dddCelular5'=>$this->dddCelular5,
            'celular5'=>$this->celular5,                                                                             
               ];
        
    }


}

