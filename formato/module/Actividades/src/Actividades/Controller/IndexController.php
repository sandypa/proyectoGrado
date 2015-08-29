<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Actividades\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Actividades\Form\Formularios;
use Actividades\Model\Entity\Actividades;

class IndexController extends AbstractActionController
{
    public $dbAdapter;
    
    public function indexAction()
    {
        $form = new Formularios("form");
        //$id=(int) $this->params()->formRoute('id',0);
        $valores = array(
            "titulo"=>"Creacion de Actividades",
            "form"=>$form,            
            'url'=>  $this->getRequest()->getBaseUrl()
           // 'ids'=>$id
        );
        
        return new ViewModel($valores, $form);
        
    }
    public function crearAction()
    {
        if($this->getRequest()->isPost())
        {
            $this->dbAdapter=  $this->getServiceLocator()->get('Zend\Db\Adapter');
            $u= new Actividades($this->dbAdapter);
            $data = $this->request->getPost();
            $u->crearActividad($data);
            return $this->redirect()->toUrl($this->getRequest()->getBaseUrl().'/actividades/index/index');
            
        }
        return new ViewModel();
    }
    
}
