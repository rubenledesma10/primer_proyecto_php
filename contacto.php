<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Contáctenos - Unidad VIII</h2>
    <div class="fondo_formulario">
    <form method="POST" action="enviar_consulta.php">
    <p><b>Nombre</b></p> <input type="text" name="nombre_consulta" placeholder="Nombre" style="width: 300px; height: 20px;" required maxlength="30">
    <p><b>Apellido</b></p><input type="text" name="apellido_consulta" placeholder="Apellido" style="width: 300px; height: 20px;" required maxlength="50">
    <p><b>Correo electrónico</b></p><input type="email" name="correo_consulta" placeholder="Correo electrónico" style="width: 300px; height: 20px;" required maxlength="100">
    <p><b>Consulta</b></p><textarea name="consulta_consulta" placeholder="Enviar consulta" rows="10" cols="50" required ></textarea>
    <input type="submit" name="" value="Enviar consulta" required>
    </form>
        <?php 

    if(isset($_GET['consulta_ok'])){
        echo "<h3><b>¡CONSULTA ENVIADA EXITOSAMENTE!</h3></b> ";
    }

    ?>
    </div>
</section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>