<?php
    include("../base_datos/informes/conexion/abrir_conexion.php");
    session_start();
    if(isset($_SESSION['usuario'])){
        $usuario=$_SESSION['usuario'];
        $UsurTablaSql="SELECT * FROM cuentas_usuarios WHERE correo= '$usuario'";
        $UsurTabla=mysqli_query($conexion ,$UsurTablaSql);
        $usurTablaArr=mysqli_fetch_assoc($UsurTabla);
        $rol=$usurTablaArr['rol'];
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
                <a href="#" class="activo">
                    Rutas de Entrega
                </a>
            </li>

            <li><a href="servicioCliente.php">Atención y servicios</a></li>

            <li><a href="pagina4.php">Acceder al servicio</a></li>

            <?php
                if(isset($_SESSION['usuario'])){
                    echo '<li><a href="iniciarSesion.php">App principal</a></li>';
                }else{
                    echo '<li><a href="iniciarSesion.php">Iniciar sesión</a></li>';
                }
            ?>
        </ul>

    </nav>

</header >

<main class="mainentr">

    <section class="informacion">

        <h2>📍Rutas de Entrega</h2>

        <p>
            Consulta las rutas de entrega de los alimentos.
            Trabajamos para que los alimentos lleguen de forma
            segura y oportuna.
        </p>

        <a href="https://www.google.com/maps/d/edit?mid=1x5u3iXzpNnCtzeObVjZP4-MGctkWAWM&usp=sharing">
            <img src="../img/rutas de entrega/mapa nuevo de las rutas medellin.png" alt="Mapa">
        </a>

        <article class="articleentr">

            <img src="../img/rutas de entrega/calend.png" alt="Calendario">

            <div>

                <h3>Información importante</h3>

                <p>
                    Los horarios pueden variar según condiciones
                    climáticas o disponibilidad de rutas.
                </p>

            </div>

        </article>

    </section>

    <aside class="asideentr">

        <img src="../img/rutas de entrega/gmedellin.jpg" alt="Mapa Medellín">

       
<table class="tabla-rutas" id="tablaRutas">

    <tr>
        <th>Ruta</th>
        <th>Recorrido</th>
        <th>Estado</th>
        <?php
        if(isset($_SESSION['usuario']) && $rol=="ADP"){
            echo"<th>Acción</th>";
        }
            
        ?>
        
    </tr>

    <tr>
        <td>A</td>
        <td class="recorrido">Robledo → Aranjuez</td>
        <td class="estado activa">🟢 Activa</td>
        <?php
            if(isset($_SESSION['usuario']) && $rol=="ADP"){
                echo '<td>';
                echo '<button class="btn-estado" onclick="cambiarEstado(this)">';
                echo 'Desactivar';
                echo '</button>';
                echo '<button class="btn-editar" onclick="editarRuta(this)">';
                echo '✏️ Editar';
                echo '</button>';
                echo '</td>';
            }
        ?>
    </tr>

    <tr>
        <td>B</td>
        <td class="recorrido">Centro → Boston</td>
        <td class="estado activa">🟢 Activa</td>
        <?php
            if(isset($_SESSION['usuario']) && $rol=="ADP"){
                echo '<td>';
                echo '<button class="btn-estado" onclick="cambiarEstado(this)">';
                echo 'Desactivar';
                echo '</button>';
                echo '<button class="btn-editar" onclick="editarRuta(this)">';
                echo '✏️ Editar';
                echo '</button>';
                echo '</td>';
            }
        ?>
    </tr>

    <tr>
        <td>C</td>
        <td class="recorrido">Buenos Aires → La Milagrosa</td>
        <td class="estado proceso">🟡 En proceso</td>
        <?php
            if(isset($_SESSION['usuario']) && $rol=="ADP"){
                echo '<td>';
                echo '<button class="btn-estado" onclick="cambiarEstado(this)">';
                echo 'Desactivar';
                echo '</button>';
                echo '<button class="btn-editar" onclick="editarRuta(this)">';
                echo '✏️ Editar';
                echo '</button>';
                echo '</td>';
            }
        ?>
    </tr>

    <tr>
        <td>D</td>
        <td class="recorrido">Belén → Guayabal</td>
        <td class="estado inactiva">🔴 Suspendida</td>
        <?php
            if(isset($_SESSION['usuario']) && $rol=="ADP"){
                echo '<td>';
                echo '<button class="btn-estado" onclick="cambiarEstado(this)">';
                echo 'Desactivar';
                echo '</button>';
                echo '<button class="btn-editar" onclick="editarRuta(this)">';
                echo '✏️ Editar';
                echo '</button>';
                echo '</td>';
            }
        ?>
    </tr>

</table>



    </aside>

</main>

<footer>

    <section class="redes">

        <p>
            <a href="https://www.instagram.com/gestion_alimenticia_jorge?utm_source=qr&igsh=ZWJ4ZDU0bTM3bDIy" target="_blank">
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
            <a href="https://www.facebook.com/share/1JHe1Jqxjx/" target="_blank">
                <img src="../img/redes sociales/f.png">
                @gestion_alimenticia-med
            </a>
        </p>

    </section>

    <section class="redes">

        <p>
            <a href=" https://www.tiktok.com/@gomezyeral2323._?_r=1&_t=ZS-96wEMCMsZ7P" target="_blank">
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
<<<<<<< HEAD
    
=======
>>>>>>> b518b2e05211e4afb94e5b3fae886ad56db2c8b6
<script>

function cambiarEstado(boton) {

    // Buscamos la fila donde está el botón
    let fila = boton.closest("tr");

    // Buscamos la celda del estado
    let estado = fila.querySelector(".estado");

    // Si actualmente está activa
    if (estado.classList.contains("activa")) {

        estado.classList.remove("activa");
        estado.classList.add("inactiva");

        estado.innerHTML = "🔴 Suspendida";

        boton.innerText = "Activar";

    } 
    
    // Si está suspendida
    else {

        estado.classList.remove("inactiva");
        estado.classList.add("activa");

        estado.innerHTML = "🟢 Activa";

        boton.innerText = "Desactivar";
    }
}


function editarRuta(boton) {

    // Buscamos la fila
    let fila = boton.closest("tr");

    // Buscamos el recorrido
    let recorrido = fila.querySelector(".recorrido");

    // Pedimos el nuevo recorrido
    let nuevoRecorrido = prompt(
        "Escribe el nuevo recorrido:",
        recorrido.innerText
    );

    // Si el usuario escribió algo
    if (nuevoRecorrido !== null && nuevoRecorrido.trim() !== "") {

        recorrido.innerText = nuevoRecorrido;
    }
}

</script>
```


</body>
</html>