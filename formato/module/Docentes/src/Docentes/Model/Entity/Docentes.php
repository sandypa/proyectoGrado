<?php

namespace Docentes\Model\Entity;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;

class Docentes extends TableGateway
{
    private $cedula;
    private $apellidos;
    private $nombres;
    private $codigo;
    private $facultad;
    private $unidadacademica;
    private $semestre;
    private $formacion;
    private $direccion;
    private $telefono;
    private $correo;
    
    public function __construct(Adapter $adapter=null, $databaseSchema=null, ResultSet $selectResultProtorype=null)
    {
        return parent::__construct('docentes', $adapter, $databaseSchema, $selectResultProtorype);
    }
    
    function getCedula() {
        return $this->cedula;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getFacultad() {
        return $this->facultad;
    }

    function getUnidadacademica() {
        return $this->unidadacademica;
    }

    function getSemestre() {
        return $this->semestre;
    }

    function getFormacion() {
        return $this->formacion;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setFacultad($facultad) {
        $this->facultad = $facultad;
    }

    function setUnidadacademica($unidadacademica) {
        $this->unidadacademica = $unidadacademica;
    }

    function setSemestre($semestre) {
        $this->semestre = $semestre;
    }

    function setFormacion($formacion) {
        $this->formacion = $formacion;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    private function cargarAtribDocen($datos = array())
    {
        $this->cedula=$datos["cedula"];
        $this->apellidos=$datos["apellidos"];
        $this->nombres=$datos["nombres"];
        $this->codigo=$datos["codigo"];
        $this->facultad=$datos["datos"];
        $this->unidadacademica=$datos["unidadacademica"];
        $this->semestre=$datos["semestre"];
        $this->formacion=$datos["formacion"];
        $this->direccion=$datos["direccion"];
        $this->telefono=$datos["telefono"];
        $this->correo=$datos["correo"];
    }
    
    private function getDocentes()
    {
        $datos = $this->select();
        return $datos->toArray();
    }
    
    public function getDocentesPorId($cc)
    {
        $cc = (int)$cc;
        $rowset= $this->select(array('cedula'=>$cc));
        $row = $rowset->current();
        
        if(!$row)
        {
            throw new Exception("No hay registros con la cedula $cc");
        }
        
        return $row;
    }
    
    public function crearDocente($data=  array())
    {
        self::cargarAtribDocen($data);
        $array= array(
            'cedula'=> $this->cedula,
            'apellidos'=> $this->apellidos,
            'nombres'=> $this->nombres,
            'codigo'=> $this->codigo,
            'facultad' => $this->facultad,
            'unidadacademica'=>  $this->unidadacademica,
            'semestre'=> $this->semestre,
            'formacion'=>  $this->formacion,
            'direccion'=> $this->direccion,
            'telefono'=> $this->telefono,
            'correo'=> $this->correo
        );
        $this->insert($array);
    }
    
    public function actualizarDocente($id, $data=array())
    {
        $this->update($data, array('id'=>$id));
    }
    
    public function borrarDocente($id)
    {
        $this->delete(array('cedula'=>$id));
    }
}
