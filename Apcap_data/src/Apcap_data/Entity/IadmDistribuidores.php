<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * IadmDistribuidores
 *
 * @ORM\Table(name="iadm_distribuidores", indexes={@ORM\Index(name="idComissao_fk_distribuidores_idx", columns={"idComissao"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\IadmdistribuidoresRepository")

 */
class IadmDistribuidores extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idDistribuidor", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idDistribuidor;

    /**
     *
     * @var string @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     *
     * @var string @ORM\Column(name="regiao", type="string", length=60, nullable=false)
     */
    private $regiao;

    /**
     *
     * @var string @ORM\Column(name="apelido", type="string", length=50, nullable=false)
     */
    private $apelido;

    /**
     *
     * @var integer @ORM\Column(name="pessoaFisicaJuridica", type="integer", nullable=false)
     */
    private $pessoaFisicaJuridica;

    /**
     *
     * @var string @ORM\Column(name="cpfCnpj", type="string", length=30, nullable=false)
     */
    private $cpfCnpj;

    /**
     *
     * @var string @ORM\Column(name="endereco", type="string", length=100, nullable=false)
     */
    private $endereco;

    /**
     *
     * @var string @ORM\Column(name="bairro", type="string", length=150, nullable=false)
     */
    private $bairro;

    /**
     *
     * @var string @ORM\Column(name="cidade", type="string", length=60, nullable=false)
     */
    private $cidade;

    /**
     *
     * @var string @ORM\Column(name="estado", type="string", length=60, nullable=false)
     */
    private $estado;

    /**
     *
     * @var string @ORM\Column(name="cep", type="string", length=9, nullable=false)
     */
    private $cep;

    /**
     *
     * @var string @ORM\Column(name="telefone", type="string", length=30, nullable=false)
     */
    private $telefone;

    /**
     *
     * @var string @ORM\Column(name="celular", type="string", length=30, nullable=false)
     */
    private $celular;

    /**
     *
     * @var integer @ORM\Column(name="comissao", type="integer", nullable=false)
     */
    private $comissao;

    /**
     *
     * @var integer @ORM\Column(name="distribuicaoPadrao", type="integer", nullable=true)
     */
    private $distribuicaoPadrao;

    /**
     *
     * @var boolean @ORM\Column(name="onOff", type="boolean", nullable=true)
     */
    private $onOff = '0';

    /**
     *
     * @var string @ORM\Column(name="senha", type="string", length=32, nullable=true)
     */
    private $senha;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

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
     * @var \ApcapIadmComissao @ORM\ManyToOne(targetEntity="ApcapIadmComissao")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="idComissao", referencedColumnName="idComissao")
     *      })
     */
    private $idComissao;
    /**
     * @return the $idDistribuidor
     */
    public function getIdDistribuidor()
    {
        return $this->idDistribuidor;
    }

    /**
     * @return the $nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return the $regiao
     */
    public function getRegiao()
    {
        return $this->regiao;
    }

    /**
     * @return the $apelido
     */
    public function getApelido()
    {
        return $this->apelido;
    }

    /**
     * @return the $pessoaFisicaJuridica
     */
    public function getPessoaFisicaJuridica()
    {
        return $this->pessoaFisicaJuridica;
    }

    /**
     * @return the $cpfCnpj
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * @return the $endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @return the $bairro
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @return the $cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @return the $estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @return the $cep
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @return the $telefone
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @return the $celular
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @return the $comissao
     */
    public function getComissao()
    {
        return $this->comissao;
    }

    /**
     * @return the $distribuicaoPadrao
     */
    public function getDistribuicaoPadrao()
    {
        return $this->distribuicaoPadrao;
    }

    /**
     * @return the $onOff
     */
    public function getOnOff()
    {
        return $this->onOff;
    }

    /**
     * @return the $senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return the $dataInsert
     */
    public function getDataInsert()
    {
        return $this->dataInsert;
    }

    /**
     * @return the $dataUpdate
     */
    public function getDataUpdate()
    {
        return $this->dataUpdate;
    }

    /**
     * @return the $idComissao
     */
    public function getIdComissao()
    {
        return $this->idComissao;
    }

    /**
     * @param number $idDistribuidor
     */
    public function setIdDistribuidor($idDistribuidor)
    {
        $this->idDistribuidor = $idDistribuidor;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param string $regiao
     */
    public function setRegiao($regiao)
    {
        $this->regiao = $regiao;
    }

    /**
     * @param string $apelido
     */
    public function setApelido($apelido)
    {
        $this->apelido = $apelido;
    }

    /**
     * @param number $pessoaFisicaJuridica
     */
    public function setPessoaFisicaJuridica($pessoaFisicaJuridica)
    {
        $this->pessoaFisicaJuridica = $pessoaFisicaJuridica;
    }

    /**
     * @param string $cpfCnpj
     */
    public function setCpfCnpj($cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;
    }

    /**
     * @param string $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @param string $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @param string $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @param string $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @param string $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @param string $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @param string $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * @param number $comissao
     */
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;
    }

    /**
     * @param number $distribuicaoPadrao
     */
    public function setDistribuicaoPadrao($distribuicaoPadrao)
    {
        $this->distribuicaoPadrao = $distribuicaoPadrao;
    }

    /**
     * @param boolean $onOff
     */
    public function setOnOff($onOff)
    {
        $this->onOff = $onOff;
    }

    /**
     * @param string $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @param number $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param DateTime $dataInsert
     */
    public function setDataInsert($dataInsert)
    {
        $this->dataInsert = $dataInsert;
    }

    /**
     * @param DateTime $dataUpdate
     */
    public function setDataUpdate($dataUpdate)
    {
        $this->dataUpdate = $dataUpdate;
    }

    /**
     * @param ApcapIadmComissao $idComissao
     */
    public function setIdComissao($idComissao)
    {
        $this->idComissao = $idComissao;
    }

    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idDistribuidor'=>$this->idDistribuidor,
            'nome'=>$this->nome,
            'regiao'=>$this->regiao,
            'apelido'=>$this->apelido,
            'pessoaFisicaJuridica'=>$this->pessoaFisicaJuridica,
            'cpfCnpj'=>$this->cpfCnpj,
            'endereco'=>$this->endereco,
            'bairro'=>$this->bairro,
            'cidade'=>$this->cidade,
            'estado'=>$this->estado,
            'cep'=>$this->cep,
            'telefone'=>$this->telefone,
            'celular'=>$this->celular,
            'comissao'=>$this->comissao,
            'distribuicaoPadrao'=>$this->distribuicaoPadrao,
            'onOff'=>$this->onOff,
            'senha'=>$this->senha,
            'status'=>$this->status,
            'DataInsert'=>date_format($this->dataInsert, 'd/m/Y'),
            'dataUpdate'=>date_format($this->dataUpdate, 'd/m/Y'),
            'idComissao'=>$this->idComissao,                      
               ];
        
    }

}

