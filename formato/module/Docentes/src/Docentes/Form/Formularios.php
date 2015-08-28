<?php

namespace Docentes\Form;


use Zend\Form\Form;
use Zend\Form\Factory;
use Zend\Form\Element;

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
            'name'=>'nombres',
            'options'=> array(
                'label'=>'Nombre',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'apellidos',
            'options'=> array(
                'label'=>'Apellidos',
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
        $radio = new Element\Radio('facultad');
        $radio->setLabel('Facultad');
        
        $this->add($radio);
        
        
        
        $radio = new Element\Radio('unidadacademica');
        $radio->setLabel('Unidad Academica');
         
        $this->add($radio);
        
        $this->add(array(
            'name'=>'semestre',
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
