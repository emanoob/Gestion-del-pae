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
    
    include("../../base_datos/informes/conexion/abrir_conexion.php");

    $UsurTabla=mysqli_query($conexion ,$UsurTablaSql);
    $usurTablaArr=mysqli_fetch_assoc($UsurTabla);
    $institucioncomprobar=$usurTablaArr['institucion'];



    //OPTENIDO DEL FORMULARIO
    $IDRS=$_POST['IDRS'];
    $sqlFecha="SELECT * FROM registros_semanales WHERE id='$IDRS'";
    $fechas=mysqli_query($conexion ,$sqlFecha);
    $fechasArr=mysqli_fetch_assoc($fechas);
    $fechaInicio = $fechasArr['fecha_inicial'];
    $fechaFin = $fechasArr['fecha_final'];
    $total_platos_entregados_gr=$fechasArr['platos_entregados_totales'];
    $total_desperdicios_gr=$fechasArr['desperdicios_totales'];
    $total_platos_env_gr=$fechasArr['platos_enviados'];





    $sql = "SELECT * FROM `informes` WHERE fecha >= '$fechaInicio' AND fecha < DATE_ADD('$fechaFin', INTERVAL 1 DAY) ORDER BY fecha ASC";

    $stmt = mysqli_query($conexion,$sql);
    

    $datos = [];

    while ($fila = mysqli_fetch_assoc($stmt)) {
        if ($fila['institucion']==$institucioncomprobar)
        $datos[] = $fila;
    }
    
    
    $fechas_gr=[];
    $platos_entregados_gr=[];
    $desperdicios_gr=[];
    $platos_env_gr=[];
    for ($i=0;$i< count($datos)-1;$i++){
        $fechas_gr[]=$datos[$i]['fecha'];
        $platos_entregados_gr[]=$datos[$i]['platos entregados'];
        $desperdicios_gr[]=$datos[$i]['desperdicios'];
        $platos_env_gr[]=$datos[$i]['platos_enviados'];
    }
    $fechas_gr[]="total";

    $platos_entregados_gr[]=$total_platos_entregados_gr;
    $desperdicios_gr[]=$total_desperdicios_gr;
    $platos_env_gr[]=$total_platos_env_gr;

    $tiempos_gr=[];
    $dates_gr=[];
    
    
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
    <main class="app-graficar-php">
        <a href="app.php"><- Salir</a>
        <div class="display-grafic">
            <canvas id="myChart"></canvas>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php

 echo '<script>'.
'  const ctx = document.getElementById(\'myChart\');'.
''.
'  new Chart(ctx, {'.
'    type: \'bar\','.
'    data: {'.
'      labels: '.json_encode($fechas_gr).','.
'      datasets: [{'.
'        label: \'platos entregados\','.
'        data: '.json_encode($platos_entregados_gr).','.
'        borderWidth: 1'.
'      },{'.
'        label: \'desperdicios\','.
'        data: '.json_encode($desperdicios_gr).','.
'        borderWidth: 1'.
'      },{'.
'        label: \'platos enviados\','.
'        data: '.json_encode($platos_env_gr).','.
'        borderWidth: 1'.
'      },]'.
'    },'.
'    options: {'.
'      scales: {'.
'        y: {'.
'          beginAtZero: true'.
'        }'.
'      }'.
'    }'.
'  });'.
'</script>';
?>

</script>
        </div>
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