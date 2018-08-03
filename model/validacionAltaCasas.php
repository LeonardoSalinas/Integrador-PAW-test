<?php

	$field = $_GET['campo'];
	$value = $_GET['valor'];

	//Validacion DIRECCION

	if ($field == "direccion"){
		if (strlen($value) == 0){
			echo "Por favor, ingrese una direccion";
		} else{
			echo "OK";
		}
	}

	//Validacion CIUDAD

	if ($field == "ciudad"){
		if (strlen($value) == 0){
			echo "Por favor, ingrese una ciudad";
		} else{
			echo "OK";
		}
	}

	//Validacion TRANSACCION

	if ($field == "transaccion"){
		if ($value != "Alquiler" && $value != "Venta" && $value != "Ambos"){
			echo "Por favor, ingrese una opcion valida";
		} else{
			echo "OK";
		}
	}

	//Validacion TIPO

	if ($field == "tipo"){
		if ($value != "Casa" && $value != "Casa-Quinta" && $value != "Departamento" && $value != "Terreno" && $value != "Negocio" && $value != "Deposito"){
			echo "Por favor, ingrese una opcion valida";
		} else{
			echo "OK";
		}
	}

	//Validacion METROS2

	if ($field == "metros2"){
		if (!is_numeric($value)){
			echo "Por favor, ingrese un valor solo numerico";
		} else{
			echo "OK";
		}
	}

	//Validacion UBICACION

	if ($field == "ubicacion"){
		if ($value != "Centrica" && $value != "Urbana" && $value != "Lejana"){
			echo "Por favor, ingrese una opcion valida";
		} else{
			echo "OK";
		}
	}

	//Validacion PRECIO

	if ($field == "precio"){
		if (!is_numeric($value) && $value != ""){
			echo "Por favor, ingrese un valor solo numerico o nulo";
		} else{
			echo "OK";
		}
	}

	//Validacion ESTADO

	if ($field == "estado"){
		if ($value != "Excelente" && $value != "Buena" && $value != "Intermedia" && $value != "Mala"){
			echo "Por favor, ingrese una opcion valida";
		} else{
			echo "OK";
		}
	}

	//Validacion AMBIENTES

	if ($field == "ambientes"){
		if (!is_numeric($value)){
			echo "Por favor, ingrese un valor solo numerico";
		} else{
			echo "OK";
		}
	}

	//Validacion DORMITORIOS

	if ($field == "dormitorios"){
		if (!is_numeric($value)){
			echo "Por favor, ingrese un valor solo numerico";
		} else{
			echo "OK";
		}
	}


	//Validacion COORDENADAS
	
	if ($field == "coordenadas"){
		$regex = "@^(\-?\d+(\.\d+)?),\s*(\-?\d+(\.\d+)?)$@";
		if (strlen($value) == 0){
			echo "OK";	
		}else{
			if(!preg_match($regex, $value)){
			echo "Por favor, ingrese coordenadas validas";
			} else{
				echo "OK";
			}
		}
	}	
?>