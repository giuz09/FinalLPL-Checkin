<?php
include_once("base.php");

class Vuelo {
	
	private $idVuelo;
	private $numero;	
	private $origen;
	private $destino;
	private $fecha;
	private $horaSalida;
	private $horaLlegada;
	private $idAvion;
	
	function __construct(){		
	}


		function infoVuelo($idVuelo){	
		$db = BaseDatos::getInstance();			
		$sql = "SELECT vuelos.* 
				FROM vuelos where idVuelo = '".$idVuelo."'";
		
		$result=$db->ejecutar($sql);	
		$datos =$db->resultados($result);
		$this->datosVuelo($datos);		
		}
	
		function datosVuelo($datos){		
		$this->idVuelo = $datos['idVuelo'];
		$this->numero = $datos['numero'];
		$this->origen = $datos['origen'];
		$this->destino = $datos['destino'];
		$this->fecha = $datos['fecha'];
		$this->horaSalida = $datos['horaSalida'];
		$this->horaLlegada = $datos['horaLlegada'];
		$this->idAvion = $datos['idAvion'];
		}	


		function asientosReservados($idVuelo){	
			$db = BaseDatos::getInstance();			
			$sql = "SELECT fila,butaca 
					FROM vuelos 
					LEFT JOIN pasajerosvuelos ON  pasajerosvuelos.idVuelo = vuelos'".$idVuelo."'";
			
			$result=$db->ejecutar($sql);	
			$datos =$db->filas($result);
			return $datos;			
		}
			
		function reservarAsiento($idVuelo,$idPasajero,$fila,$butaca){	
			$db = BaseDatos::getInstance();			
			$sql = "INSERT INTO pasajerosvuelos (fila, butaca, idVuelo, idPasajero) 
			VALUES ('".$fila."', '".$butaca."', '".$idVuelo."', '".$idPasajero."')";			
			$result=$db->ejecutar($sql);		
		}	
		
	public function getIdVuelo()
		{ return $this->idVuelo;}
		
	public function getNumero()
		{ return $this->numero;}
			
	public function getOrigen()
		{ return $this->origen;}
		
	public function getDestino()
		{ return $this->destino;}
		
	public function getFecha()
		{ return $this->fecha;}
			
	public function getHoraSalida()
		{ return $this->horaSalida;}	
		
	public function getHoraLlegada()
		{ return $this->horaLlegada;}
			
	public function getIdAvion()
		{ return $this->idAvion;}		
		
		
	
	public function setIdVuelo($v)
		{ $this->idVuelo = $v;}
		
	public function setNumero($v)
		{ $this->numero = $v;}
			
	public function setOrigen($v)
		{ $this->origen = $v;}
		
	public function setDestino($v)
		{ $this->destino = $v;}
		
	public function setFecha($v)
		{$this->fecha = $v;}
			
	public function setHoraSalida($v)
		{ $this->horaSalida = $v;}	
		
	public function setHoraLlegada($v)
		{ $this->horaLlegada = $v;}
			
	public function setIdAvion($v)
		{ $this->idAvion = $v;}
	
}
?>