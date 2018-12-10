<?php

class BaseDatos {
	private $servidor;
	private $usuario;
	private $password;
	private $base_datos;
	private $link;
	private $result;
	static $_instance;
		
	private function __construct(){
		include ("config.sqli.php");
		$this->usuario=USER;
		$this->password=PASS;
		$this->servidor=HOST;
		$this->base_datos=DB;
		$this->conectar();
	}
	
	private function __clone(){}	
	public static function getInstance(){
		if(!(self::$_instance instanceof self)){
			self::$_instance=new self();
		}
		return self::$_instance;
	}
	/* Realliza la conexión a la base de datos */
	public function conectar(){		
		$this->link=mysqli_connect($this->servidor, $this->usuario, $this->password,$this->base_datos);
		mysqli_select_db($this->link,$this->base_datos);
		@mysqli_query("SET NAMES 'utf8'");
	}
		/*metodo para ejecutar una secuencia sql*/
	public function ejecutar($sql){
		$this->result=mysqli_query($this->link,$sql);		
		return $this->result;
	}
	/* metodo para obtener una fila de resultados de la sentencia sql */
	public function resultados($result){
	if (!empty($result)){
		$this->array=mysqli_fetch_assoc($result);
		return $this->array;
	}
	}
	public function filas($result){
		if (!empty($result)){
		$this->array=mysqli_fetch_array($result);
		return $this->array;
	}
	}
	
	public function cantidad($result){
		$numero_filas = mysqli_num_rows($result);
	return $numero_filas;
	}
	
	
	

}













?>

