<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Usuarios - Inmobiliaria Mercedes</title>
	<link rel="stylesheet" id="styleLink" href="styles/style1.css">
</head>

<body>
	<?php include("templates/header.php"); ?>

	<?php include("templates/navAdmin.php"); ?>

	<?php
	require_once('../controller/getUsuarios.php');

		$usr = new UsuariosGetter();
		$users = $usr->getUsuarios();
		echo "<div class=\"usersList\">";
		echo "<ul class=\"users\">";
		foreach ($users as $fila){
			echo "<li>" .  $fila["nombre"] . " " . $fila["apellido"] . " " . $fila["dni"] . " " . $fila["telefono"] . " " . $fila["email"];
			echo "<a href=\"altaCasa.php?id_usuario=" . $fila['id_usuario'] . "\"> Agregar Casa</a></li>";
		}
		echo "</ul>";
		echo "<a href=\"altaUsuario.php\">Nuevo Usuario</a>";
		echo "</div>";
	?>
</body>

<?php include("templates/footer.php"); ?>

</html>