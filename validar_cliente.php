<?php 
session_start();
$correo_ingreso = $_POST['correo'];
$contrasena_ingreso = $_POST['pass'];

if($correo_ingreso == 'cliente@gmail.com' && $contrasena_ingreso =='phpintermedio') {
	$_SESSION['clientes'] = $correo_ingreso;
	header("Location: clientes.php?ok#formulario_ingreso");
} else  {
	echo "Error";
}

?>