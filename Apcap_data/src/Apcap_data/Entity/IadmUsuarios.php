<?php
namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * IadmUsuarios
 *
 * @ORM\Table(name="iadm_usuarios")
  * @ORM\Entity(repositoryClass="Apcap_data\Repositories\IadmUsuariosRepository")

 */
class IadmUsuarios extends SuperEntity
{
    /**
     *
     * @var integer @ORM\Column(name="idUsuario", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idUsuario;

    /**
     *
     * @var string @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     *
     * @var string @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     *
     * @var string @ORM\Column(name="senha", type="string", length=32, nullable=false)
     */
    private $senha;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataInsert", type="datetime", nullable=true)
     */
    private $dataInsert;

    /**
     *
     * @var \DateTime @ORM\Column(name="dataUpdate", type="datetime", nullable=true)
     */
    private $dataUpdate;
    /**
     * @return the $idUsuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @return the $nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return the $senha
     */
    public function getSenha()
    {
        return $this->senha;
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
     * @param number $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param string $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
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
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idUsuario'=>$this->idUsuario,
            'nome'=>$this->nome,
            'email'=>$this->email,
            'senha'=>$this->senha,
            'dataInsert'=>date_format($this->dataInsert, 'd/m/Y'),
            'dataUpdate'=>date_format($this->dataUpdate, 'd/m/Y'),
               ];
        
    }

}

