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
	private $butaca;
	private $fila;
	
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

		function datosViajePasajero($datos){		
		$this->idVuelo = $datos['idVuelo'];
		$this->idPasajero = $datos['idPasajero'];
		$this->fila = $datos['fila'];
		$this->butaca = $datos['butaca'];
		}

		function asientosReservados($idVuelo,$caracterFila,$butaca){	
			$db = BaseDatos::getInstance();			
			$sql = "SELECT fila,butaca 
					FROM pasajerosvuelos 
					where fila = '".$caracterFila."' and butaca = '".$butaca."' and idVuelo = '".$idVuelo."'";
			$result=$db->ejecutar($sql);	
			$datos =$db->filas($result);
			return $datos;			
		}

		function obtengoIdVuelo($nroVueloI){

			$db = BaseDatos::getInstance();	
			$sql = "SELECT idVuelo
					FROM vuelos
					WHERE  numero'".$nroVueloI."'";

			$result=$db->ejecutar($sql);	
			$datos =$db->resultados($result);
			return $this->db->query($query)->result_array();	
		}


		function existeViaje($idPasa,$idVue){
			$db = BaseDatos::getInstance();	
			$sql = "SELECT * 
					FROM pasajerosvuelos
					where idPasajero = '".$idPasa."' and idVuelo = '".$idVue."'";
			 	

			$result=$db->ejecutar($sql);	
			$datos =$db->resultados($result);
			return $this->datosViajePasajero($datos);		

		}


	

		function existeViajePersona($fechaI,$nroVueloI){
			$db = BaseDatos::getInstance();	
			$sql = "SELECT * 
					FROM vuelos
					where numero = '".$nroVueloI."' and fecha = '".$fechaI."'";
			 	

			$result=$db->ejecutar($sql);	
			$datos =$db->resultados($result);
			return $this->datosVuelo($datos);		

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
	
	public function getFila()
		{ return $this->fila;}		
	public function getButaca()
		{ return $this->butaca;}			
		
	
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