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
		
		
	
	$unPasajero->buscarPasajeroVuelo($dni, $nombre); //obtengo la persona
	if(!(is_null($unPasajero->getDocumento())))
	{

		echo("la persona existe");

		$unVuelo->existeViajePersona($fecha,$vuelo); // obtengo el vuelo
		if(!(is_null($unVuelo->getIdVuelo())))
		{

			echo("el vuelo existe"); //evualuo si ese vuelo corresponde a esa persona
			echo( $unVuelo->getIdVuelo());
			echo(" Continuar");
		}
			//si ya hizo el check in
	}

	else{
		echo("No existe el vuelo cargado para dicha persona");
	}

?>



