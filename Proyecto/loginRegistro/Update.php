<?php
$query=$_POST['query'];
$tabla = $_POST['tabla'];

include('DB2.php');


$consulta = "UPDATE ".$tabla ." SET ".$query;

if (mysqli_query($conexion, $consulta)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
  }

mysqli_close($conexion);
?>