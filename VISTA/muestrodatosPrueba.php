<?php

		$dni = $_POST['dni'];
		$nombre = $_POST['nombre'];
		$fecha = $_POST['fecha'];
		$vuelo = $_POST['vuelo'];

		include_once ("../modelo/pasajero.php");		
			
		$unPasajero = new Pasajero();
		echo("hola");
		//se realizan las consultas al servidor

		if(!(is_null($unPasajero-> buscarPasajeroDNI($dni))){

				echo"<br><br><br>Nombre y apellido: "."<textarea>".$unPasajero->getNombres().", ".$unPasajero->getApellido()."</textarea><br>";
		}

?>



