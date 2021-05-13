<!DOCTYPE html>
<html>
<head>
	<title>Comentarios</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h2>Comentarios</h2>
	<?php
		date_default_timezone_set("America/Argentina/Buenos_Aires");
		$name = $_POST['nombre'];
		$email = $_POST['mail'];
		$comment = $_POST['comentario'];
		$fecha = date("d/m/Y H:i");
		$archivo = fopen("comentarios.txt", 'a');
		$comentario = "<div class='comentario'><p> Fecha: ". $fecha."</p>"."<p>Nombre: ". $name."</p>"."<p>E-mail: ". $email."</p>"."<p>Comentario: ". $comment."</p>". "<p class = red>......................................................................</p></div>";
		//echo $name." ". $email." " . $comment . " " . $fecha . $comentario; //test
		fputs($archivo, $comentario);
		$archivo_lectura = fopen("comentarios.txt", 'r');
		fpassthru($archivo_lectura);
		fclose($archivo);
		fclose($archivo_lectura);
	?>
</body>
</html>