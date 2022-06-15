<?php
$hostName = "localhost";
$userName = "root";
$password = '';

// Crear conexion
$conexion = mysqli_connect($hostName, $userName,$password,'servicio_militar');

// Verificar conexion
if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}
?>