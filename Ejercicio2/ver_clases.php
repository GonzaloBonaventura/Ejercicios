<!DOCTYPE html>
<html>
<head>
	<title>ver</title>
	<link rel="stylesheet" type="text/css" href="formulario.css">
</head>
<body>
	<div id="tabla">
		<h2>Clases</h2>
		<?php
		include('conexion.php');
		$consulta = mysqli_query($datos_base, "SELECT * FROM clases");

		while ($listar_prod = mysqli_fetch_assoc($consulta)) {
		?>
		<div class="prod">
			<p> <?php echo $listar_prod['id_clase']; ?></p>
			<p>Unidad: <?php echo $listar_prod['unidad']; ?></p>
			<p>Fecha: <?php echo $listar_prod['fecha']; ?></p>
			<p class="eliminar"><a href="borrar_clases.php?cod=<?php echo $listar_prod['id_clase'];?>">Eliminar</a></p>
		</div>
	<?php } ?>
	</div>
</body>
</html>