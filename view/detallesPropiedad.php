<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detalles Propiedad - Inmobiliaria Mercedes</title>
	<link rel="stylesheet" id="styleLink" href="styles/style1.css">
</head>

<body>
	<?php include("templates/header.php"); ?>

	<?php include("templates/nav.php"); ?>

	
	<div class="breadcrumb">
		<a href="index.php">Home</a>
		<div class="breadcrumbSeparator">&#10095;</div>
		<a href="alquileres.php">Alquileres</a>
		<div class="breadcrumbSeparator">&#10095;</div>
		<a href="detallesPropiedad.php">Detalles</a>
	</div>

	<section class="detallesSlider">

		<article class="detallesSliderContenedor" id="detallesSliderContenedor">			
			<figure class="mySlide" style="display: block;">
			  <img src="img/interior01.jpg" alt="foto del interior de la propiedad">
			  <figcaption class="slideDesc">Living</figcaption>
			</figure>

			<figure class="mySlide" style="display: block;">
			  <img src="img/interior02.jpg" alt="foto del interior de la propiedad">
			  <figcaption class="slideDesc">Hall principal</figcaption>
			</figure>

			<figure class="mySlide" style="display: block;">
			  <img src="img/interior03.jpg" alt="foto del interior de la propiedad">
			  <figcaption class="slideDesc">Habitación de los invitados</figcaption>
			</figure>

			<figure class="mySlide" style="display: block;">
			  <img src="img/interior04.jpg" alt="foto del interior de la propiedad">
			  <figcaption class="slideDesc">Cocina/comedor</figcaption>
			</figure>

			<figure class="mySlide" style="display: block;">
			  <img src="img/interior05.jpg" alt="foto del interior de la propiedad">
			  <figcaption class="slideDesc">Sala de juegos</figcaption>
			</figure>
		</article>
	</section>

	<section class="infoPropiedad">
		<div class="descInfoPropiedad">
			<ul>
				<li>Ciudad: Mercedes</li>
				<li>Dirección: Calle 12 número 188</li>
				<li>Ambientes: 6</li>
				<li>Dormitorios: 2</li>
				<li>Cocina/comedor: 1</li>
				<li>Baños: 1</li>
				<li>Garage: 1</li>
				<li>Patio: 1</li>
				<li>Precio alquiler: $5000.</li>
				<li>Precio venta: a definir.</li>
				<li>Lorem ipsum dolor sit amet.</li>
			</ul>
		</div>

		<div class="googleMapInfoPropiedad" id="googleMap"></div>

	</section>
</body>

<?php include("templates/footer.php"); ?>

<script>
	var contenedorId = "detallesSliderContenedor";
</script>

<script type="text/javascript" src="scripts/sliders.js"></script>
<script type="text/javascript" src="scripts/googleMap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBm3i2vw14LOJYRYWjXCsPl19zpKRYHCK0&callback=myMap"></script>

</html>