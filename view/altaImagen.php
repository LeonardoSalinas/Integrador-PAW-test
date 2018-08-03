<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alta Imagen - Inmobiliaria Mercedes</title>
	<link rel="stylesheet" id="styleLink" href="styles/style1.css">
</head>
<body>

	<?php include("templates/header.php"); ?>

	<?php include("templates/nav.php"); ?>
	<?php $id = $_GET["id_casa"]; ?>

	<h2 class="h2-buscarAvanzado">Alta Imagen:</h2>
	
	<section class="buscarAvanzadoContenedor">
		<?php
			echo "<form action=\"../controller/altaImagen.php?id_casa=" . $id . "\" method =\"post\" id=\"miform\" enctype=\"multipart/form-data\">"
		?>
		
			<input type="text" id="descripcion" name="descripcion" placeholder="Descripcion..." maxlength="128"">
			<input type="file" accept="image/jpeg, image/png, image/bmp" name="upload"><br>
			<input type="submit" name="submit" value="Subir">
			<input type="reset" value="Limpiar">
		</form>
	</section>
</body>

<?php include("templates/footer.php"); ?>

</html>