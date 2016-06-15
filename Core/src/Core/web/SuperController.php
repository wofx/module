<?php
namespace Core\Web;

use Doctrine\ORM\EntityManager;
use Zend\Json\Json;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\Http\Response;

abstract class SuperController extends AbstractRestfulController
{

    protected $entityManager;

    
    protected abstract function getHelperObject($json);

    protected abstract function getRepositorio();

    public function getJSONResponse($content)
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Content-Type', 'application/json');
        $response->setContent(Json::encode($content));
        return $response;
    }

    public function getInvalidRequest($mensagemError)
    {
        $response = $this->getResponse();
        $response->getHeaders()->addHeaderLine('Content-Type', 'application/json');
        $response->setContent(Json::encode([
            'mensagem' => $mensagemError
        ]));
        $response->setStatusCode(Response::STATUS_CODE_400);
        return $response;
    }

    /**
     * Retorna response contendo o codigo 204 de corpo do request nao encontrado
     * 
     * @param unknown $content            
     */
    public function getContentNotFound()
    {
        return $this->getResponse()->setStatusCode(Response::STATUS_CODE_204);
    }

    public function getInternelServerError()
    {
        return $this->getResponse()->setStatusCode(Response::STATUS_CODE_500);
    }

    /**
     * Sets the EntityManager
     *
     * @param EntityManager $em            
     * @access protected
     * @return PostController
     */
    protected function setEntityManager(EntityManager $em)
    {
        $this->entityManager = $em;
        return $this;
    }

    /**
     * Returns the EntityManager
     *
     * Fetches the EntityManager from ServiceLocator if it has not been initiated
     * and then returns it
     *
     * @access protected
     * @return EntityManager
     */
    protected function getEntityManager()
    {
        if (null === $this->entityManager) {
            
            $this->setEntityManager($this->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager'));
        }
        return $this->entityManager;
    }
}

