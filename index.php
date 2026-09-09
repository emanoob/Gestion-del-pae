<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion del PAE</title>
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Monda:wght@400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    </style>


    
    
</head>
<body>
    
    <header>

    <section class="superior">

        <img src="img/icon.png" alt="Logo" class="logo">

        <h1>GESTIÓN ALIMENTARIA</h1>

        <form class="buscador" id="buscadorForm">
            <input type="search" id="busqueda" placeholder="Buscar...">
            <button type="submit">🔎</button>
        </form>

    </section>
    <button id="abrir" class="menu">☰</button>
    <nav class="nav" id="nav">

        


        <img src="img/casa.png" alt="Inicio" class="casa">

        <ul class="despl-list">
            <li><a href="#" class="activo">Inicio</a></li>

            <li>
                <a href="html/rutentrega.php" >
                    Rutas de Entrega
                </a>
            </li>

            <li><a href="html/servicioCliente.php">Atención y servicios</a></li>

            <li><a href="html/pagina4.php">Acceder al servicio</a></li>

            <li><a href="html/iniciarSesion.php">Iniciar sesión</a></li>
        </ul>

    </nav>

</header>
    <div class="centerP">

    <main>

        <div class="carrusel">

            <div class="grande">
                <img src="img/Pagina principal/carrusel/Primera.png" alt="imagen 1 carrusel" class="img">
                <img src="img/Pagina principal/carrusel/Segunda.png" alt="imagen 2 del carrusel" class="img">
                <img src="img/Pagina principal/carrusel/Tercera.png" alt="imagen 3 del carrusel" class="img">
            </div>

            <ul class="puntos">
                <li class="punto activo"></li>
                <li class="punto"></li>
                <li class="punto"></li>
            </ul>

        </div>

        <div class="Info">

            <div>
                <h2>Reduce el desperdicio</h2>
                <p>
                    Administra los alimentos de forma responsable para evitar pérdidas.
                </p>

                <a href="https://www.fao.org/platform-food-loss-waste/es" class="link-text">
                    CONOCE MÁS
                </a>
            </div>

            <div>
                <h2>Alimentos para todos</h2>
                <p>
                    Accesibilidad para toda la comunidad y oportunidades para todos.
                </p>

                <a href="https://es.wfp.org" class="link-text">
                    CONOCE MÁS
                </a>
            </div>

            <div>
                <h2>Administración responsable</h2>
                <p>
                    Administrar de forma correcta el inventario alimentario.
                </p>

                <a href="https://www.fao.org/home/es" class="link-text">
                    ¿CÓMO?
                </a>
            </div>

        </div>

    </main>

</div>
    <footer>

    <section class="redes">

        <p>
            <a href="https://www.instagram.com/gestion_alimenticia_jorge?utm_source=qr&igsh=ZWJ4ZDU0bTM3bDIy">
            <img src="img/redes sociales/lnstagram.png">
            gestion_alimenticia_Medellin
            </a>
        </p>

        <p>
            <a href="https://wa.me/573107398094?text=Hola%20quiero%20más%20información%20sobre%20sus%20servicios" target="_blank">
            <img src="img/redes sociales/w.png">
            3234724735
            </a>
        </p>

        <p>
            <a href="https://www.facebook.com/share/1JHe1Jqxjx/">
                <img src="img/redes sociales/f.png">
                @gestion_alimenticia-med
            </a>
        </p>

    </section>

    <section class="redes">

        <p>
            <a href=" https://www.tiktok.com/@gomezyeral2323._?_r=1&_t=ZS-96wEMCMsZ7P">
            <img src="img/tito.png">
            @Gestion_alimenticia_
            </a>
        </p>

    </section>

    <section class="alcaldia">

        <img src="img/logo-med.png" alt="Alcaldía de Medellín">

        <p>Alcaldía de Medellín</p>

    </section>

    </footer>
    <script src="..js/mHam.js"></script>
    <script src="js/carrusel.js"></script>
    <script src="..js/buscador.js"></script>
</body>
</html>