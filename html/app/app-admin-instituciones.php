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
    include("../../base_datos/informes/conexion/abrir_conexion.php");
    $usuario=$_SESSION['usuario'];
    $UsurTablaSql="SELECT * FROM cuentas_usuarios WHERE correo= '$usuario'";
    $query=mysqli_query($conexion,$UsurTablaSql);
    $arrayUsur=mysqli_fetch_array($query);
    if($arrayUsur['rol'] != "ADP"){
        
        header("location:app.php");
        die();
    }
    
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

            <li><a href="app.php">App principal</a></li>
        </ul>

    </nav>

</header>
    <main class="app-inst">
        <section>
            
            <h2>Crear Institucion</h2>
            <form method="POST" action="../../base_datos/instituciones/controlador/nuevo.php">
                <ul class="regist_camp">
                    <li><p>Nombre institucion:</p></li>
                    <li><input type="text" name="Nints" class="Nints"></li>    
                </ul>
                <ul class="regist_camp">
                    <li><p>Direccion:</p></li>
                    <li><input type="text" name="Dir" class="Dir"></li>    
                </ul>
                <ul class="regist_camp">
                    <li><p>Cedula admin:</p></li>
                    <li><input type="text" name="CA" class="CA"></li>    
                </ul>
                <input type="submit" name="btn_send_inf" class="btn_send_inf">
            </form>
        </section>
            <div class="instituciones-registros-table">
            <table class="tabla-rutas">
                <tr>
                    <th>Id </th>
                    <th>Nombre </th>
                    <th>Direccion </th>
                    <th>Cedula Administrador </th>
                    <th> </th>
                    <th></th>
                </tr>
                
                <?php
                    include("../../base_datos/informes/conexion/abrir_conexion.php");

                    for($i=0;$i<=20;$i++){
                        $resultados=mysqli_query($conexion, "SELECT * FROM `instituciones_registradas` WHERE id = $i");
                        WHILE($consulta =mysqli_fetch_array($resultados)){
                            echo "<tr>";

                            echo "<form action=\"../../base_datos/instituciones/actualizar.php\" method=\"POST\">";

                            echo "<td>";
                            echo $consulta['id'];
                            echo "</td>";

                            echo "<td>";
                            echo $consulta['nombre institucion'];
                            echo "</td>";

                            echo "<td>";
                            echo $consulta['direccion'];
                            echo "</td>";

                            echo "<td>";
                            echo $consulta['id_administrador'];
                            echo "</td>";


                            echo"<input type=\"hidden\" value=\"".$consulta['id']."\" name=\"IDD\">";

                            echo "<td>";
                            echo"<input type=\"submit\" value=\"Actualizar\" class=\"update\" name=\"update\">";
                            echo "</td>";

                            echo "<td>";
                            echo"<input type=\"submit\" value=\"Borrar\" class=\"delete\" name=\"delete\">";
                            echo "</td>";

                            echo "</tr>";
                        }
                    }
                ?>
                
            </table>
            <div>
        
        
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