<?php

namespace Autenticacion\Model\Entity;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;

class Usuarios extends TableGateway
{
    private $nombre;
    private $correo;
    
    
    public function __construct(Adapter $adapter=null, $databaseSchema = null, ResultSet $selectResultPrototype= null)
    {
        return parent::__construct('usuarios', $adapter, $databaseSchema, $selectResultPrototype);
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getCorreo() {
        return $this->correo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

        
    private function cargarAtributos($datos = array())
    {
        $this->nombre=$datos["nombre"];
        $this->correo=$datos["correo"];
    }
    public function getUsuarios()
    {
        $datos=  $this->select();
        return $datos->toArray();
    }
            
    public function getUsuarioPorId($id)
    {
        $id= (int) $id;
        $rowset = $this->select(array('codigo'=>$id));
        $row = $rowset->current();
        
        
        
        return $row;
    }
    
    public function crearUsuario($data=array())
    {
        self::cargarAtributos($data);
        $array=array(
            'nombre'=>  $this->nombre,
            'correo'=>  $this->correo
        );
        $this->insert($array);
    }
    
    public function actualizarUsuario($id, $data=array())
    {
        $this->update($data, array('codigo'=>$id));
    }
    
    public function borrarUsuario($id)
    {
        $this->delete(array('codigo'=>$id));
    }
    
}
