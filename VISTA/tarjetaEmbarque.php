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
<div class="topnav">
  
  
  <a href="#contact">Contacto</a> 
  <a class="active" href="formularioBuscarPasajero.php">Check-in</a>
  <a href="#news">Sobre Nosotros</a>
  <a href="#home">Inicio</a>
  
</div>
	<meta charset="utf-8"/> 
	<title> MAPA DE ASIENTOS </title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
<h1> TARJETA DE EMBARQUE </h1>
<h2> ... </h2>
<body>

<?php
include_once ("../modelo/vuelo.php");

if (!empty($_POST['asiento'])) {
	# code...
	$asiento = $_POST['asiento'];
	$unVuelo->reservarAsiento($idVuelo,$idPasajero,$asiento[0],substr($asiento, 1, 3));
	echo "Asiento ".$asiento[0]; 
	echo " nro Butaqca ".substr($asiento, 1, 3);
	$_SESSION["fila"]= $asiento[0]; 
	$_SESSION["butaca"]=substr($asiento, 1, 3);
}





$idVuelo = $_SESSION["idVuelo"];
$idPasajero = $_SESSION["idPasajero"];
$idAvion = $_SESSION["idAvion"];
$unVuelo = new Vuelo();




///cargo en el arreglo de sesion la butaca y la fila



echo"<form method="."post"." action="."../pdf/fpdf/tarjeta.php"."><input type="."submit"." value="."Imprimir tarjeta embarque"."></form>";
//boton que direcciona al pdf le envia idPasajero idVuelo butaca y fila

?>

<div id="footer">
<div id="footerLeft"> UNPSJB - Laboratorio de Programación y Lenguajes - 2018 </div>
<div id="footerRight">Desarrollado por Lia moreno y Giuliana Zandomeni </div>
</div>
</body>