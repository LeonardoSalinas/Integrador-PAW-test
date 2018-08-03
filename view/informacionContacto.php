<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Información de Contacto - Inmobiliaria Mercedes</title>
	<link rel="stylesheet" id="styleLink" href="styles/style1.css">
</head>

<body>
	<?php include("templates/header.php"); ?>

	<?php include("templates/nav.php"); ?>

	<h2 class="h2-tituloInfoContacto">Inmobiliaria Mercedes - Sergio Salinas</h2>

	<section class="infoContacto">
		<ul>
			<li>Dirección: Calle 22 N° 364 entre 15 y 17</li>
			<li>Teléfono: 434444</li>
			<li>Celular: 2324-15511411</li>
			<li>Mail: sergioasal@yahoo.com</li>			
		</ul>

		<div class="googleMapInfoContacto" id="googleMap"></div>

	</section>
</body>

<?php include("templates/footer.php"); ?>

<script type="text/javascript" src="scripts/googleMap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBm3i2vw14LOJYRYWjXCsPl19zpKRYHCK0&callback=myMap"></script>

</html>