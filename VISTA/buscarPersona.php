<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title> BuscarPersona </title>
	</head>
	
	<body>

		<header>
		<div></div>
		</header>  <!-- encabezado con logo de la empresa -->

		<nav> <!-- menu de la pagina --></nav>
	
		<div id= "textoInformativo"> <!-- cuadro de texto-->
		<article><br>
		<span>Web checkin </span>
		<br>
		<br>
		Reserva su asiento para su proximo vuelo.
		<br>
		</article>
		</div>
	
		<section>
			<article>

				<div id= "formulario"><br><br><br>
					<form  action="muestrodatosPrueba.php" method="post" >
					<fieldset form="formulario" id="campos" name="campos">
						<legend> Ingrese sus datos</legend>
						<br>DNI:<input type="textarea" id="dni" name="dni"placeholder="Ej. 38517708" requiered><br>
						<br>Nombre y apellido:<input type="textarea" id="nombreApellido" name="nombre" placeholder="Juan Perez" requiered><br>
						<br>Fecha a viajar<input type="date" id="fechaViajar" name="fecha" min="07/04/2017" max="07/04/2050" required><br>
						<br>Nro de vuelo:<input type="textarea" id="nroVuelo" name="vuelo" placeholder="AB0089" requiered><br>
											
						<br>
						  <input type="submit" name="submit" value="Submit" />
						
					</fieldset>
					</form>
				</div>
				
			</article>
		</section>
	</body>
</html>