<?php
include("php/conexion.php");
$con=conectar();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Pao's Safe Shop</title>
</head>
<body>
    <div class="hero">
        <nav>
            <h2 class="logo">Pao's Safe Shop</h2>
            <ul>
                <li><a href="#" id="inicio">INICIO</a></li>
                <li><a href="#" id="sobre_mi">SOBRE MI</a></li>
                <li><a href="#" id="galeria">GALERIA</a></li>
                <li><a href="#" id="contacto">CONTACTO</a></li>
            </ul>
        </nav>
        <div class="inicio" id="inicio">
            <div class="informacion">
                <p>Accesorios Para Mujer & Bisutería Fina</p>
                <p>Compra Online lindos Accesorios para Mujer como Collares, Cadenas, Aretes y Pulseras.</p>
                <p>Envíos a Toda Colombia y el Mundo - Entregas el Mismo día en Bogotá y Soacha.</p>
                <p>Cinta y Tarjeta de Regalo GRATIS.</p>
                <p>Por Compras Superiores a $89.900 el envío es GRATIS en Colombia.</p>
            </div>
        </div>
        <div class="sobre_mi" id="sobre_mi">
            <h2>SOBRE MI</h2>
            <p>Es una plataforma dedicada al estilo de vida de la mujer moderna. Con un enfoque práctico y dinámico compartimos numerosos artículos al día en los que tratamos temas variados, desde moda y belleza a fitness y celebridades, hasta carrera profesional y cultura, dando a nuestras lectoras tips, trucos, y herramientas que buscan para mejorar su calidad de vida­– y compartirla con el mundo
            Queremos entretener y mejorar la vida de las mujeres a través de contenido creativo e inspirador. Nuestra misión es ser la mejor fuente de inspiración para la mujer de hoy. Creemos que una vida más estilosa nos hace más felices!
            Vemos a la mujer actual como una mujer integral que le interesa saber cuáles son las últimas tendencias a nivel global. Para ella no existen las fronteras gracias a internet y quiere acceder a lo mismo que el resto del mundo.
            Apuntamos a la mujer que busca el futuro, las últimas tendencias desde todo punto de vista entregando un contenido global con artículos e ideas de alrededor del mundo. Y con esto buscamos hacer que Cut y Paste sea el destino número uno para la mujer estilosa e inteligente.</p>
        </div>
        <div id="galeria">
            <div class="slider">
                <ul>
                    <li><img class="slide1" src="IMAGENES/sl1.jpeg"></li>
                    <li><img class="slide2" src="IMAGENES/aretes.jpg"></li>
                    <li><img class="slide3" src="IMAGENES/sl2.jpeg"></li>
                    <li><img class="slide4" src="IMAGENES/bolsos.jpg"></li>
                    <li><img class="slide5" src="IMAGENES/sl3.jpeg"></li>
                    <li><img class="slide6" src="IMAGENES/collar.jpg"></li>
                    <li><img class="slide7" src="IMAGENES/sl4.jpeg"></li>
                    <li><img class="slide8" src="IMAGENES/gafas.jpg"></li>
                    <li><img class="slide9" src="IMAGENES/sl5.jpeg"></li>
                    <li><img class="slide10" src="IMAGENES/diademas.jpg"></li>
                </ul>
            </div>
        </div>
        <div id="contacto">

        </div>
    </div>
</body>
</html>