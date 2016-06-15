<?php

namespace Apcap_data\Entity;

use Doctrine\ORM\Mapping as ORM;
use Core\data\SuperEntity;

/**
 * RegistroCompra
 *
 * @ORM\Table(name="apcap_registroCompra", indexes={@ORM\Index(name="idx_idCompra", columns={"idCompra"})})
 * @ORM\Entity(repositoryClass="Apcap_data\Repositories\RegistroCompraRepository")
 */
class RegistroCompra extends SuperEntity
{

    /**
     *
     * @var integer @ORM\Column(name="idRegistroCompra", type="integer", nullable=false)
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idRegistroCompra;

    /**
     *
     * @var string @ORM\Column(name="tid", type="string", length=32, nullable=true)
     */
    private $tid;

    /**
     *
     * @var string @ORM\Column(name="pan", type="string", length=64, nullable=true)
     */
    private $pan;

    /**
     *
     * @var integer @ORM\Column(name="pedidoNumero", type="integer", nullable=true)
     */
    private $pedidoNumero;

    /**
     *
     * @var integer @ORM\Column(name="pedidoValor", type="integer", nullable=true)
     */
    private $pedidoValor;

    /**
     *
     * @var string @ORM\Column(name="pedidoMoeda", type="string", length=4, nullable=true)
     */
    private $pedidoMoeda;

    /**
     *
     * @var \DateTime @ORM\Column(name="pedidoDataHora", type="datetime", nullable=true)
     */
    private $pedidoDataHora;

    /**
     *
     * @var string @ORM\Column(name="pedidoDescricao", type="string", length=1024, nullable=true)
     */
    private $pedidoDescricao;

    /**
     *
     * @var string @ORM\Column(name="pedidoIdioma", type="string", length=2, nullable=true)
     */
    private $pedidoIdioma;

    /**
     *
     * @var string @ORM\Column(name="pagamentobandeira", type="string", length=16, nullable=true)
     */
    private $pagamentoBandeira;

    /**
     *
     * @var string @ORM\Column(name="pagamentoProduto", type="string", length=2, nullable=true)
     */
    private $pagamentoProduto;

    /**
     *
     * @var integer @ORM\Column(name="pagamentoParcelas", type="integer", nullable=true)
     */
    private $pagamentoParcelas;

    /**
     *
     * @var integer @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     *
     * @var integer @ORM\Column(name="autentiCodigo", type="integer", nullable=true)
     */
    private $autentiCodigo;

    /**
     *
     * @var string @ORM\Column(name="autentiMensagem", type="string", length=128, nullable=true)
     */
    private $autentiMensagem;

    /**
     *
     * @var \DateTime @ORM\Column(name="autentiDataHora", type="datetime", nullable=true)
     */
    private $autentiDataHora;

    /**
     *
     * @var integer @ORM\Column(name="autentiValor", type="integer", nullable=true)
     */
    private $autentivalor;

    /**
     *
     * @var string @ORM\Column(name="autentiEci", type="string", length=2, nullable=true)
     */
    private $autentiEci;

    /**
     *
     * @var integer @ORM\Column(name="autorizCodigo", type="integer", nullable=true)
     */
    private $autorizCodigo;

    /**
     *
     * @var string @ORM\Column(name="autorizMensagem", type="string", length=128, nullable=true)
     */
    private $autorizMensagem;

    /**
     *
     * @var \DateTime @ORM\Column(name="autorizDataHora", type="datetime", nullable=true)
     */
    private $autorizDataHora;

    /**
     *
     * @var integer @ORM\Column(name="autorizValor", type="integer", nullable=true)
     */
    private $autorizvalor;

    /**
     *
     * @var string @ORM\Column(name="autorizLr", type="string", length=2, nullable=true)
     */
    private $autorizLr;

    /**
     *
     * @var string @ORM\Column(name="autorizArp", type="string", length=8, nullable=true)
     */
    private $autorizArp;

    /**
     *
     * @var string @ORM\Column(name="autorizNsu", type="string", length=8, nullable=true)
     */
    private $autorizNsu;

