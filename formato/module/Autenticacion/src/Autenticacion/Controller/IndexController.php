<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Autenticacion\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Autenticacion\Form\Formularios;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {       
            
        $form = new Formularios("form");
        //$id=(int) $this->params()->formRoute('id',0);
        $valores = array(
            "titulo"=>"Inicio de Sesion",
            "form"=>$form,
            'url'=>  $this->getRequest()->getBaseUrl()
           // 'ids'=>$id
        );

        return new ViewModel($valores);
                
    }
    
    public function login()
    {       
        if($this->getRequest()->isPost())
        {
            $this->dbAdapter=  $this->getServiceLocator()->get('Zend\Db\Adapter');
            $u= new Usuarios($this->dbAdapter);
            $data = $this->request->getPost();
           
            return $this->redirect()->toUrl($this->getRequest()->getBaseUrl().'/autenticacion/index/index');
            
        }
    }
}
