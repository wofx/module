<?php
namespace Apcap_mobile\Controller;

use Core\Web\SuperController;
use Zend\Authentication\AuthenticationService;
use Zend\Json\Json;

class LoginController extends SuperController
{

    public function loginAction()
    {
        $request = $this->getRequest();
        $login = $request->getPost('email');
        $senha = $request->getPost('senha');
        
        $authService = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');
        
        $adapter = $authService->getAdapter();
        
        
        
        $this->getInternelServerError();
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
        // TODO Auto-generated method stub
    }
}

