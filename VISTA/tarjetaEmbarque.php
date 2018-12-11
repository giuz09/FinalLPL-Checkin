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
include_once ("../modelo/vuelo.php");

$asiento = $_POST['asiento'];

if ( $_SESSION["pasajero"] ){

    
    echo $_SESSION["idVuelo"];
    
}
//  $codVuelos = $_POST['idVuelo'];


?>


</body>