<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * WcTokens
 *
 * @ORM\Table(name="wc_tokens", indexes={@ORM\Index(name="idx_token", columns={"token"}), @ORM\Index(name="idx_idCliente", columns={"idPessoa"})})
 * @ORM\Entity(repositoryClass="Apcap\Repositories\WcTokensRepository")
 */
class WcTokens extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idToken", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idToken;

    /**
     *
     * @var \Pessoas @ORM\ManyToOne(targetEntity="Pessoas")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="idPessoa", referencedColumnName="idCliente")
     *      })
     */
    private $idPessoa;

    /**
     *
     * @var string @ORM\Column(name="token", type="string", length=128, nullable=false)
     */
    private $token;

    /**
     *
     * @var \DateTime @ORM\Column(name="validade", type="datetime", nullable=false)
     */
    private $validade;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     *
     * @return the $idToken
     */
    public function getIdToken()
    {
        return $this->idToken;
    }

    /**
     *
     * @return the $idPessoa
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     *
     * @return the $token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     *
     * @return the $validade
     */
    public function getValidade()
    {
        return $this->validade;
    }

    /**
     *
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *
     * @param number $idToken            
     */
    public function setIdToken($idToken)
    {
        $this->idToken = $idToken;
    }

    /**
     *
     * @param ApcapApcapPessoas $idPessoa            
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }

    /**
     *
     * @param string $token            
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     *
     * @param DateTime $validade            
     */
    public function setValidade($validade)
    {
        $this->validade = $validade;
    }

    /**
     *
     * @param number $status            
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idToken' => $this->idToken,
            'idPessoa' => $this->idPessoa,
            'token' => $this->token,
            'validade' => date_format($this->validade, "d/m/Y H:i:s"),
            'status' => $this->status
        ];
    }
}

