<?php

namespace Docentes\Form;


use Zend\Form\Form;
use Zend\Form\Factory;

class Formularios {
    
    public function __construct($name = null) {
        parent::__construct($name);
        
        $this->add(array(
            'name'=>'nombre',
            'options'=> array(
                'label'=>'Nombre Completo',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $factory = new Factory();
        
        $email = $factory->createElement(array(
            
            'type'=>'Zend\Form\Element\Email',
            'name'=>'correo',
            'options'=> array(
                'label'=>'correo'
            ),
            'attributes'=>array(
                'class'=>'input'
            ),
        ));
        
        $this->add($email);
        
        //boton
        $this->add(array(
            'name'=>'send',
            'attributes'=>array(
                'type'=>'submit',
                'value'=>'Crear',
                'title'=>'Crear'
            ),
        ));
        
    }
    
}
