<?php
namespace Core\utils;

class DateUtils
{
    /**
     * 
     * FUNCAO PARA TRATAR DATA GREGORIANA
     * RECEBE: string (dd/mm/yyyy) || (dd/mm/yyyy H:i:s) OU (yyyy-mm-dd) || (yyyy-mm-dd H:i:s)
     * DEVOLVE: Objeto da data convertida para DATETIME  
     */
    public static function convertDate($date)
    {
        //INVERTE AS DATAS (dd/mm/yyyy) PARA FORMATO (yyyy-mm-dd), E SE VIER (yyyy-mm-dd) PERMANECE NESTE FORMATO.
        #EXECUTA COMANDO EXOLOAD NA STRING PASSADA PARA CASO CONTER HORA, TRATAR SOMENTE A DATA
        $date=explode(' ',$date);
        #FORMATA DATA GREGORIANA EM MYSQL, SE MYSQL MANTEM O FORMATO
        $strDate = implode("-",array_reverse(explode("/", $date[0])));        
        #VERIFICA SE CONTEM HORA
        if(count($date)>1)
        {
            #UNI HORA A DATA E CONVERTE A DATA DE STRING PARA DATE
            $dateConverted = new \DateTime($strDate." ".$date[1]);
        }
        else
        {
            #CONVERTE A DATA DE STRING PARA DATE
            $dateConverted = new \DateTime($strDate);
        }
        #RETORNA DATA CONVERTIDA
        return $dateConverted;
    }
}

