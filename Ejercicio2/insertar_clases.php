<?php
include('conexion.php');

$unidad_prod = $_POST['unidad'];
$fecha_prod = $_POST['fecha'];

mysqli_query($datos_base, "INSERT INTO clases VALUES (default, '$unidad_prod', '$fecha_prod')");
header("Location: cargar_clases.php?ok");
?>