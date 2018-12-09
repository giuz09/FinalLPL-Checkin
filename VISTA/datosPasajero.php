<?php
include_once ("../modelo/pasajero.php");
include_once ("../modelo/vuelo.php");
	?>
	<script type="text/javascript" src="../js/ajax.js"></script>
	<?php
		
	$unPasajero = new Pasajero();
	$unVuelo = new Vuelo();
	

	if(($_GET['dni'])>10000000){ //una vez que ingresa 8 numeros
		$unPasajero->buscarPasajeroDNI($_GET['dni']);
		
		if(is_null($unPasajero->getNombres())){echo "No tiene vuelos asociados a su DNI";}	
		
	else{ //si esta registrado le permite hacer el check in
			echo"<!DOCTYPE html><html><body>";
			
			echo"<form name="."formu"."action=".$unVuelo->validoFechaVuelo()."method="."post".">"

					."<br>Nombre y apellido: "."<textarea>".$unPasajero->getNombres().", ".$unPasajero->getApellido()."</textarea><br>".
					"Fecha a viajar:  "."<input type=date id="."fechaViajar"."name="."fecha"."min="."07/04/2017"."max="."07/04/2050".">"
					."<br>Nro de vuelo:<input type="."number id="."nroVuelo"."><br>"
					."<button type="."submit".">"."Continuar"."</button>"
							 ."</form>";
		
			echo"</div><div id="."respuesta"."></div>";
			echo"</html></body>";
	}
}
?>
