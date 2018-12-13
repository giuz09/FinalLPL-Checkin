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
			FROM pasajeros where documento = ".$dni; 
	
	
	$result=$db->ejecutar($sql);	
	$datos =$db->resultados($result);
	$this->datosPasajero($datos);	
	}

	function buscarPasajeroVuelo($dni, $nomb){	
		$db = BaseDatos::getInstance();			
		$sql =  "SELECT * 
				FROM pasajeros
			 	where documento = '".$dni."' and apellido = '".$nomb."'";
		
		$result=$db->ejecutar($sql);	
		$datos =$db->resultados($result);
		$this->datosPasajero($datos);	
		//WHERE documento=".$dni." AND nombres =".$nomb.";	
	}


		function datosPasajero($datos){
		$this->idPasajero = $datos['idPasajero'];
		$this->apellido = $datos['apellido'];
		$this->nombres = $datos['nombres'];
		$this->documento = $datos['documento'];
		$this->correo = $datos['correo'];
		$this->telefono = $datos['telefono'];
		 
	
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
		{$this->correo = $v;}
			
	public function setTelefono($v)
		{ $this->telefono = $v;}	
		
		
}
?>