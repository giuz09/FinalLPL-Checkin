<?php

		$dni = $_GET['dni'];
		$nombre = $_GET['nombre']; //en realidad es el apellido
		$fecha = $_GET['fecha'];
		$vuelo = $_GET['vuelo'];

		include_once ("../modelo/pasajero.php");
		include_once ("../modelo/vuelo.php");		
			
		$unPasajero = new Pasajero();
		$unVuelo = new Vuelo();


///consultas del lado del servidor
		
	$unPasajero->buscarPasajeroVuelo($dni,$nombre); //obtengo la persona
	if(!(is_null($unPasajero->getDocumento())))
	{
		echo("la persona existe");

		$unVuelo->existeViajePersona("2018-12-14","1"); // obtengo el vuelo
		
		echo ("vuelo : ".strval($vuelo));
		echo ("fecha : ".strval($fecha));

		if(!(is_null($unVuelo->getIdVuelo())))
		{

			echo("el vuelo existe"); //evualuo si ese vuelo corresponde a esa persona
		}
			//si ya hizo el check in
	}

	else{
		echo("No existe el vuelo cargado para dicha persona");
	}

?>



