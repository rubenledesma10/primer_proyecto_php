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
    <h2>Noticias - Unidad VI</h2>
    </section>
    <section id="noticias">
        <h2 style="text-align: center;">NOTICIAS</h2>
        <?php
            $noticias = array( 
            array('imagenes'=>'noti1.png', 'titulo'=>'Python el mas usado', 'texto'=>'Según el TIOBE index, Python es el lenguaje mas utilizado en el mes de septiembre'),
            array('imagenes'=>'noti2.png', 'titulo'=>'PHP bajo un escalón', 'texto'=>'Según el TIOBE index, PHP bajo un posicion con respecto a septiembre del año pasado. El mismo se encuentra en este momento en el puesto numero 10 en septiembre de este año, mientras que en septiembre del año pasado se encontraba en la posición numero 9'),
            array('imagenes'=>'noti3.jpg', 'titulo'=>'Fecha de comienzo para el curso de PHP avanzado', 'texto'=>'El 14 de octubre comienza el curso de PHP avanzado, dictado por la UTN de Resistencia. No pierdas esta oportunidad increible de poder aprender sobre PHP'),
            array('imagenes'=>'noti4.jpeg', 'titulo'=>'Se lanza el Argentina programa 4.0', 'texto'=>'Se trata de un programa nacional y federal que tiene como objetivo capacitar a personas en lenguajes y conocimientos sobre programación, testing y habilidades digitales para potenciar la empleabilidad en el sector de software y la tecnología')

        );
        for($i=0; $i<count($noticias);$i++) {
        ?>

  <div class="card" style="width: 18rem;">
  <img src="imagenes/<?php echo $noticias[$i]['imagenes'];?>" style="width: 100%;" class="card-img-top">
  <div class="card-body">
    <h3 class="card-title"><?php echo $noticias[$i]['titulo'];?></h3>
    <p class="card-text"><?php echo $noticias[$i]['texto'];?></p>
   </div>
</div>

        <?php } ?>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>