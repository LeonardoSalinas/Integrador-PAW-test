<?php
require_once('../model/model.php');

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$dni = $_POST["dni"];
	$telefono = $_POST["telefono"];
	$email = $_POST["email"];
	if(strlen($nombre) != 0 && strlen($apellido) !=0 && is_numeric($dni) && is_numeric($telefono) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$upload = new InsertUsuario();
		$rta = $upload->insertarUsuario($nombre, $apellido, $dni, $telefono, $email);
	}
	header("Location: ../view/altaUsuario.php");
?>