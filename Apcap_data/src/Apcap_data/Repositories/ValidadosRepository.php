<?php
namespace Apcap_data\Repositories;

use Core\data\SuperRepository;

class ValidadosRepository extends SuperRepository
{
    
    public function pesquisarApcapsValidadosPorCpf($cpf){
        $this->_em->findBy(array('pessoaUsuario.cpf' => "71771786191"));
    }
}

