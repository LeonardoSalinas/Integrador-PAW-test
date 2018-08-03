<?php
require_once('../model/model.php');

	$id = $_GET['id_usuario'];

	$direccion = $_POST["direccion"];
	$ciudad = $_POST["ciudad"];
	$transaccion = $_POST["transaccion"];
	$tipo = $_POST["tipo"];
	$metros2 = $_POST["metros2"];
	$ubicacion = $_POST["ubicacion"];
	$precio = $_POST["precio"];
	$estado = $_POST["estado"];
	$ambientes = $_POST["ambientes"];
	$dormitorios = $_POST["dormitorios"];
	$garage = $_POST["garage"];
	$patio = $_POST["patio"];
	$coordenadas = $_POST["coordenadas"];
	$regex = "@^(\-?\d+(\.\d+)?),\s*(\-?\d+(\.\d+)?)$@";
	//EL PEOR IF DE MI VIDA
	if($direccion != "" && $ciudad != "" && ($transaccion == "Alquiler" || $transaccion == "Venta" || $transaccion == "Ambos") && ($tipo == "Casa" || $tipo == "Casa-Quinta" || $tipo == "Departamento" || $tipo == "Terreno" || $tipo == "Negocio" || $tipo == "Deposito") && is_numeric($metros2) && $ubicacion != "" && (is_numeric($precio) || $precio == "") && ($estado == "Excelente" || $estado == "Buena" || $estado == "Intermedia" || $estado == "Mala") && is_numeric($ambientes) && is_numeric($dormitorios) && ($garage == "Si" || $garage == "No") && ($patio == "Si" || $patio == "No" && (preg_match($regex, $coordenadas) || $coordenadas == ""))){
		echo "adentroooooooo";

		$upload = new InsertCasa();
		$rta = $upload->insertarCasa($direccion, $ciudad, $transaccion, $tipo, $metros2, $ambientes, $dormitorios, $patio, $garage, $coordenadas, $precio, $estado, $ubicacion, $id);
		echo $rta;
	}
	header("Location: ../view/altaCasa.php?id_usuario=" . $id);
?>