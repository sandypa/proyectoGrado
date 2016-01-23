<?php

namespace Actividades\Form;


use Zend\Form\Form;
use Zend\Form\Factory;
use Zend\Form\Element;

class Formularios extends Form{
    
    public function __construct($name = null) {
        parent::__construct($name);
        
        $this->add(array(
            'name'=>'codactividades',
            'options'=> array(
                'label'=>'CodActividad',
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
            'name'=>'descripcion',
            'options'=> array(
                'label'=>'Descripcion',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'responsable',
            'options'=> array(
                'label'=>'Responsable',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));
        
        $this->add(array(
            'name'=>'valoracion',
            'options'=> array(
                'label'=>'Valoracion',
            ),
            'attributes'=>array(
                'type'=>'text',
                'class'=>'input'
            ),
        ));        
        
        $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'coddocente',
            'options' => array(
                'label' => 'Cedula Docente',
                'value_options' => array(
                    '0' => 'Seleccione la cedula del docente',
                    '1' => '1123',
                    '2' => '456789'
                ),
            ),
            'attributes' => array(
                'value' => '0' //set selected to '0'
            )
        ));
        
        $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'codtipo',
            'options' => array(
                'label' => 'Tipo de Modalidad',
                'value_options' => array(
                    '0' => 'Seleccione la modalidad',
                    '1' => '1123',
                    '2' => '456789'
                ),
            ),
            'attributes' => array(
                'value' => '0' //set selected to '0'
            )
        ));      
     
        
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
