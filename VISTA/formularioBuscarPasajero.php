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
		<script type="text/javascript" src="../js/ajax.js"></script>
		</article>
		</div>
	
		<section>
			<article>

				<div id= "contenido"><br><br><br>

					<form name="formulario" id="formulario">
						<table border="1"><tbody>
							<tr><td><input type="text" name="dni" id="dni"
							 onKeyup="desplegarDatosPasajero();"></td>	
					</tbody></table>			
					</form>						
				</div>
				<div id="respuesta"></div>
				
			</article>
		</section>
	</body>
</html>