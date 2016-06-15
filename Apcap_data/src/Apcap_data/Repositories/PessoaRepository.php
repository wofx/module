<?php
namespace Apcap_data\Repositories;

use Core\data\SuperRepository;
use Apcap_data\Entity\Pessoas;

class PessoaRepository extends SuperRepository
{
    
    public function pesquisarPessoas(){
        $pessoas = $this->getEntityManager();
        
        return $pessoas;
    }
    
}

