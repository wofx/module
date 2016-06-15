<?php
namespace Apcap_iadm\Controller;

use Core\Web\SuperController;

class PessoaController extends SuperController
{

    public function listarAction()
    {
        try {
            $teste = $this->getRepositorio()->findAll();
            return $this->getJSONResponse($teste);
        } catch (\RuntimeException $e) {
            var_dump($e);
        }
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Web\SuperController::getHelperObject()
     */
    protected function getHelperObject($json)
    {
        // TODO Auto-generated method stub
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Core\Web\SuperController::getRepositorio()
     */
    protected function getRepositorio()
    {
        return $this->getEntityManager()->getRepository("Apcap_data\Entity\Pessoas");
    }
}

