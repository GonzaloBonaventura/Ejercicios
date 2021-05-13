<!DOCTYPE html>
<html>
<head>
	<title>Datos</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="general">
	<form method="post" action="calculo.php" id="formulario">
		<input type="number" name="dia" placeholder="Día" maxlength="2" min="1" max="31">
		<input type="number" name="mes" placeholder="Mes" maxlength="2" min="1" max="12">
		<input type="number" name="año" placeholder="Año" min="2021" max="9999">
		<input type="submit" value="Enviar">
	</form>
	<?php
	if (isset($_GET['error'])) {
		echo "<p class= \"error\"> La fecha introduccida es incorrecta </p>";
	}
	?>
</div>

</body>
</html>