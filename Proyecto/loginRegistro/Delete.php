<?php
$condicion=$_POST['condicion'];
$tabla = $_POST['tabla'];

include('DB2.php');


$consulta = "DELETE FROM ".$tabla ." WHERE ".$condicion;

if (mysqli_query($conexion, $consulta)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
  }

mysqli_close($conexion);
?>