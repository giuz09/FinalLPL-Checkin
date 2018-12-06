<?php
include_once ("../modelo/pasajero.php");		
			
	$unPasajero = new Pasajero();	
	//buscarPasajeroDNI($_GET['dni']);	
	if(($_GET['dni'])>10000000){

			echo"<br><br><br>Nombre y apellido:<input type="."textarea" ."id="."nombreApellido" ."name="."nombre" ."placeholder="."Juan Perez" ."disable="."true"."><br>  
						<br>Fecha a viajar<input type="."date" ."id="."fechaViajar" ."name="."fecha" ."min="."07/04/2017" ."max="."07/04/2050" ."><br>
						<br>Nro de vuelo:<input type="."textarea" ."id="."nroVuelo" ."name="."vuelo" ."placeholder="."AB0089" ."requiered><br>";
	}
//	echo $unPasajero->getNombres();
	
	?>