<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * IadmModulosPermissoes
 *
 * @ORM\Table(name="iadm_modulos_permissoes", indexes={@ORM\Index(name="idModulo_fk_modulos_permissao_idx", columns={"idModulo"}), @ORM\Index(name="idUsuario_fk_modulos_permissao_idx", columns={"idUsuario"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\IadmModuloPermissoesRepository")

 */
class IadmModulosPermissoes extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idModuloPermissoes", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idModuloPermissoes;

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
     * @return the $idModuloPermissoes
     */
    public function getIdModuloPermissoes()
    {
        return $this->idModuloPermissoes;
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
     * @param number $idModuloPermissoes
     */
    public function setIdModuloPermissoes($idModuloPermissoes)
    {
        $this->idModuloPermissoes = $idModuloPermissoes;
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
            'idModuloPermissoes'=> $this->idModuloPermissoes,
            'acao'=> $this->acao,
            'idModulo'=> $this->idModulo,
            'idUsuario'=> $this->idUsuario,         
              ];
        
      }

}

