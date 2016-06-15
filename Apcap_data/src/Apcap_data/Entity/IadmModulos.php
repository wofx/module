<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * IadmModulos
 *
 * @ORM\Table(name="iadm_modulos")
  * @ORM\Entity(repositoryClass="Apcap_data\Repositories\IadmModulosRepository")

 */
    class IadmModulos extends SuperEntity
    {

    /**
     *
     * @var integer @ORM\Column(name="idModulo", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idModulo;

    /**
     *
     * @var string @ORM\Column(name="modulo", type="string", length=50, nullable=false)
     */
    private $modulo;
   
    /**
     * @return the $idModulo
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * @return the $modulo
     */
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * @param number $idModulo
     */
    public function setIdModulo($idModulo)
    {
        $this->idModulo = $idModulo;
    }

    /**
     * @param string $modulo
     */
    public function setModulo($modulo)
    {
        $this->modulo = $modulo;
    }
    
    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idModulo'=>$this->idModulo,
            'modulo'=>$this->modulo,
               ];
    
    }


}

