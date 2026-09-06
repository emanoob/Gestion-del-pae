<?php
    if(isset($_POST['btn_save'])){
        include("../conexion/abrir_conexion.php");

        $newPlEntr=$_POST['newPlEntr'];
        $newdesper=$_POST['newdesper'];
        $newfecha=$_POST['newfecha'];
        $newhora=$_POST['newhora'];
        $Update=$_POST['IDD2'];

        $_UPDATE_SQL= "UPDATE `$tabla_db1` SET `platos entregados`='$newPlEntr',
        fecha='$newfecha', hora='$newhora',desperdicios='$newdesper' 
        WHERE id='$Update'";
         
        mysqli_query($conexion,$_UPDATE_SQL);

        include("../conexion/cerrar_conexion.php");
        header('Location:../../../html/app/app.php');
    }
?>