    /**
     *
     * @var integer @ORM\Column(name="capturaCodigo", type="integer", nullable=true)
     */
    private $capturaCodigo;

    /**
     *
     * @var string @ORM\Column(name="capturaMensagem", type="string", length=128, nullable=true)
     */
    private $capturaMensagem;

    /**
     *
     * @var \DateTime @ORM\Column(name="capturaDataHora", type="datetime", nullable=true)
     */
    private $capturaDataHora;

    /**
     *
     * @var integer @ORM\Column(name="capturaValor", type="integer", nullable=true)
     */
    private $capturaValor;

    /**
     *
     * @var string @ORM\Column(name="dataInsert", type="string", length=45, nullable=true)
     */
    private $dataInsert;

    /**
     *
     * @var \ApcapApcapCompra @ORM\ManyToOne(targetEntity="ApcapApcapCompra")
     *      @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="idCompra", referencedColumnName="idCompra")
     *      })
     */
    private $idCompra;
    
    /**
     * @return the $idRegistroCompra
     */
    public function getIdRegistroCompra()
    {
        return $this->idRegistroCompra;
    }

    /**
     * @return the $tid
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @return the $pan
     */
    public function getPan()
    {
        return $this->pan;
    }

    /**
     * @return the $pedidoNumero
     */
    public function getPedidoNumero()
    {
        return $this->pedidoNumero;
    }

    /**
     * @return the $pedidoValor
     */
    public function getPedidoValor()
    {
        return $this->pedidoValor;
    }

    /**
     * @return the $pedidoMoeda
     */
    public function getPedidoMoeda()
    {
        return $this->pedidoMoeda;
    }

    /**
     * @return the $pedidoDataHora
     */
    public function getPedidoDataHora()
    {
        return $this->pedidoDataHora;
    }

    /**
     * @return the $pedidoDescricao
     */
    public function getPedidoDescricao()
    {
        return $this->pedidoDescricao;
    }

    /**
     * @return the $pedidoIdioma
     */
    public function getPedidoIdioma()
    {
        return $this->pedidoIdioma;
    }

    /**
     * @return the $pagamentoBandeira
     */
    public function getPagamentoBandeira()
    {
        return $this->pagamentoBandeira;
    }

    /**
     * @return the $pagamentoProduto
     */
    public function getPagamentoProduto()
    {
        return $this->pagamentoProduto;
    }

