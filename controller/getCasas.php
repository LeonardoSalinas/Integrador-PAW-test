<?php
require_once('../model/model.php');
	
	class CasasGetter{
		function getCasas(){
			$cas = new SelectCasa();
			$casas = $cas->seleccionarCasas();
			return $casas;
		}

		function getDuenio($id){
			$usr = new SelectUsuario();
			$user = $usr->seleccionarUsuario($id);
			return $user;
		}

		function getCasasAlquiler(){
			$cas = new SelectCasa();
			$casas = $cas->seleccionarCasasAlquiler();
			return $casas;
		}

		function getCasasVenta(){
			$cas = new SelectCasa();
			$casas = $cas->seleccionarCasasVenta();
			return $casas;
		}

		function getImagenCasa($id){
			$img = new SelectImagen();
			$imagen = $img->seleccionarImagenes($id);
			return $imagen;

		}

	}
?>