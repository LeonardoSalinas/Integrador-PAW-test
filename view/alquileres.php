<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alquieleres - Inmobiliaria Mercedes</title>
	<link rel="stylesheet" id="styleLink" href="styles/style1.css">
</head>

<body>
	<?php include("templates/header.php"); ?>

	<?php include("templates/nav.php"); ?>

	<?php require_once('../controller/getCasas.php'); ?>

	<h2 class="h2-Alquilar">Propiedades en alquiler:</h2>

	<section class="menuAlquileres">

		<?php $cas = new CasasGetter();
		$casas = $cas->getCasasAlquiler();
		foreach ($casas as $fila) {
			$img = $cas->getImagenCasa($fila["id_casa"]);
			echo "<div class=\"itemAlquiler\">";
			echo "<div class=\"fotoItemAlquiler\">";
			echo "<img src=\"" . $img['nombre'] . "\" alt=\"foto de la propiedad\">";
			echo "<p>Alquiler</p>";
			echo "<button>Más fotos</button>";
			echo "</div>";
			echo "<div class=\"descItemAlquiler\">";
			echo "<ul>";
			echo "<li>Ciudad: " . $fila['ciudad'] . "</li>";
			echo "<li>Ubicacion: " . $fila['ubicacion'] . "</li>";
			echo "<li>Estado: ". $fila['estado'] . "</li>";
			echo "<li>Ambientes: " . $fila['ambientes'] . "</li>";
			echo "<li>Dormitorios: ". $fila['dormitorios'] . "</li>";
			echo "<li>Garage: " . $fila['garage'] . "</li>";
			echo "<li>Patio: ". $fila['patio'] . "</li>";
			echo "</ul>";
			echo "</div>";
			echo "<button>Más detalles &#10095;</button>";
			echo "</div>";
		}
		?>
	</section>
</body>

<?php include("templates/footer.php"); ?>

</html>