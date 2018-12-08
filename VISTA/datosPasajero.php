<?php
include_once ("../modelo/pasajero.php");		
			
	$unPasajero = new Pasajero();	

	if(($_GET['dni'])>10000000){ //si es un dni busca una persona asociada a ese dni

		$unPasajero->buscarPasajeroDNI($_GET['dni']);
		echo"<br><br><br>Nombre y apellido: "."<textarea>".$unPasajero->getNombres().", ".$unPasajero->getApellido()."</textarea><br>";
		////se permite elegir la fecha de viaje y se busca si hay vuelo para ese dia
		///en caso de que no haya 

		echo"Fecha a viajar<input type="."date" ."id="."fechaViajar" ."name="."fecha" ."min="."07/04/2017" ."max="."07/04/2050" ."><br>
						<br>Nro de vuelo:<input type="."textarea" ."id="."nroVuelo" ."name="."vuelo" ."placeholder="."AB0089" ."requiered><br>";

	}
//	echo $unPasajero->getNombres();
	
	?>