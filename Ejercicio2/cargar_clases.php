<!DOCTYPE html>
<html>
<head>
	<title>Cargar Clases</title>
	<link rel="stylesheet" type="text/css" href="formulario.css">
</head>
<body>
	<div id="formulario">
		<form method="POST" action="insertar_clases.php">
			<input type="text" name="unidad" placeholder="Unidad" maxlength="30" required>
			<input type="date" name="fecha" required>
			<input type="submit" name="" value="Cargar Clase">
		</form>
		<?php
		if (isset($_GET['ok'])){
			echo "<h3> ¡Producto cargado! </h3>";
		}
		?>
	</div>
</body>
</html>