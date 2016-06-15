<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * Validados
 *
 * @ORM\Table(name="apcap_validados", indexes={@ORM\Index(name="id_titula_fk_validacao_idx", columns={"idTitulo"}), @ORM\Index(name="id_pessoa_fk_validacao_idx", columns={"idPessoaUsuario"}), @ORM\Index(name="id_titular_fk_validacao_idx", columns={"idPessoaTitular"}), @ORM\Index(name="id_cartao_proposta_fk_validacao_idx", columns={"idCartao"}), @ORM\Index(name="id_bilhete_fk_validacao_idx", columns={"idBilhete"}), @ORM\Index(name="idPromocao_fk_validados_idx", columns={"idPromocao"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\ValidadosRepository")
 */
class Validados extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idValidacao", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idValidacao;

    /**
     *
     * @var integer @ORM\Column(name="idTitulo", type="integer", nullable=true)
     */
    private $titulo;

    /**
     *
     * @var integer @ORM\Column(name="idPessoaUsuario", type="integer", nullable=true)
     */
    private $pessoaUsuario;

    /**
     *
     * @var integer @ORM\Column(name="idPessoaTitular", type="integer", nullable=true)
     */
    private $pessoaTitular;

    /**
     *
     * @var integer @ORM\Column(name="idCartao", type="integer", nullable=true)
     */
    private $cartao;

    /**
     *
     * @var integer @ORM\Column(name="idBilhete", type="integer", nullable=true)
     */
    private $bilhete;

    /**
     *
     * @var integer @ORM\Column(name="idPromocao", type="integer", nullable=true)
     */
    private $promocao;

    /**
     *
     * @var string @ORM\Column(name="imeiIp", type="string", length=255, nullable=true)
     */
    private $imeiIp;

    /**
     *
     * @var integer @ORM\Column(name="oculto", type="integer", nullable=true)
     */
    private $oculto = '0';

    

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;
    /**
     * @return the $idValidacao
     */
    public function getIdValidacao()
    {
        return $this->idValidacao;
    }

    /**
     * @return the $idTitulo
     */
    public function getIdTitulo()
    {
        return $this->idTitulo;
    }

    /**
     * @return the $idPessoaUsuario
     */
    public function getIdPessoaUsuario()
    {
        return $this->idPessoaUsuario;
    }

    /**
     * @return the $idPessoaTitular
     */
    public function getIdPessoaTitular()
    {
        return $this->idPessoaTitular;
    }

    /**
     * @return the $idCartao
     */
    public function getIdCartao()
    {
        return $this->idCartao;
    }

    /**
     * @return the $idBilhete
     */
    public function getIdBilhete()
    {
        return $this->idBilhete;
    }

    /**
     * @return the $idPromocao
     */
    public function getIdPromocao()
    {
        return $this->idPromocao;
    }

    /**
     * @return the $imeiIp
     */
    public function getImeiIp()
    {
        return $this->imeiIp;
    }

    /**
     * @return the $oculto
     */
    public function getOculto()
    {
        return $this->oculto;
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
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param number $idValidacao
     */
    public function setIdValidacao($idValidacao)
    {
        $this->idValidacao = $idValidacao;
    }

    /**
     * @param number $idTitulo
     */
    public function setIdTitulo($idTitulo)
    {
        $this->idTitulo = $idTitulo;
    }

    /**
     * @param number $idPessoaUsuario
     */
    public function setIdPessoaUsuario($idPessoaUsuario)
    {
        $this->idPessoaUsuario = $idPessoaUsuario;
    }

    /**
     * @param number $idPessoaTitular
     */
    public function setIdPessoaTitular($idPessoaTitular)
    {
        $this->idPessoaTitular = $idPessoaTitular;
    }

    /**
     * @param number $idCartao
     */
    public function setIdCartao($idCartao)
    {
        $this->idCartao = $idCartao;
    }

    /**
     * @param number $idBilhete
     */
    public function setIdBilhete($idBilhete)
    {
        $this->idBilhete = $idBilhete;
    }

    /**
     * @param number $idPromocao
     */
    public function setIdPromocao($idPromocao)
    {
        $this->idPromocao = $idPromocao;
    }

    /**
     * @param string $imeiIp
     */
    public function setImeiIp($imeiIp)
    {
        $this->imeiIp = $imeiIp;
    }

    /**
     * @param number $oculto
     */
    public function setOculto($oculto)
    {
        $this->oculto = $oculto;
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
     * @param number $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idValidacao'=>$this->idValidacao,
            'idTitulo'=>$this->titulo,
            'idPessoaUsuario'=>pessoaUsuario,
            'idPessoaTitular'=>$this->pessoaTitular,
            'idCartao'=>$this->cartao,
            'idBilhete'=>$this->bilhete,
            'idPromocao'=>$this->promocao,
            'imeiIp'=>$this->imeiIp,
            'oculto'=>$this->oculto,
            'status'=>$this->status,
        ];
        
    }

}

