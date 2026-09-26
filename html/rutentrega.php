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

        
    $sql = "SELECT * FROM rutas";
    $resultado = mysqli_query($conexion ,$sql);

    $rutas = [];

    while ($fila = $resultado->fetch_assoc()) {
        $rutas[] = $fila;
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

        <?php if (isset($_SESSION['usuario']) && $rol == "ADP"): ?>
            <th>Acción</th>
        <?php endif; ?>
    </tr>

    <?php foreach ($rutas as $ruta): ?>
        <tr>
            <td><?= $ruta["id"] ?></td>

            <td class="recorrido">
                <?= htmlspecialchars($ruta["recorrido"]) ?>
            </td>

            <td class="estado <?= $ruta["estado"] ?>">
                <?= $ruta["estado"] ?>
            </td>

            <?php if (isset($_SESSION['usuario']) && $rol == "ADP"): ?>
                <td>
                    <button 
                        class="btn-estado"
                        data-id="<?= $ruta["id"] ?>"
                        onclick="cambiarEstado(this)"
                    >
                        <?= $ruta["estado"] == "activa" ? "Desactivar" : "Activar" ?>
                    </button>

                    <button 
                        class="btn-editar"
                        data-id="<?= $ruta["id"] ?>"
                        onclick="editarRuta(this)"
                    >
                        ✏️ Editar
                    </button>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>



<?php

require_once "../base_datos/informes/conexion/abrir_conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"];
    $estado = $_POST["estado"];

    $sql = "UPDATE rutas SET estado = ? WHERE id = ?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("si", $estado, $id);

    if ($stmt->execute()) {
        echo json_encode([
            "success" => true
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "mensaje" => "Error al actualizar"
        ]);
    }

    $stmt->close();
    $conexion->close();
}

?>

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
    
<script>

function cambiarEstado(boton) {

    let fila = boton.closest("tr");
    let estado = fila.querySelector(".estado");
    let id = boton.dataset.id;

    let nuevoEstado = estado.classList.contains("activa")
        ? "inactiva"
        : "activa";

    console.log("ID:", id);
    console.log("Nuevo estado:", nuevoEstado);

    fetch("../base_datos/rutas/actualizar.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "id=" + encodeURIComponent(id) +
              "&estado=" + encodeURIComponent(nuevoEstado)
    })
    .then(response => {

        console.log("HTTP:", response.status);

        return response.text();
    })
    .then(texto => {

        console.log("RESPUESTA PHP:", texto);

        try {

            let data = JSON.parse(texto);

            if (data.success) {

                if (nuevoEstado === "activa") {

                    estado.classList.remove("inactiva");
                    estado.classList.add("activa");

                    estado.innerHTML = "🟢 Activa";
                    boton.innerText = "Desactivar";

                } else {

                    estado.classList.remove("activa");
                    estado.classList.add("inactiva");

                    estado.innerHTML = "🔴 Suspendida";
                    boton.innerText = "Activar";
                }

            } else {

                alert("Error PHP: " + data.mensaje);
            }

        } catch (e) {

            console.error("PHP NO devolvió JSON");
            console.error(texto);

            alert("PHP devolvió un error. Mira la consola.");
        }

    })
    .catch(error => {

        console.error("FETCH ERROR:", error);

        alert("Error de conexión");
    });
}

function editarRuta(boton) {

    let fila = boton.closest("tr");

    let recorrido = fila.querySelector(".recorrido");

    let id = boton.dataset.id;

    let nuevoRecorrido = prompt(
        "Escribe el nuevo recorrido:",
        recorrido.innerText
    );

    // Si canceló
    if (nuevoRecorrido === null) {
        return;
    }

    // Si está vacío
    if (nuevoRecorrido.trim() === "") {
        alert("El recorrido no puede estar vacío.");
        return;
    }

    fetch("../base_datos/rutas/actualizar_recorrido.php", {
        method: "POST",

        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },

        body:
            "id=" + encodeURIComponent(id) +
            "&recorrido=" + encodeURIComponent(nuevoRecorrido)
    })
    .then(response => response.json())

    .then(data => {

        if (data.success) {

            // Solo cambiamos la pantalla
            // después de confirmar que MySQL se actualizó
            recorrido.innerText = nuevoRecorrido;

        } else {

            alert("No se pudo actualizar: " + data.mensaje);
        }

    })

    .catch(error => {

        console.error(error);

        alert("Ocurrió un error al conectar con el servidor.");
    });
}


</script>



</body>
</html>