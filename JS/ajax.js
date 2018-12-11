
	
	function validoCampos(){
		//validacion del lado del cliente

	var d =document.getElementById('dni').value.length;
	var n =document.getElementById('nombre').value.length;
	var f =document.getElementById('fecha').value.length;
	var v =document.getElementById('nroVuelo').value.length;
	var isOK=true;

	if (d == "") {
		isOK=false;
		alert("¡Atención! Debe ingresar su numero de DNI.");
	};
	if (n =="") {
		isOK=false;
		alert("¡Atención! Falta igresar su nombre y apellido.");
	};
	if (f == "") {
		isOK=false;
		alert("¡Atención! Usted no selecciono ningúna fecha de viaje.");
	};
	if (v == "") {
		isOK=false;
		alert("¡Atención! Falta ingresar el numero de vuelo.");
	};
	

	if (isOK) { //procedo a validar que exista ese viaje
	
		return desplegarDatosPasajero();
	} else {
	return isOK;
	}


	}


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
	var d =document.getElementById('dni').value;
	var n =document.getElementById('nombre').value;
	var f =document.getElementById('fecha').value;
	var v =document.getElementById('nroVuelo').value;

	peticion = obtenerXHR();	
	
	peticion.open("GET","muestrodatosPrueba.php?dni="+d+"&nombre="+n+"&fecha="+f+"&vuelo="+f,true);
	peticion.onreadystatechange = accion; 
	peticion.send(null);
	return true;
	//document.write("aa");
	
	
	function accion(){ //accion que ocurre cuando ingresa el dni
	
		if (peticion.readyState == 4) {
			if (peticion.status == 200) {
				document.getElementById("respuesta").innerHTML = peticion.responseText;
			}
		}
	}



}