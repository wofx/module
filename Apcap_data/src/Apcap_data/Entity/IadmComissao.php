<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * IadmComissao
 *
 * @ORM\Table(name="iadm_comissao")
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\IadmComissaoRepository")
 */
class IadmComissao extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idComissao", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idComissao;

    /**
     *
     * @var string @ORM\Column(name="tipoComissao", type="string", length=50, nullable=false)
     */
    private $tipoComissao;

    /**
     *
     * @var string @ORM\Column(name="percentual", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $percentual;
    /**
     * @return the $idComissao
     */
    public function getIdComissao()
    {
        return $this->idComissao;
    }

    /**
     * @return the $tipoComissao
     */
    public function getTipoComissao()
    {
        return $this->tipoComissao;
    }

    /**
     * @return the $percentual
     */
    public function getPercentual()
    {
        return $this->percentual;
    }

    /**
     * @param number $idComissao
     */
    public function setIdComissao($idComissao)
    {
        $this->idComissao = $idComissao;
    }

    /**
     * @param string $tipoComissao
     */
    public function setTipoComissao($tipoComissao)
    {
        $this->tipoComissao = $tipoComissao;
    }

    /**
     * @param string $percentual
     */
    public function setPercentual($percentual)
    {
        $this->percentual = $percentual;
    }

    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idComissao'=>$this->idComissao,
            'tipoComissao'=>$this->tipoComissao,
            'percentual'=>$this->percentual,
               ];
        
    }

}