    /**
     * @return the $pagamentoParcelas
     */
    public function getPagamentoParcelas()
    {
        return $this->pagamentoParcelas;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return the $autentiCodigo
     */
    public function getAutentiCodigo()
    {
        return $this->autentiCodigo;
    }

    /**
     * @return the $autentiMensagem
     */
    public function getAutentiMensagem()
    {
        return $this->autentiMensagem;
    }

    /**
     * @return the $autentiDataHora
     */
    public function getAutentiDataHora()
    {
        return $this->autentiDataHora;
    }

    /**
     * @return the $autentivalor
     */
    public function getAutentivalor()
    {
        return $this->autentivalor;
    }

    /**
     * @return the $autentiEci
     */
    public function getAutentiEci()
    {
        return $this->autentiEci;
    }

    /**
     * @return the $autorizCodigo
     */
    public function getAutorizCodigo()
    {
        return $this->autorizCodigo;
    }

    /**
     * @return the $autorizMensagem
     */
    public function getAutorizMensagem()
    {
        return $this->autorizMensagem;
    }

    /**
     * @return the $autorizDataHora
     */
    public function getAutorizDataHora()
    {
        return $this->autorizDataHora;
    }

    /**
     * @return the $autorizvalor
     */
    public function getAutorizvalor()
    {
        return $this->autorizvalor;
    }

    /**
     * @return the $autorizLr
     */
    public function getAutorizLr()
    {
        return $this->autorizLr;
    }

    /**
     * @return the $autorizArp
     */
    public function getAutorizArp()
    {
        return $this->autorizArp;
    }

    /**
     * @return the $autorizNsu
     */
    public function getAutorizNsu()
    {
        return $this->autorizNsu;
    }

    /**
     * @return the $capturaCodigo
     */
    public function getCapturaCodigo()
    {
        return $this->capturaCodigo;
    }

    /**
     * @return the $capturaMensagem
     */
    public function getCapturaMensagem()
    {
        return $this->capturaMensagem;
    }

    /**
     * @return the $capturaDataHora
     */
    public function getCapturaDataHora()
    {
        return $this->capturaDataHora;
    }

    /**
     * @return the $capturaValor
     */
    public function getCapturaValor()
    {
        return $this->capturaValor;
    }

    /**
     * @return the $dataInsert
     */
    public function getDataInsert()
    {
        return $this->dataInsert;
    }

    /**
     * @return the $idCompra
     */
    public function getIdCompra()
    {
        return $this->idCompra;
    }

    /**
     * @param number $idRegistroCompra
     */
    public function setIdRegistroCompra($idRegistroCompra)
    {
        $this->idRegistroCompra = $idRegistroCompra;
    }

    /**
     * @param string $tid
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
    }

    /**
     * @param string $pan
     */
    public function setPan($pan)
    {
        $this->pan = $pan;
    }

    /**
     * @param number $pedidoNumero
     */
    public function setPedidoNumero($pedidoNumero)
    {
        $this->pedidoNumero = $pedidoNumero;
    }

    /**
     * @param number $pedidoValor
     */
    public function setPedidoValor($pedidoValor)
    {
        $this->pedidoValor = $pedidoValor;
    }

    /**
     * @param string $pedidoMoeda
     */
    public function setPedidoMoeda($pedidoMoeda)
    {
        $this->pedidoMoeda = $pedidoMoeda;
    }

    /**
     * @param DateTime $pedidoDataHora
     */
    public function setPedidoDataHora($pedidoDataHora)
    {
        $this->pedidoDataHora = $pedidoDataHora;
    }

    /**
     * @param string $pedidoDescricao
     */
    public function setPedidoDescricao($pedidoDescricao)
    {
        $this->pedidoDescricao = $pedidoDescricao;
    }

    /**
     * @param string $pedidoIdioma
     */
    public function setPedidoIdioma($pedidoIdioma)
    {
        $this->pedidoIdioma = $pedidoIdioma;
    }

    /**
     * @param string $pagamentoBandeira
     */
    public function setPagamentoBandeira($pagamentoBandeira)
    {
        $this->pagamentoBandeira = $pagamentoBandeira;
    }

    /**
     * @param string $pagamentoProduto
     */
    public function setPagamentoProduto($pagamentoProduto)
    {
        $this->pagamentoProduto = $pagamentoProduto;
    }

    /**
     * @param number $pagamentoParcelas
     */
    public function setPagamentoParcelas($pagamentoParcelas)
    {
        $this->pagamentoParcelas = $pagamentoParcelas;
    }

    /**
     * @param number $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param number $autentiCodigo
     */
    public function setAutentiCodigo($autentiCodigo)
    {
        $this->autentiCodigo = $autentiCodigo;
    }

    /**
     * @param string $autentiMensagem
     */
    public function setAutentiMensagem($autentiMensagem)
    {
        $this->autentiMensagem = $autentiMensagem;
    }

    /**
     * @param DateTime $autentiDataHora
     */
    public function setAutentiDataHora($autentiDataHora)
    {
        $this->autentiDataHora = $autentiDataHora;
    }

    /**
     * @param number $autentivalor
     */
    public function setAutentivalor($autentivalor)
    {
        $this->autentivalor = $autentivalor;
    }

    /**
     * @param string $autentiEci
     */
    public function setAutentiEci($autentiEci)
    {
        $this->autentiEci = $autentiEci;
    }

    /**
     * @param number $autorizCodigo
     */
    public function setAutorizCodigo($autorizCodigo)
    {
        $this->autorizCodigo = $autorizCodigo;
    }

    /**
     * @param string $autorizMensagem
     */
    public function setAutorizMensagem($autorizMensagem)
    {
        $this->autorizMensagem = $autorizMensagem;
    }

    /**
     * @param DateTime $autorizDataHora
     */
    public function setAutorizDataHora($autorizDataHora)
    {
        $this->autorizDataHora = $autorizDataHora;
    }

    /**
     * @param number $autorizvalor
     */
    public function setAutorizvalor($autorizvalor)
    {
        $this->autorizvalor = $autorizvalor;
    }

    /**
     * @param string $autorizLr
     */
    public function setAutorizLr($autorizLr)
    {
        $this->autorizLr = $autorizLr;
    }

    /**
     * @param string $autorizArp
     */
    public function setAutorizArp($autorizArp)
    {
        $this->autorizArp = $autorizArp;
    }

    /**
     * @param string $autorizNsu
     */
    public function setAutorizNsu($autorizNsu)
    {
        $this->autorizNsu = $autorizNsu;
    }

    /**
     * @param number $capturaCodigo
     */
    public function setCapturaCodigo($capturaCodigo)
    {
        $this->capturaCodigo = $capturaCodigo;
    }

    /**
     * @param string $capturaMensagem
     */
    public function setCapturaMensagem($capturaMensagem)
    {
        $this->capturaMensagem = $capturaMensagem;
    }

    /**
     * @param DateTime $capturaDataHora
     */
    public function setCapturaDataHora($capturaDataHora)
    {
        $this->capturaDataHora = $capturaDataHora;
    }

    /**
     * @param number $capturaValor
     */
    public function setCapturaValor($capturaValor)
    {
        $this->capturaValor = $capturaValor;
    }

    /**
     * @param string $dataInsert
     */
    public function setDataInsert($dataInsert)
    {
        $this->dataInsert = $dataInsert;
    }

    /**
     * @param ApcapApcapCompra $idCompra
     */
    public function setIdCompra($idCompra)
    {
        $this->idCompra = $idCompra;
    }
    
    
    /**
     * {@inheritDoc}
     * @see JsonSerializable::jsonSerialize()
     */
    
    public function jsonSerialize()
    {
        // TODO Auto-generated method stub
        return [
            'idRegistroCompra'=>$this->idRegistroCompra,
            'tid'=>$this->tid,
            'pan'=>$this->pan,
            'pedidoNumero'=>$this->pedidoNumero,
            'pedidoValor'=>$this->pedidoValor,
            'pedidoMoeda'=>$this->pedidoMoeda,
            'pedidoDataHora'=>date_format($this->pedidoDataHora, 'd/m/y'),
            'pedidoDescricao'=>$this->pedidoDescricao,
            'pedidoIdioma'=>$this->pedidoIdioma,
            'pagamentoBandeira'=>$this->pagamentoBandeira,
            'pagamentoProduto'=>$this->pagamentoProduto,
            'pagamentoParcelas'=>$this->pagamentoParcelas,
            'status'=>$this->status,
            'autentiCodigo'=>$this->autentiCodigo,
            'autentiMensagem'=>$this->autentiMensagem,
            'autentiDataHora'=>date_format($this->autentiDataHora, 'd/m/Y'),
            'autentiValor'=>$this->autentivalor,
            'autentiEci'=>$this->autentiEci,
            'autorizCodigo'=>$this->autorizCodigo,
            'autorizMensagem'=>$this->autorizMensagem,
            'autorizDataHora'=>date_format($this->autorizDataHora, 'd/m/Y'),
            'autorizvalor'=>$this->autorizvalor,
            'autorizLr'=>$this->autorizLr,
            'autorizArp'=>$this->autorizArp,
            'autorizNsu'=>$this->autorizNsu,
            'capturaCodigo'=>$this->capturaCodigo,
            'capturaMensagem'=>$this->capturaMensagem,
            'capturaDataHora'=>date_format($this->capturaDataHora, 'd/m/Y'),
            'capturaValor'=>$this->capturaValor,
            'dataInsert'=>date_format($this->dataInsert, 'd/m/Y'),
            'idCompra'=>$this->idCompra,
               ];
    
    }



}

