<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/> 
	<title> tarjetaEmbarque </title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<?php

$asiento = $_POST['asiento'];
echo $_SESSION["pasajero"];
if ( $_SESSION["pasajero"] ){

    echo $_SESSION["pasajero"];
}
//  $codVuelos = $_POST['idVuelo'];


?>


</body>