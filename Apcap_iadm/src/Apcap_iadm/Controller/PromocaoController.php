<?php
namespace Apcap_iadm\Controller;

use \RuntimeException;
use Core\Web\SuperController;
use Apcap_data\Entity\Promocao;
use Zend\Json\Json;
use Zend\Mvc\Controller\params;
use Zend\Validator\Date;
use Core\utils\DateUtils;

class PromocaoController extends SuperController
{

    /**
     *******************************************************************
     * PUBLIC FUNCTIONS
     *******************************************************************
     */
    
    public function listarAction()
    {
        try 
        {     
            $promocaoDao = $this->getRepositorio();
            $promocaos = $promocaoDao->findAll();
            
            //VERIFICA SE FOI ENCONTRADO ALGUM REGISTRO
            if(!$promocaos)
            {
                //RETORNA CODIGO 204
                return $this->getContentNotFound();
            }
            
            return $this->getJSONResponse($promocaos);
        } 
        catch (\RuntimeException $e) 
        {
            //RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    public function editarAction()
    {
        try 
        {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent(), promocao::class);
            //////////////////////////////////////////////////////////////
            //TRATA REGISTROS
            if (is_null($json) || !$this->validJson($json))
            {
                //RETORNA CODIGO 400
                return $this->getInvalidRequest("Parametros inválidos.");
            }
            //////////////////////////////////////////////////////////////
            //CONVERTE JSON EM OBJETO
            $promocao = $this->getHelperObject($json);
            //////////////////////////////////////////////////////////////
            //SALVA REGISTROS NO BF
            $this->getRepositorio()->editar($promocao);
            ////////////////////////////////////////////////////////////
            //RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($promocao);
        } 
        catch (\RuntimeException $e) 
        {
            //RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    public function salvarAction()
    {
        try 
        {
            $request = $this->getRequest();
            $json = Json::decode($request->getContent(), promocao::class);
            //////////////////////////////////////////////////////////////
            //TRATA REGISTROS
            if (is_null($json) || !$this->validJson($json))
            {
                 //RETORNA CODIGO 400
                 return $this->getInvalidRequest("Parametros inválidos.");
            }
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //CONVERTE JSON COM OS PARAMETROS RECEBIDOS EM OBJETO
            $objPromocao = $this->getHelperObject($json);
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //SALVA REGISTROS NO BF
            $this->getRepositorio()->salvar($objPromocao);
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //BUSCA REGISTROS DA TABELA apcap_referencia_evento PARA POPULAR TABELA DE EVENTO, PARA A PROMOCAO CADASTRADA.
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////
            #PEGA CONEXAO COM O BANCO
            $conn = $this->getEntityManager()->getConnection();
            #PREPARA QUERY(STRING)
            #Prepara Query, ATENCAO!!!!-> ORDER BY ordem DEVE SER EM DESC.
            $sql="SELECT idReferenciaEvento, hora, ordem FROM apcap_referencia_evento WHERE numeroSemanaMysql <= WEEKDAY(:dataReferencia) ORDER BY ordem DESC";
            #ATRIBUI PARAMETROS DA CLAUSULA WHERE, REFERENCIADOS PELO INDECE.
            $params['dataReferencia'] = date_format($objPromocao->getdataReferencia(), 'Y-m-d');
            #EXECUTA QUERY
            $execQuery = $conn->prepare($sql);            
            $execQuery->execute($params);
            #PEGA O RESULTADO DA QUERY EM ARRAY
            $result = $execQuery->fetchAll();
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////
            #VERIFICA SE QUEY RETORNOU ALGUM REGISTRO
            if($result)
            {
                #INICIALIZA VARIAVEL COM QUERY
                $sqlInsertEvento = "INSERT INTO apcap_evento (idPromocao, idReferenciaEvento, dataEvento, horaEvento, ordem, status, dataInsert) VALUES";
                #DECODIFICA JSON E EXECUTA FOREACH PARA PERCORRER ARRAY E INSERIR INFORMACOES DO EVENTO
                foreach ($result as $key => $eventos)
                {
                   $sqlInsertEvento .= "({$objPromocao->getIdPromocao()}, {$eventos['idReferenciaEvento']}, DATE_SUB('".date_format($objPromocao->getdataReferencia(), 'Y-m-d')."', INTERVAL {$key} DAY), '{$eventos['hora']}', {$eventos['ordem']}, 1, NOW()),";
                }
                //Remove ultima virgula
                $sqlInsertEvento = substr($sqlInsertEvento, 0, -1);
                
                $execQueryInsert = $conn->prepare($sqlInsertEvento);            
                $execQueryInsert->execute($params);
                
            }
            else 
            {
                //RETORNA CODIGO 204
                return $this->getContentNotFound();
            }            
            //RETORNA JSON DO TIPO REST
            return $this->getJSONResponse($objPromocao);
    
        } 
        catch (\RuntimeException $e) 
        {
            //RETORNA ERRO 500
            return $this->getInternelServerError();
        }
    }

    public function recuperarPorIdAction()
    {
        try 
        {
            $id = (int)$this->params()->fromRoute('id');
            
            $promocao = $this->getRepositorio()->find($id);
            
            //VERIFICA SE FOI ENCONTRADO ALGUM REGISTRO
            if(!$promocao)
            {
                //RETORNA CODIGO 204
                return $this->getContentNotFound();
            }
            
            return $this->getJSONResponse($promocao);
            
        } 
        catch (\RuntimeException $e) 
        {
            //RETORNA ERRO 500
            return $this->getInternelServerError();
        }   
    }
    
    
    /**
     *******************************************************************
     * PROTECTED FUNCTIONS
     *******************************************************************
     */
    
    protected function getRepositorio()
    {
        return $this->getEntityManager()->getRepository("Apcap_data\Entity\promocao");
    }
        
    protected function getHelperObject($json)
    {
        $promocao = new Promocao();
        
        if (!empty($json['idPromocao']) && !is_null($json['idPromocao'])) 
        {
            $promocao->setIdPromocao($json['idPromocao']);
        }
        
        $promocao->setdataReferencia(DateUtils::convertDate($json['dataReferencia']));
        $promocao->setCgSusep($json['cgSusep']);
        $promocao->setDataVigenciaInicio(DateUtils::convertDate($json['dataVigenciaInicio']." ".$json['horaVigenciaInicio']));
        $promocao->setDataVigenciaFim(DateUtils::convertDate($json['dataVigenciaFim']." ".$json['horaVigenciaFim']));
        $promocao->setCategoria($json['categoria']);
        $promocao->setStatus($json['status']);
        
        return $promocao;
    }

    /**
     *******************************************************************
     * PROTECTED FUNCTIONS
     *******************************************************************
     */
    
    private function validJson($json)
    {   
        //ESTANCIA CLASSE DE DATAS PARA TRATAR DATAS PASSANDO O FORMATO DESEJADO
        $date = new Date(array('format' => 'd/m/Y'));
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VERIFICA DATA REFERENCIA
        if(!$date->isValid($json['dataReferencia']))
        {
            return false;
        }
        //VERIFICA DATA VIGENCIA INICIAL
        if(!$date->isValid($json['dataVigenciaInicio']))
        {
            return false;
        }
        //VERIFICA DATA VIGENCIA FINAL
        if(!$date->isValid($json['dataVigenciaFim']))
        {
            return false;
        }        
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //ESTANCIA CLASSE DE DATAS PARA TRATAR HORA PASSANDO O FORMATO DESEJADO
        $time = new Date(array('format' => 'H:i'));
        //VALIDA HORA INICIAL
        if(!$time->isValid($json['horaVigenciaInicio']))
        {
            return false;
        }
        //VALIDA HORA FINAL
        if(!$time->isValid($json['horaVigenciaFim']))
        {
            return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VALIDA SE DATA DE VIGENCIA FIM(DATA) E MAIOR QUE A DATA DE REFERENCIA FIM(DATA)
        if(DateUtils::convertDate($json['dataVigenciaFim']) > DateUtils::convertDate($json['dataReferencia']))
        {
            return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VALIDA SE DATA DE VIGENCIA INICIO(DATA+HORA) E MAIOR QUE A DATA DE VIGENCIA FIM(DATA+HORA)      
        if(DateUtils::convertDate($json['dataVigenciaInicio']." ".$json['horaVigenciaInicio']) > DateUtils::convertDate($json['dataVigenciaFim']." ".$json['horaVigenciaFim']))
        {
           return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VALIDA CG
        if(!isset($json['cgSusep']))
        {
            return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //VALIDA CATEGORIA
        if(!isset($json['categoria']))
        {
            return false;
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //SE TUDO OK
        return true;
    }

}