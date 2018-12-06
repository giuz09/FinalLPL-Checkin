<!DOCTYPE html>
<html>
<head>
	<title>"Datos persona"</title>
</head>
<body>
<?php
	//	include_once("buscarPersona.php");
		$dni = $_POST['dni'];
		$nombre = $_POST['nombre'];
		$fecha = $_POST['fecha'];
		$vuelo = $_POST['vuelo'];

		echo "<br>" ."nombre: ".$nombre . "</br>";
		echo "<br>" ."dni: ".$dni . "</br>";
		echo "<br>" ."nro de vuelo: ".$vuelo . "</br>";
		echo "<br>" ."fecha: ".$fecha . "</br>";
		?>
</body>
</html>



