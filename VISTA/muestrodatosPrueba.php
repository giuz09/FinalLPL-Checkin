<?php

		$dni = $_GET['dni'];
		$nombre = $_GET['apellido']; //en realidad es el apellido
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
		echo("La persona existe");

		$unVuelo->existeViajePersona($fecha,$vuelo); // obtengo el vuelo

		if(!(is_null($unVuelo->getIdVuelo())))
		{

			echo("   -  El vuelo existe"); //evualuo si ese vuelo corresponde a esa persona
		}
			//si ya hizo el check in
	}

	else{
		echo("No existe el vuelo cargado para dicha persona");
	}

?>



