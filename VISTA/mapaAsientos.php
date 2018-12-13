<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

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
<h1> MAPA DE ASIENTOS </h1>
<h2> ... </h2>
<?php
    include_once ("../modelo/pasajero.php");	
    include_once ("../modelo/vuelo.php");	
    include_once ("../modelo/avion.php");
    
	//$codPasajero = $_POST['idPasajero'];
    //$codVuelos = $_POST['idVuelo'];
    $unVuelo = new Vuelo();
    $unAvion = new Avion();
    $unPasajero = new Pasajero();


    $unVuelo->infoVuelo(1);   
    $unAvion->infoAvion($unVuelo->getIdAvion());

    $_SESSION["idVuelo"] = $unVuelo->getIdVuelo();
    $_SESSION["idPasajero"] = $unPasajero->getIdPasajero();
    $_SESSION["idAvion"] = $unAvion->getIdAvion();
    
    
  


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


    
            echo "<div class='bordes-transparentes' id='padding_box'>";
            echo "<form action='tarjetaEmbarque.php' method='post' name='formulario' id='formulario'>";    
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
?>


</body>
<div id="footer">
<div id="footerLeft"> UNPSJB - Laboratorio de Programación y Lenguajes - 2018 </div>
<div id="footerRight">Desarrollado por Lia moreno y Giuliana Zandomeni </div>
</div>