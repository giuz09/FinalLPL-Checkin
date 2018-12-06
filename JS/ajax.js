function obtenerXHR(){
	req = false;
	if (window.XMLHttpRequest) {
		req = new XMLHttpRequest();
	}else{
		if (window.activeXObject) {
			req = new activeXObject("Microsoft.XMLHTTP");
		}
	}
	return req;
}

function desplegarDatosPasajero(){
	peticion = obtenerXHR();	
	var valor = document.getElementById("dni").value;
	peticion.open("GET","datosPasajero.php?dni="+valor,true);
	peticion.onreadystatechange = accion; 
	peticion.send(null);
	//document.write("aa");
	
	
	function accion(){ //accion que ocurre cuando ingresa el dni
	
		if (peticion.readyState == 4) {
			if (peticion.status == 200) {
				document.getElementById("respuesta").innerHTML = peticion.responseText;
			}
		}
	}
}