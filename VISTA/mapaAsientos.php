<?php
    include_once ("../modelo/pasajero.php");	
    include_once ("../modelo/vuelo.php");	
    include_once ("../modelo/avion.php");	

	
	$codPasajero = $_POST['idPasajero'];
    $codVuelos = $_POST['idVuelo'];
    
    $unVuelo = vuelo::infoVuelo($codVuelos);
    $unAvion = avion::infoAvion($unVuelo->getIdAvion());

    function caracterFila($numeroFila){
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
            }



    for ($fila=0; $fila <= $unAvion->getFilas() ; $fila++) { 
        # code...
        for ($butacasFila=0; $butacasFila <=$unAvion->getButacasFila() ; $butacasFila++) { 
            # code...
            echo "<td><input type='radio' enable checked></td>"; 
        }
    }

    

?>