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
                <a href="rutentrega.php" >
                    Rutas de Entrega
                </a>
            </li>

            <li><a href="servicioCliente.php">Atención y servicios</a></li>

            <li><a href="#" class="activo">Acceder al servicio</a></li>

            <li><a href="iniciarSesion.php">Iniciar sesión</a></li>
        </ul>

    </nav>

</header>


    <main class="Form">

        <h2>Formulario</h2>


        <section class="formulario">
            <form class="dentro" action="../base_datos/registrar_usuarios/controlador/nuevo.php" method="POST">
            <section class="part">

                <section class ="side">
                    <ul class="Camp">
                        <li><p>Nombre de institicion</p><p class="Important">*</p></li>
                        <li><input type="text" name="NomInsti"></li>    
                    </ul>
                    <ul class="Camp">
                        <li><p>Direccion</p><p class="Important">*</p></li>
                        <li><input type="text" name="Dir"></li>    
                    </ul>
                </section>
                
                <section class="side">
                    <ul class="Camp">
                        <li><p>Telefono</p><p class="Important">*</p></li>
                        <li><input type="int" name="Tel"></li>    
                    </ul>
                </section>
                
            </section>
            <p class="lin">___________________________________________________________________________________________</p>
            <h3>Usuario</h3>

            <section class="part">
                <section class="side">
                    <ul class="Camp">
                        <li class="txt"><p>Cedula de usuario</p><p class="Important">*</p></li>
                        <li><input type="int" name="CedUsu"></li>    
                    </ul>
            
                    <ul class="Camp">
                        <li class="txt"><p>Correo del usuario</p><p class="Important">*</p></li>
                        <li><input type="text" name="CorrUsu"></li>    
                    </ul>
                </section>
                
                <section class="side">
                    <ul class="Camp">
                        <li class="txt"><p>Nombre del usuario</p><p class="Important">*</p></li>
                        <li><input type="text" name="NomUs"></li>   
                    </ul>
                    <ul class="Camp">
                        <li><p class="txt">Apellido del usuario</p><p class="Important">*</p></li>
                        <li><input type="text" name="ApUs"></li>   

                    </ul>
                    <ul class="Camp">
                        <li><p class="txt">Contraseña</p><p class="Important">*</p></li>
                        <li><input type="text" name="Contr"></li>   

                    </ul>
                </section>
                
            </section>
            
            <p class="lin">___________________________________________________________________________________________</p>

            <div class="ButtonsCon">
                <input type="submit" class="Cerrar" name="btn_reset" value="cerrar">
                <input type="submit" name="btn_send" value="enviar">
            </div>
            </form>    
            </section>
        <img src="../img/pagina4/Circulo.png" class="Circulo">
        <img src="../img/pagina4/Circulo.png" class="CirculoA">
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
            <a href="https://www.tiktok.com/@gomezyeral2323._?_r=1&_t=ZS-96wEMCMsZ7P">
            <img src="../img/tito.png">
            @Gestion_alimenticia_
            </a>
        </p>

    </section>

    <section class="alcaldia">

        <img src="../img/logo-med.png" alt="Alcaldía de Medellín">

        <p>Alcaldía de Medellín</p>

    </section>
    <script src="../js/mHam.js"></script>
    <script src="../js/buscador.js"></script>
</footer>
</body>
</html>