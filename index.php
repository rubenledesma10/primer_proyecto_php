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
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Unidad IV - Introducción a PHP</h2>
    <div id="uni4_1">
        
        <?php

        echo "<h3>¿Qué significa PHP y que podemos hacer con él?</h3>";
        echo "<p> PHP significa <b>Hypertext Processor</b>, o algunos tambien lo traducen como <b>Pre-Hypertext Proccesor</b> <p>";
        echo "<p> Con PHP podemos hacer:
        <ul>
        <li> Foros </li>
        <li> Guestbooks </li>
        <li> Blogs </li>
        <li> Calendarios </li>
        <li> Sistemas de carrito de compras </li>
        <li> Restricción de acceso a sitios mediante user/password </li>
        <li> Registro de estadisticas </li>
        <li> Proceso de formularios de email </li>
        </ul>";

        ?>


    </div>
    <div id="uni4_2">
        
        <?php 

        echo "EVALUACIÓN <br/> INTEGRADORA <br/> PHP y MySQL <br/> ";

        ?>


    </div>
    <div id="uni4_3">
        
        <?php 

        $numero = 9;
        $nombre = 'PHP';
        $boolean = true;

        echo "<p>Al día de hoy ".$nombre. " es uno de los lenguajes que mas se utiliza a nivel mundial</p>";
        echo "<p>Al dia de hoy, " .$nombre. " se ubica en la posición" .$numero. " segun el índice TIOBE (the software quality company)</p>";
        echo "<p>Boolean " .$boolean. "</p>";
        

        ?>

    </div>
    <div id="uni4_4">
        
        <?php

        $valor_curso_php = 28500;
        $unidades_php_intermedio = 8;
        $unidades_cursadas_php_intermedio = 4;
        $unidades_php_avanzado = 8;
        $unidades_cursadas_php_avanzado = 0;
        
        echo "<p> El valor del curso es de: $" .$valor_curso_php. "(ARG) </p>";
        echo "<p> Eligiendo la opción de pagar en 3 cuotas sin interes, el valor es de : $" .($valor_curso_php / 12). "(ARG) por mes </p>";
        echo "<p> Cantidad de unidades del curso de PHP intermedio: " .$unidades_php_intermedio. "</p>";
        echo "<p> Cantidad de unidades cursadas de PHP intermedio: " .$unidades_cursadas_php_intermedio. "</p>";
        echo "<p> Cantidad de unidades del curso de PHP avanzado: " .$unidades_php_avanzado. "</p>";
        echo "<p> Cantidad de unidades cursadas de PHP avanzado: " .$unidades_cursadas_php_avanzado. "</p>";
        echo "<p> Unidades que faltan cursar del curso PHP intermedio: " .($unidades_php_intermedio - $unidades_cursadas_php_intermedio). "</p>";
        echo "<p> Unidades en total curso de PHP: " .($unidades_php_intermedio + $unidades_php_avanzado). "</p>";
        echo "<p> Cantidad de unidades en total que te quedan por cursar: " .($unidades_php_avanzado + $unidades_php_intermedio - $unidades_cursadas_php_intermedio). "</p>";
        
        ?>

    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>