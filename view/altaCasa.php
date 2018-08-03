<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alta Casa - Inmobiliaria Mercedes</title>
	<link rel="stylesheet" id="styleLink" href="styles/style1.css">
</head>

<body>
	<?php include("templates/header.php"); ?>

	<?php include("templates/nav.php"); ?>
	
	<?php $id = $_GET["id_usuario"]; ?>

	<h2 class="h2-buscarAvanzado">Alta Propiedad:</h2>
	
	<section class="buscarAvanzadoContenedor">
		
		<?php
			echo "<form action=\"../controller/altaCasa.php?id_usuario=" .  $id . "\" method =\"post\" id=\"miform\">"
		?>

			<input type="text" id="direccion" name="direccion" placeholder="Direccion..." maxlength="100" onblur="validarCasa('direccion', this.value)">
			<p id="rspdireccion"></p>

			<input type="text" id="ciudad" name="ciudad" placeholder="Ciudad..." maxlength="30" onblur="validarCasa('ciudad', this.value)">
			<p id="rspciudad"></p>

			<input list="tipoTrans" id="transaccion" name="transaccion" placeholder="Tipo de transacción..." maxlength="20" onblur="validarCasa('transaccion', this.value)">
			<datalist id="tipoTrans">
				<option value="Alquiler"></option>
				<option value="Venta"></option>				
				<option value="Ambos"></option>
			</datalist>
			<p id="rsptransaccion"></p>

			<input list="tipoPropiedad" id="tipo" name="tipo" placeholder="Tipo de propiedad..." maxlength="20" onblur="validarCasa('tipo', this.value)">
			<datalist id="tipoPropiedad">
				<option value="Casa"></option>
				<option value="Casa-Quinta"></option>
				<option value="Departamento"></option>
				<option value="Terreno"></option>
				<option value="Negocio"></option>
				<option value="Deposito"></option>
			</datalist>
			<p id="rsptipo"></p>

			<input class="metros2" id="metros2" type="number" name="metros2" placeholder="Metros2..." maxlength="30" onblur="validarCasa('metros2', this.value)">
			<p id="rspmetros2"></p>

			<input list="ubicacionList" id="ubicacion" name="ubicacion" placeholder="Ubicación..." onblur="validarCasa('ubicacion', this.value)">
			<datalist id="ubicacionList">
				<option value="Centrica"></option>
				<option value="Urbana"></option>
				<option value="Lejana"></option>
			</datalist>
			<p id="rspubicacion"></p>

			<input type="number" id="precio" name="precio" placeholder="Precio..." maxlength="30" onblur="validarCasa('precio', this.value)">
			<p id="rspprecio">OK</p>

			<input list="estadoList" id="estado" name="estado" placeholder="Estado de la propiedad..." onblur="validarCasa('estado', this.value)">
			<datalist id="estadoList">
				<option value="Excelente"></option>
				<option value="Buena"></option>
				<option value="Intermedia"></option>
				<option value="Mala"></option>
			</datalist>
			<p id="rspestado"></p>

			<input type="number" id="ambientes" name="ambientes" placeholder="Cantidad de ambientes..." min="0" max="100" onblur="validarCasa('ambientes', this.value)"> <br>
			<p id="rspambientes"></p>

			<input type="number" id="dormitorios" name="dormitorios" placeholder="Cantidad de dormitorios..." min="0" max="100" onblur="validarCasa('dormitorios', this.value)"> <br>
			<p id="rspdormitorios"></p> <br>

			<label for="garage">Garage: </label>
			<input type="radio" id="garageSi" name="garage" value="Si" > <span>Sí</span>
			<input type="radio" id="garageNo" name="garage" value="No" checked> <span>No</span> <br>

			<label for="patio">Patio: </label>
			<input type="radio" id="patioSi" name="patio" value="Si"> <span>Sí</span>
			<input type="radio" id="patioNo" name="patio" value="No" checked> <span>No</span> <br>

			<input type="text" id="coordenadas" name="coordenadas" placeholder="Coordenadas..." maxlength="100" onblur="validarCasa('coordenadas', this.value)">
			<p id="rspcoordenadas">OK</p> <br>


			<input type="button" id="submitbtn" name="submitbtn" value="Cargar" onclick="checkFormAltaCasa()">
			<input type="reset" value="Limpiar">
			<p id="rspsubmit"></p>
		</form>
	</section>
</body>

<?php include("templates/footer.php"); ?>

<script src="scripts/checkForms.js"></script>

</html>