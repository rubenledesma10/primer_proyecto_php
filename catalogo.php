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
    <h2>Catálogo - Unidad V</h2>

    <nav id="botonera_catalogo">
        <ul>
            <li><a href="catalogo.php?id=sc#contenido">Sillón Capri</a></li>
            <li><a href="catalogo.php?id=mi#contenido">Mesa Ipanema</a></li>
            <li><a href="catalogo.php?id=bv#contenido">Banco Venecia</a></li>
        </ul>
    </nav>
    <?php 
      
    if (isset($_GET ['id'])) {                                       
    switch ($_GET['id']) {
        case 'sc':
            
            $producto = 'Sillon Capri';
            $precio = 345.00;
            $caracteristicas = 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera esta acabada con un recubrimiento de Resina Polisten que la embellece';
            $imagen = 'sillon1.jpg';

            break;

        case 'mi':

            $producto = 'Mesa Ipanema';
            $precio = 500.00;
            $caracteristicas = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms';
            $imagen = 'ipanema.jpg';

            break;

        case 'bv':

            $producto = 'Banco Venecia';
            $precio = 450.00;
            $caracteristicas = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms';
            $imagen = 'venecia.jpg';


            break;
        
        default:
            // code...
            break;
    }
     ?>
    <div id="mostrar_producto">
       <p><?php echo "<b>Producto: </b>" .$producto; ?></p>
       <p><?php echo "<b> Precio: </b>" .$precio; ?></p>
       <p><?php echo "<b> Caracteristicas: </b>" .$caracteristicas; ?></p>
       <img src="imagenes/<?php echo $imagen;  ?>">
    </div> 
    <?php } ?>
    </section>
<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>