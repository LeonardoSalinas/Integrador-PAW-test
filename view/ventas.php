<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ventas - Inmobiliaria Mercedes</title>
	<link rel="stylesheet" id="styleLink" href="styles/style1.css">
</head>

<body>
	<?php include("templates/header.php"); ?>

	<?php include("templates/nav.php"); ?>

	<?php require_once('../controller/getCasas.php'); ?>

	<h2 class="h2-Alquilar">Propiedades en venta:</h2>

	<section class="menuVentas">

		<?php $cas = new CasasGetter();
		$casas = $cas->getCasasVenta();
		foreach ($casas as $fila) {
			$img = $cas->getImagenCasa($fila["id_casa"]);
			echo "<div class=\"itemVenta\">";
			echo "<div class=\"fotoItemVenta\">";
			echo "<img src=\"" . $img['nombre'] . "\" alt=\"foto de la propiedad\">";
			echo "<p>Venta</p>";
			echo "<button>Más fotos</button>";
			echo "</div>";
			echo "<div class=\"descItemVenta\">";
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
			echo "<a href=\"detallesPropiedad.php?id_casa=" . $fila['id_casa'] . "\"><button>Más detalles &#10095;</button></a>";
			echo "</div>";
		}
		?>
	</section>
</body>

<?php include("templates/footer.php"); ?>

</html>