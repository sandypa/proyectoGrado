<?php

namespace Docentes\Form;


use Zend\Form\Form;
use Zend\Form\Factory;

class Formularios extends Form{
    
    public function __construct($name = null) {
        parent::__construct($name);
        
        $this->add(array(
            'name'=>'cedula',
            'options'=> array(
                'label'=>'Cedula',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'nombre',
            'options'=> array(
                'label'=>'Nombre',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'apellido',
            'options'=> array(
                'label'=>'Apellido',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'codigo',
            'options'=> array(
                'label'=>'Codigo',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'facultad',
            'options'=> array(
                'label'=>'Facultad',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'unidadacademica',
            'options'=> array(
                'label'=>'Unidad Academica',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'semestreaño',
            'options'=> array(
                'label'=>'Semestre del Año',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'formacion',
            'options'=> array(
                'label'=>'Formacion',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'direccion',
            'options'=> array(
                'label'=>'Direccion',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'telefono',
            'options'=> array(
                'label'=>'Telefono',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $factory = new Factory();
        
        $correo = $factory->createElement(array(
            
            'type'=>'Zend\Form\Element\Email',
            'name'=>'correo',
            'options'=> array(
                'label'=>'Correo'
            ),
            'attributes'=>array(
                'class'=>'input'
            ),
        ));
        
        $this->add($correo);
        
        //boton
        $this->add(array(
            'name'=>'send',
            'attributes'=>array(
                'type'=>'submit',
                'value'=>'Guardar',
                'title'=>'Guardar'
            ),
        ));
        
    }
    
}
