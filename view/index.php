<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home - Inmobiliaria Mercedes</title>
	<link rel="stylesheet" id="styleLink" href="styles/style1.css">
</head>

<body>
	<?php include("templates/header.php"); ?>

	<?php include("templates/navAdmin.php"); ?>

	<section class="mainMenu">
		<a href="alquileres.php">
			<figure class="alquileres">
				<img class="alqImg" src="img/casa02.jpg" alt="Casa decorativa para alquilar">
				<button type="button" class="alqButton">Alquileres</button>
			</figure>
		</a>

		<a href="ventas.php">
			<figure class="compras">
				<img class="compImg" src="img/casa03.jpg" alt="Casa decorativa para comprar">
				<button type="button" class="compButton">Ventas</button>
			</figure>	
		</a>
	</section>



	<article class="descSitio">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</article>

	

	<section class="oportunidades">
		<h2 class="h2-Oportunidades">Oportunidades:</h2>
		<article class="indexSliderContenedor" id="indexSliderContenedor">

			<figure class="mySlide" style="display: block;">
				<a href="">
			  		<img class="mySlideImg" src="img/casa02.jpg" alt="foto de la propiedad">
			  		<figcaption class="slideDesc">Lorem ipsum dolor sit amet, consectetur</figcaption>
			  	</a>
			</figure>

			<figure class="mySlide" style="display: block;">
				<a href="">
					<img  class="mySlideImg" src="img/casa04.jpg" alt="foto de la propiedad">
					<figcaption class="slideDesc">adipiscing elit, sed do eiusmod tempor incididunt</figcaption>
				</a>
			</figure>

			<figure class="mySlide" style="display: block;">
				<a href="">
					<img class="mySlideImg" src="img/terreno01.jpg" alt="foto de la propiedad">
					<figcaption class="slideDesc">ut labore et dolore magna aliqua. Ut enim ad</figcaption>
				</a>
			</figure>

			<figure class="mySlide" style="display: block;">
				<a href="">
			  		<img class="mySlideImg" src="img/terreno02.jpg" alt="foto de la propiedad">
					<figcaption class="slideDesc">minim veniam, quis nostrud exercitation ullamco</figcaption>
				</a>
			</figure>

			<figure class="mySlide" style="display: block;">
				<a href="">
					<img class="mySlideImg" src="img/terreno03.jpg" alt="foto de la propiedad">
					<figcaption class="slideDesc">laboris nisi ut aliquip ex ea commodo consequat.</figcaption>
				</a>
			</figure>
		</article>
	</section>
</body>

<?php include("templates/footer.php"); ?>

<script>
	var contenedorId = "indexSliderContenedor";
</script>

<script type="text/javascript" src="scripts/elementosIndex.js"></script>
<script type="text/javascript" src="scripts/sliders.js"></script>

</html>
