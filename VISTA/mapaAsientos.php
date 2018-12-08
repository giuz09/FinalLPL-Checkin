<?php
    include_once ("../modelo/pasajero.php");	
    include_once ("../modelo/vuelo.php");	
    include_once ("../modelo/avion.php");	

	
	//$codPasajero = $_POST['idPasajero'];
  //  $codVuelos = $_POST['idVuelo'];
    
    $unVuelo = vuelo::infoVuelo(1);
    $unAvion = avion::infoAvion(1);


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

    function estaReservado($caracterFila,$butacasFila){
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
        $caracterFila = nroFilaCaracter($fila);
        
        
        for ($butacasFila=0; $butacasFila <=$unAvion->getButacasFila() ; $butacasFila++) {
            # recorro por butacas en la fila
            
            if (estaReservado($caracterFila,$butacasFila)){
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
    echo "</table>";

    

?>