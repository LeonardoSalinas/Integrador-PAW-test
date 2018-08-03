<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alta Usuario - Inmobiliaria Mercedes</title>
	<link rel="stylesheet" id="styleLink" href="styles/style1.css">
</head>

<body>
	<?php include("templates/header.php"); ?>

	<?php include("templates/nav.php"); ?>

	<h2 class="h2-buscarAvanzado">Alta usuario:</h2>
	
	<section class="buscarAvanzadoContenedor">
		<form action="../controller/altaUsuario.php" method ="post" id="miform">
			<input type="text" id="nombre" name="nombre" placeholder="Nombre..." maxlength="128" onblur="validarUsuario('nombre', this.value)">
			<p id="rspnombre"></p>
			<input type="text" id="apellido" name="apellido" placeholder="Apellido..." maxlength="128" onblur="validarUsuario('apellido', this.value)">
			<p id="rspapellido"></p>
			<input type="text" id="dni" name="dni" placeholder="DNI..." maxlength="128" onblur="validarUsuario('dni', this.value)">
			<p id="rspdni"></p>
			<input type="Tel" id="telefono" name="telefono" placeholder="Teléfono..." maxlength="128" onblur="validarUsuario('telefono', this.value)">
			<p id="rsptelefono"></p>
			<input type="email" id="email" name="email" placeholder="suMail@ejemplo.com.ar" maxlength="128" onblur="validarUsuario('email', this.value)"><br>
			<p id="rspemail"></p>
			<input type="button" id="submitbtn" name="submitbtn" value="Cargar" onclick="checkFormAltaUsuario()">
			<p id="rspsubmit"></p>
			<input type="reset" value="Limpiar">
		</form>
	</section>
</body>

<?php include("templates/footer.php"); ?>

<script src="scripts/checkForms.js"></script>

</html>