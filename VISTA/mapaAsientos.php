<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/> 
	<title> Mapa de asiento </title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<?php
    include_once ("../modelo/pasajero.php");	
    include_once ("../modelo/vuelo.php");	
    include_once ("../modelo/avion.php");	

	
	//$codPasajero = $_POST['idPasajero'];
    //  $codVuelos = $_POST['idVuelo'];
    $unVuelo = new Vuelo();
    $unAvion = new Avion();

    $unVuelo->infoVuelo(1);    
    $unAvion->infoAvion(1);

    // $listaAsientos = $unVuelo->asientosReservados($unVuelo->getIdAvion());


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
                # code...
                break;
            }}    

    // function estaReservado($caracterFila,$butacasFila){
    //     $asientos = $unVuelo->asientosReservados($unVuelo->getIdAvion());
    //     $condicion = false;
    //     foreach ($asientos as $value) {
    //         # code...
    //        $condcion1= ($value['fila'] == $fila);
    //        $condcion2= ($value['butaca'] == $butacasFila);
    //        if ($condcion1 && $condcion2) {
    //            # si la fila y butaca son las mismas
    //            $condicion = true;
    //        }
    //     }
    //     return $condicion;

    // }
    
    

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
                $condicion = true;                   
                if ($condicion){
                    #si no se puede reservar
                    echo "<td> <label class='orange'>
                    <input type='radio' name='asiento' value='orange' disabled checked>
                        <div class='layer'></div>
                        <div class='button'><span></span></div>
                    </label>
                    </td>"; 
                }
                else {
                    # sino puedo reservar
                    echo "<td><input type='radio' name='asiento' value='habilitado' checked></td>";
                }
        }
            
            
        }
        echo "</tr>";
        
    }
    echo "</table>";

    

?>
</body>