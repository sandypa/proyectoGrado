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
use Docentes\Form\Formularios;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $form = new Formularios("form");
        //$id=(int) $this->params()->formRoute('id',0);
        $valores = array(
            "titulo"=>"Creacion de Docentes",
            "form"=>$form,
            
            'url'=>  $this->getRequest()->getBaseUrl()
           // 'ids'=>$id
        );
        $form->get("facultad")->setValueOptions(array('cn'=>'Ciencias Naturales e Ingenierias','cs'=>'Ciencias Socioeconomicas y Empresariales'));
        $form->get("unidadacademica")->setValueOptions(array('d'=>'Departamento  ','o'=>'Oficina  ','depe'=>'Dependencia'));
        return new ViewModel($valores, $form);
        
    }
    public function crearAction()
    {
        return new ViewModel();
    }
    
}