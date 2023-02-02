<?php 

$nombre_consulta = $_POST['nombre_consulta'];
$apellido_consulta = $_POST['apellido_consulta'];
$correo_consulta = $_POST['correo_consulta'];
$consulta_consulta = $_POST['consulta_consulta'];

include ("conexion.php");

mysqli_query ($datos_bd, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_consulta', '$apellido_consulta', '$correo_consulta', '$consulta_consulta' )");
header("Location: contacto.php?consulta_ok");

 ?>