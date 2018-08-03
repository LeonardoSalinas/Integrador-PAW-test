<?php

	$field = $_GET['campo'];
	$value = $_GET['valor'];

	//Validacion NOMBRE

	if ($field == "nombre"){
		if (strlen($value) == 0){
			echo "Por favor, ingrese un nombre";
		} else{
			echo "OK";
		}
	}

	//Validacion APELLIDO

	if ($field == "apellido"){
		if (strlen($value) == 0){
			echo "Por favor, ingrese un apellido";
		} else{
			echo "OK";
		}
	}

	//Validacion DNI

	if ($field == "dni"){
		if (!is_numeric($value)){
			echo "Por favor, ingrese un dni solo numerico";
		} else{
			echo "OK";
		}
	}

	//Validacion TELEFONO

	if ($field == "telefono"){
		if (!is_numeric($value)){
			echo "Por favor, ingrese un telefono solo numerico";
		} else{
			echo "OK";
		}
	}

	//Validacion EMAIL
	if ($field == "email"){
		if (!filter_var($value, FILTER_VALIDATE_EMAIL)){
			echo "Por favor, ingrese un email valido";
		} else{
			echo "OK";
		}
	}
?>