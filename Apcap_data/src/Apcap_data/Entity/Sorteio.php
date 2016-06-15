<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * ApcapApcapSorteio
 *
 * @ORM\Table(name="apcap_sorteio", indexes={@ORM\Index(name="idEvento_fk_sorteio_idx", columns={"idEvento"}), @ORM\Index(name="idTipoSorteio_fk_sorteio_idx", columns={"idTipoSorteio"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\SorteioRepository")
 */
class Sorteio extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idPremio", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPremio;

    /**
     *
     * @var string @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     *
     * @var string @ORM\Column(name="valorSugerido", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valorSugerido;

    /**
     *
     * @var string @ORM\Column(name="valorCapitalizacao", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valorCapitalizacao;

    /**
     *
     * @var string @ORM\Column(name="idTipoSorteio", type="integer", nullable=true)
     */
    private $idTipoSorteio;

    /**
     *
     * @var integer @ORM\Column(name="idEvento", type="integer", nullable=true)
     */
    private $idEvento;

    /**
     *
     * @return the $idPremio
     */
    public function getIdPremio()
    {
        return $this->idPremio;
    }

    /**
     *
     * @param number $idPremio            
     */
    public function setIdPremio($idPremio)
    {
        $this->idPremio = $idPremio;
    }

    /**
     *
     * @return the $descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     *
     * @param string $descricao            
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     *
     * @return the $valorSugerido
     */
    public function getValorSugerido()
    {
        return $this->valorSugerido;
    }

    /**
     *
     * @param string $valorSugerido            
     */
    public function setValorSugerido($valorSugerido)
    {
        $this->valorSugerido = $valorSugerido;
    }

    /**
     *
     * @return the $valorCapitalizacao
     */
    public function getValorCapitalizacao()
    {
        return $this->valorCapitalizacao;
    }

    /**
     *
     * @param string $valorCapitalizacao            
     */
    public function setValorCapitalizacao($valorCapitalizacao)
    {
        $this->valorCapitalizacao = $valorCapitalizacao;
    }

    /**
     *
     * @return the $idTiposorteio
     */
    public function getIdTipoSorteio()
    {
        return $this->idTipoSorteio;
    }

    /**
     *
     * @param field_type $idTiposorteio            
     */
    public function setIdTipoSorteio($idTipoSorteio)
    {
        $this->idTipoSorteio = $idTipoSorteio;
    }

    /**
     *
     * @return the $idEvento
     */
    public function getIdEvento()
    {
        return $this->idEvento;
    }

    /**
     *
     * @param number $idEvento            
     */
    public function setIdEvento($idEvento)
    {
        $this->idEvento = $idEvento;
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
            "idSorteio" => $this->idPremio,
            "descricao" => $this->descricao,
            "valorSugerido" => $this->valorSugerido,
            "valorCapitalizacao" => $this->valorCapitalizacao,
            "idTiposorteio" => $this->idTiposorteio,
            "idEvento" => $this->idEvento
        ];
    }
}

