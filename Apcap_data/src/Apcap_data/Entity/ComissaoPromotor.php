<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * ComissaoPromotor
 *
 * @ORM\Table(name="apcap_comissao_promotor", indexes={@ORM\Index(name="idPromotor_fk_comissaoPromotor_idx", columns={"idPromotor"}), @ORM\Index(name="idValidados_fk_validados_idx", columns={"idValidados"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\ComissaoPromotorRepository")
 */
class ComissaoPromotor extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idComissaoPromotor", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idComissaoPromotor;

    /**
     *
     * @var integer @ORM\Column(name="idPromotor", type="integer", nullable=false)
     */
    private $idPromotor;

    /**
     *
     * @var integer @ORM\Column(name="idValidados", type="integer", nullable=false)
     */
    private $idValidados;
    /**
     * @return the $idComissaoPromotor
     */
    public function getIdComissaoPromotor()
    {
        return $this->idComissaoPromotor;
    }

    /**
     * @return the $idPromotor
     */
    public function getIdPromotor()
    {
        return $this->idPromotor;
    }

    /**
     * @return the $idValidados
     */
    public function getIdValidados()
    {
        return $this->idValidados;
    }

    /**
     * @param number $idComissaoPromotor
     */
    public function setIdComissaoPromotor($idComissaoPromotor)
    {
        $this->idComissaoPromotor = $idComissaoPromotor;
    }

    /**
     * @param number $idPromotor
     */
    public function setIdPromotor($idPromotor)
    {
        $this->idPromotor = $idPromotor;
    }

    /**
     * @param number $idValidados
     */
    public function setIdValidados($idValidados)
    {
        $this->idValidados = $idValidados;
    }
    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idComissaoPromotor'=>$this->idComissaoPromotor,
            'idPromotor'=>$this->idPromotor,
            'idValidados'=>$this->idValidados,
               ];
        
    }


}

