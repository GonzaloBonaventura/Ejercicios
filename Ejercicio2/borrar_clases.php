<?php
include('conexion.php');

$codigo = $_GET['cod'];
mysqli_query($datos_base, "DELETE FROM clases WHERE id_clase=$codigo");
header("Location: ver_clases.php");
?>