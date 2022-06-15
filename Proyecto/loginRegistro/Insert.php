<?php
$columnas=$_POST['columnas'];
$valores=$_POST['valores'];
$tabla = $_POST['tabla'];

include('DB2.php');


$consulta = "INSERT INTO ".$tabla ."(".$columnas .")
VALUES(".$valores .")";

if (mysqli_query($conexion, $consulta)) {
  header("Location: http://localhost/Proyecto/loginRegistro/Tablas.php");
exit();
  } else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
  }

mysqli_close($conexion);
?>