<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location:app/app.php");
    }
?>






<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion del PAE</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Monda:wght@400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    </style>


    
    
</head>
<body>
    
    <header>

    <section class="superior">

        <img src="../img/icon.png" alt="Logo" class="logo">

        <h1>GESTIÓN ALIMENTARIA</h1>

        <form class="buscador" id="buscadorForm">
            <input type="search" id="busqueda" placeholder="Buscar...">
            <button type="submit">🔎</button>
        </form>

    </section>
    <button id="abrir" class="menu">☰</button>
    <nav class="nav" id="nav">

        

        <button class="cerrar-menu" id="cerrar">cerrar</button>

        <img src="../img/casa.png" alt="Inicio" class="casa">

        <ul class="despl-list">
            <li><a href="../index.php">Inicio</a></li>

            <li>
                <a href="rutentrega.php"> Rutas de Entrega</a>
            </li>

            <li><a href="servicioCliente.php">Atención y servicios</a></li>

            <li><a href="pagina4.php">Acceder al servicio</a></li>

            <li><a href="#" class="activo">Iniciar sesión</a></li>
        </ul>

    </nav>

</header>

        <main class="contenedor">

        <h1>Iniciar sesión</h1>

        <div class="contenido">

            <!-- LADO IZQUIERDO -->
            <div class="infos">

                <p>
                    Ingresa tus credenciales para acceder a la
                    plataforma de gestión alimentaria.
                </p>

                <img src="../img/iniciarSesion/3223ae74-494d-432b-80c6-596b76b82e61 cuchitaa (1).png" alt="Gestión alimentaria">

            </div>

            <!-- LADO DERECHO -->
            
            <!-- LADO DERECHO -->
<div class="login">
<form action="../base_datos/login_php/login_usuario_be.php" method="POST">
    <div class="grupo">
        <label>Correo electrónico</label>
        <input type="email" name="correo">
    </div>

    <div class="grupo">
        <label>Contraseña</label>
        <input type="password" name="contraseña">
    </div>

    
    <div class="opciones">
    <div>
        <input type="checkbox" name="recordar_datos">
        <span>Recordar mis datos</span>
    </div>

    <a href="#">¿Olvidaste tu contraseña?</a>
</div>
                <input class="ini_sec" type="submit" name="ini_sec" value="Iniciar Sesion">

                <p class="continuar">o continúa con</p>

                <div class="sociales">
                    <button>Google</button>
                    <button>Microsoft</button>
                </div>
            </div>
            </form>
        </div>
    </main>
   <footer>

    <section class="redes">

        <p>
            <a href="https://www.instagram.com/gestion_alimenticia_jorge?utm_source=qr&igsh=ZWJ4ZDU0bTM3bDIy">
            <img src="../img/redes sociales/lnstagram.png">
            gestion_alimenticia_Medellin
            </a>
        </p>

        <p>
            <a href="https://wa.me/573107398094?text=Hola%20quiero%20más%20información%20sobre%20sus%20servicios" target="_blank">
            <img src="../img/redes sociales/w.png">
            3234724735
            </a>
        </p>

        <p>
            <a href="https://www.facebook.com/share/1JHe1Jqxjx/">
            <img src="../img/redes sociales/f.png">
            @gestion_alimenticia-med
            </a>
        </p>

    </section>

    <section class="redes">

        <p>
            <a href=" https://www.tiktok.com/@gomezyeral2323._?_r=1&_t=ZS-96wEMCMsZ7P">
            <img src="../img/tito.png">
            @Gestion_alimenticia_
            </a>
        </p>

    </section>

    <section class="alcaldia">

        <img src="../img/logo-med.png" alt="Alcaldía de Medellín">

        <p>Alcaldía de Medellín</p>

    </section>

</footer>
    <script src="../js/mHam.js"></script>
    <script src="../js/buscador.js"></script>
</body>
</html>