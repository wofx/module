<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * IadmPermissoes
 *
 * @ORM\Table(name="iadm_permissoes", indexes={@ORM\Index(name="idUsuario_fk_permissoes_idx", columns={"idUsuario"}), @ORM\Index(name="idModulo_fk_permissoes_idx", columns={"idModulo"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\IadmPermissoesRepository")

 */
class IadmPermissoes extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idPermissao", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPermissao;

    /**
     *
     * @var string @ORM\Column(name="acao", type="string", length=50, nullable=false)
     */
    private $acao;

    /**
     *
     * @var \ApcapIadmModulos @ORM\ManyToOne(targetEntity="ApcapIadmModulos")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="idModulo", referencedColumnName="idModulo")
     *      })
     */
    private $idModulo;

    /**
     *
     * @var \ApcapIadmUsuarios @ORM\ManyToOne(targetEntity="ApcapIadmUsuarios")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="idUsuario", referencedColumnName="idUsuario")
     *      })
     */
    private $idUsuario;
    
  
    /**
     * @return the $idPermissao
     */
    public function getIdPermissao()
    {
        return $this->idPermissao;
    }

    /**
     * @return the $acao
     */
    public function getAcao()
    {
        return $this->acao;
    }

    /**
     * @return the $idModulo
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * @return the $idUsuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param number $idPermissao
     */
    public function setIdPermissao($idPermissao)
    {
        $this->idPermissao = $idPermissao;
    }

    /**
     * @param string $acao
     */
    public function setAcao($acao)
    {
        $this->acao = $acao;
    }

    /**
     * @param ApcapIadmModulos $idModulo
     */
    public function setIdModulo($idModulo)
    {
        $this->idModulo = $idModulo;
    }

    /**
     * @param ApcapIadmUsuarios $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }
    
    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
        'IdPemissao'=>$this->idPermissao,  
        'IdUsuario'=>$this->idUsuario,
        'IdModulo'=>$this->idModulo,
        'acao'=>$this->acao,
              ];
    
    }
    


}

