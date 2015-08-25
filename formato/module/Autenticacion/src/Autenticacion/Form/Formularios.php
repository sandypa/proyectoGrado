<?php

namespace Autenticacion\Form;
use Zend\Form\Form;

class Formularios extends Form{
    
    public function __construct($name = null) {
        parent::__construct($name);
        
        $this->add(array(
            'name'=>'nombre',
            'options'=> array(
                'label'=>'Usuario',
            ),
            'attributes'=>array(                
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'codigo',
            'options'=> array(
                'label'=>'Contraseña',
            ),
            'attributes'=>array(                
                'type'=>'text',
                'class'=>'input'
            ),
        ));        
        
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
