<?php

namespace Actividades\Model\Entity;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;

class Actividades extends TableGateway
{
    private $codactividades;    
    private $nombre;
    private $descripcion;
    private $responsable;
    private $valoracion;
    private $coddocente;
    private $codtipo;
   
    
    public function __construct(Adapter $adapter=null, $databaseSchema=null, ResultSet $selectResultProtorype=null)
    {
        return parent::__construct('actividades', $adapter, $databaseSchema, $selectResultProtorype);
    } 

    private function cargarAtribActividades($datos = array())
    {
        $this->codactividades=$datos["codactividades"];        
        $this->nombre=$datos["nombre"];
        $this->descripcion=$datos["descripcion"];
        $this->responsable=$datos["responsable"];
        $this->valoracion=$datos["valoracion"];
        $this->coddocente=$datos["coddocente"];
        $this->codtipo=$datos["codtipo"];        
    }
    
    private function getActividades()
    {
        $datos = $this->select();
        return $datos->toArray();
    }
        
    public function crearActividad($data=  array())
    {
        self::cargarAtribActividades($data);
        $array= array(
            'codactividades'=> $this->codactividades,            
            'nombre'=> $this->nombre,
            'descripcion'=> $this->descripcion,
            'responsable' => $this->responsable,
            'valoracion'=>  $this->valoracion,
            'coddocente'=> $this->coddocente,
            'codtipo'=>  $this->codtipo            
        );
        $this->insert($array);
    }
    
    public function getActividadPorId($codigo)
    {
        $codigo = (int)$codigo;
        $rowset= $this->select(array('codactividades'=>$codigo));
        $row = $rowset->current();
        
        if(!$row)
        {
            throw new Exception("No hay registros con la cedula $codigo");
        }
        
        return $row;
    }
    
    public function actualizar($id, $data=array())
    {
        $this->update($data, array('codactividades'=>$id));
    }
    
    public function borrar($id)
    {
        $this->delete(array('codactividades'=>$id));
    }
}
