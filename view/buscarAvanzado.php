<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buscar Avanzado - Inmobiliaria Mercedes</title>
	<link rel="stylesheet" id="styleLink" href="styles/style1.css">
</head>

<body>
	<?php include("templates/header.php"); ?>

	<?php include("templates/nav.php"); ?>

	<h2 class="h2-buscarAvanzado">Búsqueda avanzada:</h2>
	
	<section class="buscarAvanzadoContenedor">
		<form action="">
			<input type="text" name="ciudad" placeholder="Ciudad..." maxlength="30">
			<input list="tipoOperacion" name="tipoOperacion" placeholder="Tipo de operación..." maxlength="20">
			<datalist id="tipoOperacion">
				<option value="Alquilar"></option>
				<option value="Vender"></option>				
				<option value="Ambos/Otro"></option>
			</datalist>
			<input list="tipoPropiedad" name="tipoPropiedad" placeholder="Tipo de propiedad..." maxlength="20">
			<datalist id="tipoPropiedad">
				<option value="Casa"></option>
				<option value="Casa-Quinta"></option>
				<option value="Departamento"></option>
				<option value="Terreno"></option>
				<option value="Negocio"></option>
				<option value="Almacen"></option>
			</datalist>
			<input list="ubicacion" name="ubicacion" placeholder="Ubicación...">
			<datalist id="ubicacion">
				<option value="Céntrica"></option>
				<option value="Zona urbana"></option>
				<option value="Lejana"></option>
			</datalist>
			<input list="estado" name="estado" placeholder="Estado de la propiedad...">
			<datalist id="estado">
				<option value="Excelente"></option>
				<option value="Buena/Intermedia"></option>
				<option value="Intermedia/Mala"></option>
				<option value="Mala"></option>
			</datalist>
			<input type="number" name="ambientes" placeholder="Cantidad de ambientes..." min="0" max="100"> <br>
			<input type="number" name="dormitorios" placeholder="Cantidad de dormitorios..." min="0" max="100"> <br>
			<label for="garage">Garage: </label>
			<input type="radio" name="garage" value="si"> <span>Sí</span>
			<input type="radio" name="garage" value="no"> <span>No</span>
			<input type="radio" name="garage" value="none" checked> <span>Indiferente</span> <br>
			<label for="patio">Patio: </label>
			<input type="radio" name="patio" value="si"> <span>Sí</span>
			<input type="radio" name="patio" value="no"> <span>No</span>
			<input type="radio" name="patio" value="none" checked> <span>Indiferente</span> <br>
			<input type="submit" name="submit" value="Buscar">
			<input type="reset" value="Limpiar">
		</form>
	</section>
</body>

<?php include("templates/footer.php"); ?>

</html>