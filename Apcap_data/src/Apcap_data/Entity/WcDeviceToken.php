<?php

namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * WcDeviceToken
 *
 * @ORM\Table(name="wc_device_token", indexes={@ORM\Index(name="idPessoa_fk_device_token_idx", columns={"idPessoa"})})
 * @ORM\Entity(repositoryClass="Apcap\Repositories\WcDeviceTokenRepository")
 */
class WcDeviceToken extends SuperEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDeviceToken", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idDeviceToken;
    
    /**
     * @var \Pessoas
     *
     * @ORM\ManyToOne(targetEntity="Pessoas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPessoa", referencedColumnName="idCliente")
     * })
     */
    private $idPessoa;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="deviceType", type="integer", nullable=false)
     */
    private $deviceType;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceToken", type="string", length=64, nullable=false)
     */
    private $deviceToken;
    
    /**
     * @return the $idDeviceToken
     */
    public function getIdDeviceToken()
    {
        return $this->idDeviceToken;
    }

    /**
     * @return the $idPessoa
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * @return the $deviceType
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * @return the $deviceToken
     */
    public function getDeviceToken()
    {
        return $this->deviceToken;
    }

    /**
     * @param number $idDeviceToken
     */
    public function setIdDeviceToken($idDeviceToken)
    {
        $this->idDeviceToken = $idDeviceToken;
    }

    /**
     * @param Pessoas $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }

    /**
     * @param number $deviceType
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
    }

    /**
     * @param string $deviceToken
     */
    public function setDeviceToken($deviceToken)
    {
        $this->deviceToken = $deviceToken;
    }

    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idDeviceToken'=>$this->idDeviceToken,
            'idPessoa'=>$this->idPessoa,
            'deviceType'=>$this->deviceType,
            'deviceToken'=>$this->deviceToken
        ];
    }
}

