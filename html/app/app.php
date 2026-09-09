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

            <li><a href="../iniciarSesion.php">Iniciar sesión</a></li>
        </ul>

    </nav>

</header>
    <main class="app-pr">
        <section class="options-app">
            <button class="hb-app"><img alt="boton-pleg-app" src="../../img/App/mh.png"></button>
            
            <button class="buton-abrir-regist option-app-item" >
                <img alt="option_item_img" src="../../img/App/1.png">
                <p>Añadir</p>
            </button>
            <button class="option-app-item">
                <img alt="option_item_img" src="../../img/App/2.png">
                <p>Ver registros</p>
            </button>
            <button class="option-app-item">
                <img alt="option_item_img" src="../../img/App/3.png">
                <p>Graficar</p>
            </button>
            <button class="option-app-item">
                <img alt="option_item_img" src="../../img/App/4.png">
                <p>Reportar</p>
            </button>
        </section>
        <section class="app-forms">
            
            <?php

                    include("../../base_datos/informes/conexion/abrir_conexion.php");
                    $UsurTabla=mysqli_query($conexion ,$UsurTablaSql);
                    $usurTablaArr=mysqli_fetch_assoc($UsurTabla);
             
                    for($i=0;$i<=20;$i++)
                        {
                            $resultados=mysqli_query($conexion, "SELECT * FROM `$tabla_db1` WHERE id = $i");
                            WHILE($consulta =mysqli_fetch_array($resultados))
                            {
                                
                                echo "<form action=\"../../base_datos/informes/actualizar/Actualizar.php\" method=\"POST\">";
                                echo "<div class=\"form-item\">";
                                
                                echo "<p>".$consulta['id']."</p>";
                                echo "<p class=\"fecha-form-item\">".$consulta['fecha']."</p>".
                                    "<p>".$consulta['hora']."</p>".
                                    "<div class=\"form-botons\">";
                                    //Boton de ver abre un dialog
                                echo "<input type=\"hidden\" value=\"".$consulta['id']."\" name=\"IDD\">".
                                    "<button class=\"ver\" type=\"button\" data-id=\"".$consulta['id']."\" 
                                    data-nombre=\"".$consulta['nombre']."\" data-cedu=\"".$consulta['cedula']."\" 
                                    data-plentr=\"".$consulta['platos entregados']."\" data-desper=\"".$consulta['desperdicios']."\" 
                                    data-fecha=\"".$consulta['fecha']."\" data-hora=\"".$consulta['hora']."\">Ver</button>";
                                    
                                    //Boton de update abre un dialog
                                    if($usurTablaArr['cedula']==$consulta['cedula']){
                                         echo"<button class=\"update\" type=\"button\" name=\"updatee\" data-id=\"".$consulta['id']."\" 
                                    data-nombre=\"".$consulta['nombre']."\" data-cedu=\"".$consulta['cedula']."\" 
                                    data-plentr=\"".$consulta['platos entregados']."\" data-desper=\"".$consulta['desperdicios']."\" 
                                    data-fecha=\"".$consulta['fecha']."\" data-hora=\"".$consulta['hora']."\">Actualizar</button>";
                                    
                                echo"<input type=\"submit\" value=\"Borrar\" class=\"delete\" name=\"delete\">";
                                    }
                                echo "</div>";
                                
                                
                                echo "</div>";
                                echo "</form>";
                                
                            }
                        }
                        include("../../base_datos/informes/conexion/cerrar_conexion.php");
                    
                ?>
        </section>
        <dialog class="app-regist-inf">
            <button class="buton-cerrar-regist">X</button>
            <h2>Registrar</h2>
            <Form action="../../base_datos/informes/controlador/nuevo.php" method="POST">
                <ul class="regist_camp">
                        <li><p>platos entregados</p></li>
                        <li><input type="text" name="PlEntr" class="PlEntr"></li>    
                </ul>
                <ul class="regist_camp">
                        <li><p>desperdicios kg</p></li>
                        <li><input type="text" name="desper" class="desper"></li>    
                </ul>
                <ul class="regist_camp">
                        <li><p>fecha</p></li>
                        <li><input type="date" name="fecha" class="fecha"></li>    
                </ul>
                <ul class="regist_camp">
                        <li><p>hora</p></li>
                        <li><input type="time" name="hora" class="hora"></li>    
                </ul>
                <input type="submit" name="btn_send_inf" class="btn_send_inf">
                
            </Form>
        </dialog>
        <dialog class="app-ver-inf">
            <button class="cerrar-dialog-ver">X</button>
            <h2>Ver</h2>
            <p>id: <span id="ver-inf-id"></span></p>
            <p>nombre: <span id="ver-inf-nom"></span></p>
            <p>cedula: <span id="ver-inf-ced"></span></p>
            <p>platos entregados: <span id="ver-inf-plt"></span></p>
            <p>fecha: <span id="ver-inf-fecha"></span></p>
            <p>hora: <span id="ver-inf-hora"></span></p>
            <p>desperdicios: <span id="ver-inf-desper"></span></p>
        </dialog>
        <dialog class ="app-update-inf">
            <button class="cerrar-dialog-update">X</button>
            <h2>actualizar</h2>
            <Form action="../../base_datos/informes/controlador/gestion_tabla.php" method="POST">
                <ul class="regist_camp">
                        <li><p>platos entregados</p></li>
                        <li><input type="text" name="newPlEntr" class="PlEntr" placeholder="" id="plt-update"></li>    
                </ul>
                <ul class="regist_camp">
                        <li><p>desperdicios kg</p></li>
                        <li><input type="text" name="newdesper" class="desper" placeholder="" id="desper-update"></li>    
                </ul>
                <ul class="regist_camp">
                        <li><p>fecha</p></li>
                        <li><input type="date" name="newfecha" class="fecha" placeholder="" id="fecha-update"></li>    
                </ul>
                <ul class="regist_camp">
                        <li><p>hora</p></li>
                        <li><input type="time" name="newhora" class="hora" placeholder="" id="hora-update"></li>    
                </ul>
                <input type="hidden" value="" id="IDD2" name="IDD2">
                <input type="submit" name="btn_save" class="btn_save">
                
        </dialog>
        <a href="../../base_datos/login_php/cerrar_sesion.php">Cerrar secion</a>
    </main>

    <footer>

    <section class="redes">

        <p>
            <a href="https://www.instagram.com/gestion_alimenticia_jorge?utm_source=qr&igsh=ZWJ4ZDU0bTM3bDIy">
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
            <a href="https://www.facebook.com/share/1JHe1Jqxjx/">
                <img src="../../img/redes sociales/f.png">
                @gestion_alimenticia-med
            </a>
        </p>

    </section>

    <section class="redes">

        <p>
            <a href=" https://www.tiktok.com/@gomezyeral2323._?_r=1&_t=ZS-96wEMCMsZ7P">
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