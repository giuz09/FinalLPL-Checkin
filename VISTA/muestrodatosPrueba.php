<?php

		$dni = $_GET['dni'];
		$nombre = $_GET['nombre'];
		$fecha = $_GET['fecha'];
		$vuelo = $_GET['vuelo'];

		include_once ("../modelo/pasajero.php");
		include_once ("../modelo/vuelo.php");		
			
		$unPasajero = new Pasajero();
		$unVuelo = new Vuelo();


///consultas del lado del servidor
		
		
	$unPasajero-> buscarPasajeroDNI($dni, $nombre);
	if(is_null($unPasajero->getDocumento()))
	{
		//si no es nulo significa que existe el pasajero
		//if(!(is_null($unVuelo->existeViaje()))){
		//evalua que exista el viaje avanza a la siguiente pantalla
			
	echo(" no existe");
			//si ya hizo el check in

	}
		
	
	else{
		echo(" existe");
	}

?>



