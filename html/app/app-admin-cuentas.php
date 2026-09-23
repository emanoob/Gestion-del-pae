<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '<script>
        alert("Por favor debes iniciar secion");
        window.location = "../iniciarSesion.php
        </script>"';
        header("location:../iniciarSesion.php");
        session_destroy();
        die();
    }
    $usuario=$_SESSION['usuario'];
    $UsurTablaSql="SELECT * FROM cuentas_usuarios WHERE correo= '$usuario'";
    
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion del PAE</title>
    <link rel="stylesheet" href="../../css/estilo.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Monda:wght@400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    </style>



</head>
<body>
    
    <header>

    <section class="superior">

        <img src="../../img/icon.png" alt="Logo" class="logo">

        <h1>GESTIÓN ALIMENTARIA</h1>

        <form class="buscador" id="buscadorForm">
            <input type="search" id="busqueda" placeholder="Buscar...">
            <button type="submit">🔎</button>
        </form>

    </section>
    <button id="abrir" class="menu">☰</button>
    <nav class="nav" id="nav">

        


        <img src="../../img/casa.png" alt="Inicio" class="casa">

        <ul class="despl-list">
            <li><a href="../../index.php" >Inicio</a></li>

            <li>
                <a href="../rutentrega.php" >
                    Rutas de Entrega
                </a>
            </li>

            <li><a href="../servicioCliente.php">Atención y servicios</a></li>

            <li><a href="../pagina4.php">Acceder al servicio</a></li>

            <li><a href="#">App principal</a></li>
        </ul>

    </nav>

</header>
    <main class="app-inst">

<?php

include("../../base_datos/login_php/conexion/abrir_conexion.php");

$consulta = mysqli_query(
    $conexion,
    "SELECT * FROM cuentas_usuarios"
);

?>

<section class="tabla-usuarios">

<h2>Usuarios Registrados</h2>

<table class="tabla-rutas">

<thead>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cédula</th>
    <th>Correo</th>
    <th>Institución</th>
    <th>Teléfono</th>
    <th>Rol</th>
    <th>Acciones</th>
</tr>
</thead>

<tbody>

<?php while($fila=mysqli_fetch_assoc($consulta)){ ?>

<tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['apellido']; ?></td>
    <td><?php echo $fila['cedula']; ?></td>
    <td><?php echo $fila['correo']; ?></td>
    <td><?php echo $fila['institucion']; ?></td>
    <td><?php echo $fila['telefono']; ?></td>
    <td><?php echo $fila['rol']; ?></td>

    <td>
        <a href="editar_usuario.php?id=<?php echo $fila['id']; ?>" class="edit">
            Editar
        </a>
    </td>
</tr>
<?php } ?>

</tbody>

</table>

</section>

</main>

    <footer>

    <section class="redes">

        <p>
            <a href="https://www.instagram.com/gestion_alimenticia_jorge?utm_source=qr&igsh=ZWJ4ZDU0bTM3bDIy" target="_blank">
            <img src="../../img/redes sociales/lnstagram.png">
            gestion_alimenticia_Medellin
            </a>
        </p>

        <p>
            <a href="https://wa.me/573107398094?text=Hola%20quiero%20más%20información%20sobre%20sus%20servicios" target="_blank">
            <img src="../../img/redes sociales/w.png">
            3234724735
            </a>
        </p>

        <p>
            <a href="https://www.facebook.com/share/1JHe1Jqxjx/" target="_blank">
                <img src="../../img/redes sociales/f.png">
                @gestion_alimenticia-med
            </a>
        </p>

    </section>

    <section class="redes">

        <p>
            <a href=" https://www.tiktok.com/@gomezyeral2323._?_r=1&_t=ZS-96wEMCMsZ7P" target="_blank">
            <img src="../../img/tito.png">
            @Gestion_alimenticia_
            </a>
        </p>

    </section>

    <section class="alcaldia">

        <img src="../../img/logo-med.png" alt="Alcaldía de Medellín">

        <p>Alcaldía de Medellín</p>

    </section>

    </footer>
    <script src="../../js/mHam.js"></script>
    <script src="../../js/buscador.js"></script>
    <script src="../../js/app-dialog.js"></script>
</body>
</html>