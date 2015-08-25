<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Docentes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        /*if($this->getRequest()->isPost())
        {
            $this->dbAdapter=  $this->getServiceLocator()->get('Zend\Db\Adapter');
            $d= new Docentes($this->dbAdapter);
            $data = $this->request->getPost();
            $d->crearDocente($data);     
            return $this->redirect()->toUrl($this->getRequest()->getBaseUrl().'/application/index');
            
        }  else {
            
            $form = new Formularios("form");
            //$id=(int) $this->params()->formRoute('id',0);
            $valores = array(
                "titulo"=>"Registro de Docentes",
                "form"=>$form,
                'url'=>  $this->getRequest()->getBaseUrl()
               // 'ids'=>$id
            );*/
            
            return new ViewModel();
        //}
    }
    public function crearAction()
    {
        return new ViewModel();
    }
    
}
