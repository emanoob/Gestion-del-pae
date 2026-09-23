
<?php
    include('../base_datos_informes/conexion/abrir_conexion.php');
    $fechaActual = date('Y-m-d');
    $fechaAnterior = date('Y-m-d', strtotime('-7 days'));
    $sql="INSERT INTO `registros_semanales` (`fecha_inicial`,`fecha_final`) VALUES (`$fechaAnterior`,`$fechaActual`)";
    $mysqlquery=mysqli_query($conexion,$sql)
?>