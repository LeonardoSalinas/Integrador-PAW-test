<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contacto - Inmobiliaria Mercedes</title>
	<link rel="stylesheet" id="styleLink" href="styles/style1.css">
</head>

<body>
	<?php include("templates/header.php"); ?>

	<?php include("templates/nav.php"); ?>

	<h2 class="h2-contacto">¿Alquila o vende su propiedad? Consúltenos...</h2>
	<h2 class="h2-contacto">Deje sus datos y responderemos a la brevedad.</h2>

	<section class="formContactoContenedor">
		<form action="" id="formContacto">
			<input type="text" name="nombre" placeholder="Ingrese su nombre...">
			<input type="email" name="email" placeholder="suMail@ejemplo.com.ar">
			<input type="tel" name="tel" placeholder="Ingrese su teléfono...">
			<textarea name="mensaje" rows="5" placeholder="Mensaje..." form="formContacto"></textarea>
			<input type="submit" name="submit" value="Enviar">
			<input type="reset" value="Limpiar">
		</form>
	</section>
</body>

<?php include("templates/footer.php"); ?>

</html>