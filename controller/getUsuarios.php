<?php
require_once('../model/model.php');
	
	class UsuariosGetter{
		function getUsuarios(){
			$usr = new SelectUsuario();
			$usuarios = $usr->seleccionarUsuarios();
			return $usuarios;
		}
	}