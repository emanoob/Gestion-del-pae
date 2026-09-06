<?php
    if(isset($_POST['btn_send'])) {
        

        include("../conexion/abrir_conexion.php");

        $NomInsti=$_POST['NomInsti'];
        $Dir=$_POST['Dir'];
        $Tel=$_POST['Tel'];
        $CedUsu=$_POST['CedUsu'];
        $CorrUsu=$_POST['CorrUsu'];
        $NomUs=$_POST['NomUs'];
        $ApUs=$_POST['ApUs'];
        $Contr=$_POST['Contr'];

        mysqli_query($conexion,"INSERT INTO `registros usuarios`
        (nombre,apellido,cedula,correo,institucion,telefono,contraseña)
        values
        ('$NomUs','$ApUs','$CedUsu','$CorrUsu','$NomInsti','$Tel','$Contr')");

        include("../conexion/cerrar_conexion.php");
        header('Location:../../../html/pagina4.php');
    }


?>