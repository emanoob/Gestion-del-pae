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
            <button type="submit"></button>
        </form>

    </section>
    <button id="abrir" class="menu">☰</button>
    <nav class="nav" id="nav">

        

        <button class="cerrar-menu" id="cerrar">cerrar</button>

        <img src="../img/casa.png" alt="Inicio" class="casa">

        <ul class="despl-list">
            <li><a href="../index.php">Inicio</a></li>

            <li>
                <a href="rutentrega.php">Rutas de Entrega
                </a>
            </li>

            <li><a href="#" class="activo">Atención y servicios</a></li>

            <li><a href="pagina4.php">Acceder al servicio</a></li>

            <li><a href="iniciarSesion.php">Iniciar sesión</a></li>
        </ul>

    </nav>

</header>

<main class ="mainServCl">

    <section class="hero">

        <div class="overlay">

            <div class="card">

                <h2>Servicio al Ciudadano</h2>

                <a href="#">Monitoreo de Consumo en Tiempo Real</a>

                <a href="https://www.medellin.gov.co/es/secretaria-de-inclusion-social-y-familia/subsecretaria-de-grupos-poblacionales/equipo-de-seguridad-alimentaria-y-nutricional/" target="_blank">Logística de Redistribución</a>

                <a href="https://www.medellin.gov.co/es/secretaria-suministros-y-servicios/politica-sostenibilidad/gestion-integral-de-residuos-de-la-alcaldia-de-medellin/" target="_blank">Gestión de Residuos Orgánicos</a>

            </div>

            <div class="card">

                <h2>Atención al cliente</h2>

                <p>Línea de atención general:</p>

                <a href="https://wa.me/573107398094?text=Hola%20quiero%20más%20información%20sobre%20sus%20servicios" target="_blank">
    Escríbenos por WhatsApp
</a>

                <p class="texto">
                    Motivo del contacto:
                    (Opciones: Reportar excedentes,
                    Consulta nutricional,
                    Queja por mal estado,
                    Sugerencia de menú).
                </p>

            </div>

        </div>

    </section>

</main>

<footer>

    <section class="redes">

        <p>
            <a href="https://www.instagram.com/gestion_alimenticia_jorge?utm_source=qr&igsh=ZWJ4ZDU0bTM3bDIy">
            <img src="/img/redes sociales/instagram.png">
            gestion_alimenticia_Medellin
            </a>
        </p>

        <p>
            <a href="https://wa.me/573107398094?text=Hola%20quiero%20más%20información%20sobre%20sus%20servicios" target="_blank">
            <img src="/img/redes sociales/w.png">
            3234724735
            </a>
        </p>

        <p>
            <a href="https://www.facebook.com/share/1JHe1Jqxjx/">
            <img src="/img/redes sociales/f.png">
            @gestion_alimenticia-med
            </a>
        </p>

    </section>

    <section class="redes">

        <p>
            <a href=" https://www.tiktok.com/@gomezyeral2323._?_r=1&_t=ZS-96wEMCMsZ7P">
            <img src="/img/tito.png">
            @Gestion_alimenticia_
            </a>
        </p>

    </section>

    <section class="alcaldia">

        <img src="/img/logo-med.png" alt="Alcaldía de Medellín">

        <p>Alcaldía de Medellín</p>

    </section>

</footer>
    <script src="../js/mHam.js"></script>
    <script src="../js/buscador.js"></script>
</body>
</html>