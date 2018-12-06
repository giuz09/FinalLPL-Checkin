<?php
    include_once ("../modelo/pasajeros.php");	
    include_once ("../modelo/vuelos.php");	
    include_once ("../modelo/aviones.php");	

	
	$codPasajero = $_POST['idPasajero'];
    $codVuelos = $_POST['idVuelo'];
    
    $vueloDetalle = vuelos::infoVuelo($codVuelos);

    

?>