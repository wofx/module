<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Pessoas
 *
 * @ORM\Table(name="apcap_pessoas", indexes={@ORM\Index(name="idTipoPessoa_fk_tipoPessoa_idx", columns={"idTipoPessoa"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\PessoaRepository")
 */
class Pessoas extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idCliente", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCliente;

    /**
     *
     * @var string @ORM\Column(name="nomeCompleto", type="string", length=128, nullable=false)
     */
    private $nomeCompleto;

    /**
     *
     * @var string @ORM\Column(name="cpf", type="string", length=16, nullable=false)
     */
    private $cpf;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataNascimento", type="date", nullable=true)
     */
    private $dataNascimento;

    /**
     *
     * @var string @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     *
     * @var string @ORM\Column(name="email", type="string", length=128, nullable=false)
     */
    private $email;

    /**
     *
     * @var string @ORM\Column(name="ddd", type="string", length=2, nullable=true)
     */
    private $ddd;

    /**
     *
     * @var string @ORM\Column(name="celular", type="string", length=16, nullable=true)
     */
    private $celular;

    /**
     *
     * @var string @ORM\Column(name="logradouro", type="string", length=128, nullable=true)
     */
    private $logradouro;

    /**
     *
     * @var string @ORM\Column(name="numero", type="string", length=8, nullable=true)
     */
    private $numero;

    /**
     *
     * @var string @ORM\Column(name="complemento", type="string", length=128, nullable=true)
     */
    private $complemento;

    /**
     *
     * @var string @ORM\Column(name="bairro", type="string", length=64, nullable=true)
     */
    private $bairro;

    /**
     *
     * @var string @ORM\Column(name="cidade", type="string", length=64, nullable=true)
     */
    private $cidade;

    /**
     *
     * @var string @ORM\Column(name="estado", type="string", length=2, nullable=true)
     */
    private $estado;

    /**
     *
     * @var string @ORM\Column(name="cep", type="string", length=16, nullable=true)
     */
    private $cep;

    /**
     *
     * @var string @ORM\Column(name="senha", type="string", length=128, nullable=false)
     */
    private $senha;

    /**
     *
     * @var string @ORM\Column(name="beneficiario", type="string", length=256, nullable=true)
     */
    private $beneficiario;

    /**
     *
     * @var string @ORM\Column(name="enderecoContato", type="text", length=65535, nullable=true)
     */
    private $enderecoContato;

    /**
     *
     * @var integer @ORM\Column(name="contatoViaCadastro", type="integer", nullable=true)
     */
    private $contatoViaCadastroo;

    /**
     *
     * @var \DateTime @ORM\Column(name="datahoraCadastro", type="datetime", nullable=true)
     */
    private $datahoraCadastro;

    /**
     *
     * @var string @ORM\Column(name="tokenApp", type="string", length=256, nullable=true)
     */
    private $tokenApp;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     *
     * @var integer @ORM\Column(name="idTipoPessoa", type="integer", nullable=true)
     */
    private $idTipoPessoa;

    /**
     *
     * @return the $idCliente
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     *
     * @return the $nomeCompleto
     */
    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    /**
     *
     * @return the $cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     *
     * @return the $dataNascimento
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     *
     * @return the $sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     *
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     *
     * @return the $ddd
     */
    public function getDdd()
    {
        return $this->ddd;
    }

    /**
     *
     * @return the $celular
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     *
     * @return the $logradouro
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     *
     * @return the $numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     *
     * @return the $complemento
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     *
     * @return the $bairro
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     *
     * @return the $cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     *
     * @return the $estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     *
     * @return the $cep
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     *
     * @return the $senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     *
     * @return the $beneficiario
     */
    public function getBeneficiario()
    {
        return $this->beneficiario;
    }

    /**
     *
     * @return the $enderecoContato
     */
    public function getEnderecoContato()
    {
        return $this->enderecoContato;
    }

    /**
     *
     * @return the $contatoViaCadastroo
     */
    public function getContatoViaCadastroo()
    {
        return $this->contatoViaCadastroo;
    }

    /**
     *
     * @return the $datahoraCadastro
     */
    public function getDatahoraCadastro()
    {
        return $this->datahoraCadastro;
    }

    /**
     *
     * @return the $tokenApp
     */
    public function getTokenApp()
    {
        return $this->tokenApp;
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
     * @return the $idTipoPessoa
     */
    public function getIdTipoPessoa()
    {
        return $this->idTipoPessoa;
    }

    /**
     *
     * @param number $idCliente            
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    /**
     *
     * @param string $nomeCompleto            
     */
    public function setNomeCompleto($nomeCompleto)
    {
        $this->nomeCompleto = $nomeCompleto;
    }

    /**
     *
     * @param string $cpf            
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     *
     * @param DateTime $dataNascimento            
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     *
     * @param string $sexo            
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     *
     * @param string $email            
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     *
     * @param string $ddd            
     */
    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
    }

    /**
     *
     * @param string $celular            
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     *
     * @param string $logradouro            
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    /**
     *
     * @param string $numero            
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     *
     * @param string $complemento            
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     *
     * @param string $bairro            
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     *
     * @param string $cidade            
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     *
     * @param string $estado            
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     *
     * @param string $cep            
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     *
     * @param string $senha            
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     *
     * @param string $beneficiario            
     */
    public function setBeneficiario($beneficiario)
    {
        $this->beneficiario = $beneficiario;
    }

    /**
     *
     * @param string $enderecoContato            
     */
    public function setEnderecoContato($enderecoContato)
    {
        $this->enderecoContato = $enderecoContato;
    }

    /**
     *
     * @param number $contatoViaCadastroo            
     */
    public function setContatoViaCadastroo($contatoViaCadastroo)
    {
        $this->contatoViaCadastroo = $contatoViaCadastroo;
    }

    /**
     *
     * @param DateTime $datahoraCadastro            
     */
    public function setDatahoraCadastro($datahoraCadastro)
    {
        $this->datahoraCadastro = $datahoraCadastro;
    }

    /**
     *
     * @param string $tokenApp            
     */
    public function setTokenApp($tokenApp)
    {
        $this->tokenApp = $tokenApp;
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
     * @param number $idTipoPessoa            
     */
    public function setIdTipoPessoa($idTipoPessoa)
    {
        $this->idTipoPessoa = $idTipoPessoa;
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
            'idCliente' => $this->idCliente,
            'nomeCompleto' => $this->nomeCompleto,
            'cpf' => $this->cpf,
            'dataNascimento' => date_format($this->dataNascimento, 'd/m/Y'),
            'sexo' => $this->sexo,
            'email' => $this->email,
            'ddd' => $this->ddd,
            'celular' => $this->celular,
            'logradouro' => $this->logradouro,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'cep' => $this->cep,
            'senha' => $this->senha,
            'beneficiario' => $this->beneficiario,
            'enderecoContato' => $this->enderecoContato,
            'contatoViaCadastroo' => $this->contatoViaCadastroo,
            'datahoraCadastro' => date_format($this->datahoraCadastro, 'd/m/Y'),
            'tokenApp' => $this->tokenApp,
            'status' => $this->status,
            'idTipoPessoa' => $this->idTipoPessoa
        ];
    }
}

