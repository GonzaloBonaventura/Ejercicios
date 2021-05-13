<!DOCTYPE html>
<html>
<head>
	<title>pagina1</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<form method="post" action="pagina2.php">
		<div class="input">Nombre: <input type="text" name="nombre"></div>
		<div class="input">Mail: <input type="email" name="mail"></div>
		<div class="input">Comentario: <textarea name="comentario" rows="8" cols="30" required></textarea></div>
		<div id="boton1"><input type="submit" name="send" value="Enviar"></div>
		<div id="boton2"><input type="reset" name="erase" value="Borrar"></div>
	</form>
</body>
</html>