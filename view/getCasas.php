<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Casas - Inmobiliaria Mercedes</title>
	<link rel="stylesheet" id="styleLink" href="styles/style1.css">
</head>

<body>
	<?php include("templates/header.php"); ?>

	<?php include("templates/navAdmin.php"); ?>

	<?php
	require_once('../controller/getCasas.php');

		$cas = new CasasGetter();
		$casas = $cas->getCasas();
		echo "<div class=\"casasList\">";
		echo "<ul class=\"casas\">";
		foreach ($casas as $fila){
			$usr = $cas->getDuenio($fila["id_usuario"]);
			echo "<li>" .  $fila["direccion"] . ", " . $fila["ciudad"] . ", " . $usr["nombre"] . ", " . $usr["apellido"];
			echo "<a href=\"altaImagen.php?id_casa=" . $fila['id_casa'] . "\"> Agregar Imagen</a></li>";
		}
		echo "</ul>";
		echo "</div>";
	?>
</body>

<?php include("templates/footer.php"); ?>

</html>