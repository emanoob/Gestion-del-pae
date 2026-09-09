<?php
    session_start();
    if(isset($_POST['btn_send_inf'])) {
        

        include("../../informes/conexion/abrir_conexion.php");
        $usuario=$_SESSION['usuario'];
        $PlEntr=$_POST['PlEntr'];
        $desper=$_POST['desper'];
        $fecha=$_POST['fecha'];
        $hora=$_POST['hora'];
        
        $UsurTablaSql="SELECT * FROM cuentas_usuarios WHERE correo= '$usuario'";
        $UsurTabla=mysqli_query($conexion ,$UsurTablaSql);
        $usurTablaArr=mysqli_fetch_assoc($UsurTabla);
        $institucion=$UsurTablaArr['institucion'];
        
        $CedUsu=$usurTablaArr['cedula'];
        $NomUs=$usurTablaArr['nombre'];
        $reportes='';

        $sql = "INSERT INTO `$tabla_db1`
            (`nombre`, `cedula`, `platos entregados`, `fecha`, `hora`,  `desperdicios`,`institucion`)
            VALUES
            ('$NomUs', '$CedUsu', '$PlEntr', '$fecha', '$hora', '$desper', '$institucion')";

    if (mysqli_query($conexion, $sql)) {

        include("../conexion/cerrar_conexion.php");
        header('Location: ../../../html/app/app.php');
        exit;

    } else {

        die("Error al insertar el informe: " . mysqli_error($conexion));
    }
    }


?>