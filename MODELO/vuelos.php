<?php
include_once("base.php");

class Vuelos {
	
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