<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"/> 
	<title> tarjeta Embarque </title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<?php
include_once ("../modelo/vuelo.php");

$asiento = $_POST['asiento'];
echo "Asiento ".$asiento[0]; 
echo " nro Butaqca ".substr($asiento, 1, 3);


?>


</body>