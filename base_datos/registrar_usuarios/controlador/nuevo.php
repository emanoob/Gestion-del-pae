<?php
    if(isset($_POST['btn_send'])) {
        

        include("../conexion/abrir_conexion.php");

        $NomInsti=$_POST['NomInsti'];
        $Tel=$_POST['Tel'];
        $CedUsu=$_POST['CedUsu'];
        $CorrUsu=$_POST['CorrUsu'];
        $NomUs=$_POST['NomUs'];
        $ApUs=$_POST['ApUs'];
        $Contr=$_POST['Contr'];
        $rol=$_POST['rol'];

        mysqli_query($conexion,"INSERT INTO `cuentas_usuarios`
        (nombre,apellido,cedula,correo,institucion,telefono,contrasena,rol)
        values
        ('$NomUs','$ApUs','$CedUsu','$CorrUsu','$NomInsti','$Tel','$Contr','$rol')");

        include("../conexion/cerrar_conexion.php");
        header('Location:../../../html/pagina4.php');
    }else{
        header('Location:../../../html/pagina4.php');
    }


?>