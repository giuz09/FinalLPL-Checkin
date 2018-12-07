<?php
    include_once ("../modelo/pasajero.php");	
    include_once ("../modelo/vuelo.php");	
    include_once ("../modelo/avion.php");	

	
	$codPasajero = $_POST['idPasajero'];
    $codVuelos = $_POST['idVuelo'];
    
    $unVuelo = vuelo::infoVuelo($codVuelos);
    $unAvion = avion::infoAvion($unVuelo->getIdAvion());



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

    

    function estaOcupado($caracterFila,$butacasFila){
        $asientos = vuelo::asientosReservados($unVuelo->getIdAvion());
        $condicion = false;
        foreach ($asientos as $value) {
            # code...
           $condcion1= ($value['fila'] == $fila);
           $condcion2= ($value['butaca'] == $butacasFila);
           if ($condcion1 && $condcion2) {
               # si la fila y butaca son las mismas
               $condicion = true;
           } 
        }
        return $condicion;

    }
    

    echo "<table class='mapaAsientos' border='1px'>";
    for ($fila=0; $fila <= $unAvion->getFilas() ; $fila++) {
        # recorro por filas
        $caracterFila = nroFilaCaracter($fila)
        '<tr>'.$fila.'</tr>';
        echo "<tr>";
        for ($butacasFila=0; $butacasFila <=$unAvion->getButacasFila() ; $butacasFila++) {
            # recorro por butacas en la fila
            
            if estaOcupado($caracterFila,$butacasFila){
                echo "<td><input type='radio' disabled checked></td>"; 
            }
            else {
                # sino puedo reservar
                echo "<td><input type='radio' checked></td>"; 
            }
            
            
        }
        echo"</tr>";
    }
    echo "</table>";

    

?>