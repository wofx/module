<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * ApcapApcapPremioTipoBem
 *
 * @ORM\Table(name="apcap_premio_tipo_bem", indexes={@ORM\Index(name="id_tipo_bem_fk_premio_tipo_idx", columns={"idPremio"}), @ORM\Index(name="id_tipo_bem_fk_idx", columns={"idTipoBem"})})
 * @ORM\Entity
 */
class ApcapApcapPremioTipoBem
{

    /**
     *
     * @var integer @ORM\Column(name="idPremio", type="integer", nullable=true)
     */
    private $idpremio;

    /**
     *
     * @var integer @ORM\Column(name="idTipoBem", type="integer", nullable=true)
     */
    private $idtipobem;

    /**
     *
     * @var integer @ORM\Column(name="idPremioTipoBem", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpremiotipobem;
}

