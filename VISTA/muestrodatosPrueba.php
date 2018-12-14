<?php
session_start();

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
			$unVuelo->existeViaje($unPasajero->getIdPasajero(),$unVuelo->getIdVuelo());
			$condicion = ($unVuelo->existeViaje($unPasajero->getIdPasajero(),$unVuelo->getIdVuelo()));
			
			$_SESSION["idVuelo"] = $unVuelo->getIdVuelo() ;
			$_SESSION["idPasajero"] = $unPasajero->getIdPasajero();	
			$_SESSION["idAvion"] = $unVuelo->getIdAvion();	
			
			if(($unVuelo->getButaca()) > 1 ){ //si tiene fila asignada y butaca significa que ya hizo el  check in

			echo '<meta http-equiv="Refresh" content="0;URL= ../pdf/fpdf/tarjeta.php">';

				echo ("Fila: ".$unVuelo->getFila());
				echo ("Butaca: ".$unVuelo->getButaca());
			}
			else{ //significa que no hizo todavia el check in, dirige a la vista de la grilla para hacerlo.
				
				echo '<meta http-equiv="Refresh" content="0;URL= ../vista/mapaAsientos.php">';
			
			}

		}
			//si ya hizo el check in
	}

	else{

		
		echo("No existe el vuelo cargado para dicha persona");
	}
	

?>



