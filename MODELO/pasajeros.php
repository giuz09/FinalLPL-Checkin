<?php
include_once("base.php");

class Pasajero {
	
	private $idPasajero;
	private $apellido;
	private $nombres;
	private $documento;
	private $correo;
	private $telefono;
	
	function __construct(){		
	}

	function buscarPasajeroDNI($dni){	
	$db = BaseDatos::getInstance();			
	$sql = "SELECT idPasajero, apellido, nombres, documento, 
			correo, telefono 
			FROM pasajero where documento like = ".$documento; 
	
	$result=$db->ejecutar($sql);	
	$datos =$db->resultados($result);
	$this->buscarPasajeroDNI($datos);	
	}
	
		
	public function getIdPasajero()
		{ return $this->idPasajero;}
		
	public function getApellido()
		{ return $this->apellido;}
			
	public function getNombres()
		{ return $this->nombres;}
		
	public function getDocumento()
		{ return $this->documento;}
		
	public function getCorreo()
		{ return $this->correo;}
			
	public function getTelefono()
		{ return $this->telefono;}	
		
		
		
	
	public function setIdPasajero($v)
		{ $this->idPasajero = $v;}
		
	public function setApellido($v)
		{ $this->apellido = $v;}
			
	public function setNombres($v)
		{ $this->nombres = $v;}
		
	public function setDocumento($v)
		{ $this->documento = $v;}
		
	public function setCorreo($v)
		{$this->vProteinas = $v;}
			
	public function setHidratos($v)
		{ $this->vHidratos = $v;}	
		
	public function setGrasas($v)
		{ $this->vGrasas = $v;}
			
	public function setIndice($v)
		{ $this->vIg = $v;}
	
}
?>