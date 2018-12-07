<?php
include_once("base.php");

class Aviones {
	
	private $idAvion;
	private $fabricante;	
	private $modelo;
	private $matricula;
	private $filas;
	private $butacasFila;

	
	function __construct(){		
	}
	


		function infoAvion($idAvion){	
		$db = BaseDatos::getInstance();			
		$sql = "SELECT aviones.* 
				FROM aviones where idAvion = '".$idAvion"'";
		
		$result=$db->ejecutar($sql);	
		$datos =$db->resultados($result);
		$this->datosAvion($datos);		
		}
	
		function datosAvion($datos){
				$this->idAvion = $datos['idAvion'];
				$this->fabricante = $datos['fabricante'];
				$this->modelo = $datos['modelo'];
				$this->matricula = $datos['matricula'];
				$this->filas = $datos['filas'];
				$this->butacasFila = $datos['butacasFila'];
				
			}			
	

		
		
	public function getIdAvion()
		{ return $this->idAvion;}
		
	public function getFabricante()
		{ return $this->fabricante;}
					
	public function getModelo()
		{ return $this->modelo;}
		
	public function getMatricula()
		{ return $this->matricula;}
		
	public function getFilas()
		{ return $this->filas;}
			
	public function getButacasFila()
		{ return $this->butacasFila;}		
		
		
	
	public function setIdAvion($v)
		{ $this->idAvion = $v;}
		
	public function setFabricante($v)
		{ $this->fabricante = $v;}
			
	public function setModelo($v)
		{ $this->modelo = $v;}
		
	public function setMatricula($v)
		{ $this->matricula = $v;}
		
	public function setFilas($v)
		{$this->filas = $v;}
			
	public function setButacasFila($v)
		{ $this->butacasFila = $v;}	
		
	
}
?>