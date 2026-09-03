<?php
    if(isset($_POST['btn_send'])) {
        include("../conexion/abrir_conexion.php");

        $NomInst=$_POST('NomInst');
        $Dir=$_POST('Dir');
        $Tel=$_POST('Tel');
        $CedUsu=$_POST('CedUsu');
        $CorrUsu=$_POST('CorrUsu');
        $NomUs=$_POST('NomUs');
        $ApUs=$_POST('ApUs');
        $Contr=$_POST('Contr');

        mysqli_query($conexion,"INSERT INTO $tabla_db1
        (nombre,apellido,cedula,correo,institucion,telefono,contraseña)
        values
        ('$NomInst','$Dir','$Tel','$CedUsu','$CorrUsu','$NomUs','$ApUs','$Contr')");

        include("../conexion/cerrar_conexion.php");
        header('Location:../../../index.php');
    }
?>