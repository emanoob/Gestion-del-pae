<?php
    if(isset($_POST['btn_send_inf'])){
        include("../../informes/conexion/abrir_conexion.php");

        $Nints=$_POST['Nints'];
        $Dir=$_POST['Dir'];
        $CA=$_POST['CA'];

        $sql = "INSERT INTO `instituciones_registradas`
            (`nombre institucion`, `direccion`, `id_administrador`)
            VALUES
            ('$Nints', '$Dir', '$CA')";
        $query=mysqli_query($conexion,$sql);
        include("../../informes/conexion/cerrar_conexion.php");
        header('Location: ../../../html/app/app-admin-instituciones.php');
        exit;
    }
?>