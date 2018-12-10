
function validoCampos(){

	var dni =document.getElementById('dni').value.length;
	var nombre =document.getElementById('nombre').value.length;
	var fechaViaje =document.getElementById('fechaViajar').value.length;
	var nroVuelo =document.getElementById('nroVuelo').value.length;
	var isOK=true;

	if (dni == "") {
		isOK=false;
		alert("¡Atención! Debe ingresar su numero de DNI.");
	};
	if (nombre =="") {
		isOK=false;
		alert("¡Atención! Falta igresar su nombre y apellido.");
	};
	if (fechaViaje == "") {
		isOK=false;
		alert("¡Atención! Usted no selecciono ningúna fecha de viaje.");
	};
	if (nroVuelo == "") {
		isOK=false;
		alert("¡Atención! Falta ingresar el numero de vuelo.");
	};
	

	if (isOK) { //procedo a validar que exista ese viaje
		//consultoServidor();
		return isOK;
	}

	
	/*	function consultoServidor(){
		if ($unPasajero->buscarPasajeroDNI(dni); == null) {
			alert("El nombre ingresado no coincide con el DNI");}
			else{ //si coincide se busca que esa persona tenga ese viaje ese dia
				if($unVuelo->existeViaje(fechaViaje,dni,nroVuelo)== null){
					//el vuelo no existe
					alert("No tiene un vuelo asociado");
				}
				else{ //el vuelo existe
					return isOK; //se envia el formulario
				}
		}
	}*/

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
	peticion = obtenerXHR();	
	var valor = document.getElementById("dni").value;
	peticion.open("GET","muestroDatosPrueba.php?dni="+valor,true);
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