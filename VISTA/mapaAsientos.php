<?php
session_start();
ini_set("session.gc_maxlifetime","7200"); 
?>
<!DOCTYPE html>
<html>
<head>

<div class="topnav">  
  <a href="#contact">Contacto</a> 
  <a class="active" href="../vista/buscoPasajero">Check-in</a>
  <a href="#news">Sobre Nosotros</a>
  <a href="../vista/index.html">Inicio</a> 
  <ia href="../vista/index.html" ><img id="logo"  href="../vista/index.html" src="../images/icono.png"> ADA AIRLINES </ia> 
</div>

	<meta charset="utf-8"/> 
	<title> mapa de Asientos </title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>

<body>
<h1> MAPA DE ASIENTOS </h1>
<h2> ... </h2>
<?php
    include_once ("../modelo/pasajero.php");	
    include_once ("../modelo/vuelo.php");	
    include_once ("../modelo/avion.php");
    	
    $unVuelo = new Vuelo();
    $unAvion = new Avion();
    
    if(isset($_SESSION["idVuelo"]) && !empty($_SESSION["idVuelo"])) {
        #la session esta seteada
    
    $unVuelo->infoVuelo( $_SESSION["idVuelo"]);
    $unAvion->infoAvion( $_SESSION["idAvion"]);
    $unVuelo->existeViaje($_SESSION["idPasajero"] ,$_SESSION["idVuelo"]);


    function nroFilaCaracter($numeroFila){
        switch ($numeroFila) {
            case 1: return 'A';
                break;
            case 2: return 'B';
                break;
            case 3: return 'C';
                break;
            case 4: return 'D';
                break;
            case 5: return 'E';
                break;
            case 6: return 'F';
                break;
            case 7: return 'G';
                break;
            case 8: return 'H';
                break;
            default:
                # por defecto
                break;
            }}    


            if ($unVuelo->getButaca() == 0){
            echo "<div class='bordes-transparentes' id='padding_box'>";
            echo "<form class='formularioAsiento' action='tarjetaEmbarque.php' method='post' name='formulario' id='formulario'>";    
            echo "<table class='mapaAsientos' border='1px'>";   

            for ($fila=0; $fila <= $unAvion->getFilas() ; $fila++) {
                # recorro por filas
                $caracterFila = nroFilaCaracter($fila);
                
                echo "<tr>";
                echo "<td>".$caracterFila;
                echo "</td>";
        

            for ($butacasFila=1; $butacasFila <=$unAvion->getButacasFila() ; $butacasFila++) {
                # recorro por butacas en la fila            
                if ($fila == 0) {
                    # en esta fila se muestra el nro de butacas por fila...                
                    echo "<td>".$butacasFila;
                    echo "</td>";
                }
                else {
                    # en las demas filas se muestra el check para seleccionar el asiento  
                    $condicion = $unVuelo->asientosReservados($unVuelo->getIdVuelo(),$caracterFila,$butacasFila);                   
                    if ($condicion){
                        #si no se puede reservar
                            echo "<td style='background-color:#a9a9a9' > <label class='deshabilitado'>
                               
                                <div class='layer'></div>
                                <div class='button'><span></span></div>
                                </label>";
                            echo "</td>"; 
                    }
                    else {
                        # sino puedo reservar
                        echo "<td style='background-color:#CAEBF2' ><input type='radio' name='asiento'  value='".$caracterFila.$butacasFila."' checked></td>";
                    }
            }                    
        }
        echo "</tr>";        
    }
    echo "</table>";
    echo "<p><input type='submit' value=' Reservar asiento '/></p>";
    echo "</form>";
    echo "</div>";
    }
    else {
        # si ya esta reservado
        $_SESSION["fila"]= $unVuelo->getFila(); 
	    $_SESSION["butaca"]=$unVuelo->getButaca();
        echo "<form class='formularioAsiento' action='tarjetaEmbarque.php' method='post' name='formulario' id='formulario'>";            
        echo "<p><input type='submit' value=' Asiento ya reservado '/></p>";
        echo "</form>";
    }
}
else {
    # la session expiro 
    echo " La sesión ha expirado, recargue la página ";
}

?>


</body>
<div id="footer">
<div id="footerLeft"> UNPSJB - Laboratorio de Programación y Lenguajes - 2018 </div>
<div id="footerRight">Desarrollado por Lia Moreno y Giuliana Zandomeni </div>
</div>