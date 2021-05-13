<!DOCTYPE html>
<html>
<head>
	<title>Días restantes</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<a href="datos.php">Return</a>
	<div class="general">
	<?php
		$dia = $_POST['dia'];
		$mes = $_POST['mes'];
		$year = $_POST['año'];

		if (checkdate($dia,$mes,$year)) {
			$fecha = date($dia . "-" . $mes . "-"  . $year);
			//print($fecha);
			$dias = dias($fecha);
			if ($dias > 0) {
				echo "Hoy es el " . date("d-m-Y") . " y faltan " . $dias . " días para el " . $fecha . ".";
			}
		}else{
			header("Location:datos.php?error");
		}
		function dias($fecha){
			$dif = strtotime($fecha) - strtotime(date("Y-m-d"));
			return(intval($dif/86400 + 1));
		}
	?>
	</div>
</body>
</html>