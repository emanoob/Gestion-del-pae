<?php
    include("../informes/conexion/abrir_conexion.php");

    if (isset($_POST['delete'])){
        include("../informes/conexion/abrir_conexion.php");

        $Del=$_POST['IDD'];
        mysqli_query($conexion,"DELETE FROM `instituciones_registradas` WHERE id = '$Del'");
        include("../informes/conexion/cerrar_conexion.php");

        header('location:../../html/app/app-admin-instituciones.php');
    }
    if(isset($_POST['update'])){
        $Update = $_POST['IDD'];

        $resultados = mysqli_query($conexion,"SELECT * FROM `instituciones_registradas` WHERE Id = $Update");
        while($consulta = mysqli_fetch_array($resultados)){
            echo '<div class=\"formulario\">';
            echo '<form action="controlador/gestion_tabla.php" method="POST">';
            
            echo '<input type="text" name="NewName" value="'.$consulta['nombre institucion'].'"><br>'; 

            echo '<input type="text" name="NewDir" value="'.$consulta['direccion'].'"><br>';

            echo '<input type="text" name="NewIda" value="'.$consulta['id_administrador'].'"><br>'; 

            echo "<input type=\"hidden\" value=\"$Update\" id=\"IDD2\" name=\"IDD2\">";

            echo "<input type=\"submit\" class=\"boton_Actualizar\" name=\"btn_update\" value=\"Actualizar\">"; 

            echo '</form>';
            echo '</div>';





        }


    }

?>