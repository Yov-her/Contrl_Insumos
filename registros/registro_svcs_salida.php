<?php
session_start();

require("../conexion.php");
date_default_timezone_set('America/Mexico_City');
   $cdtdte =$_POST["cdtdte"];
    $Tarimas_enviadas=$_POST["Tarimas_enviadas"];
    $Gaylord_Enviados=$_POST["Gaylord_Enviados"];
    $cajas=$_POST["cajas"];
    $costales=$_POST["costales"];
    $Cross_Dock=$_POST["Cross_Dock"];
    $Responsable_Registro=$_SESSION['nombre_usuario'];
    $date = date('Y-m-d H:i:s', time());
$sql="INSERT INTO `salida_svcs` (Centro_de_trabajo_donde_te_encuentras, Tarimas_enviadas, Gaylord_Enviados, cajas, costales, Cross_Dock, Responsable, Fecha_Creación, Fecha_Hora) VALUES ('$cdtdte','$Tarimas_enviadas','$Gaylord_Enviados','$cajas','$costales','$Cross_Dock','$Responsable_Registro',NOW(),'$date')";
$resultado=mysqli_query($enlace,$sql);

header("location:../form.php");
?>