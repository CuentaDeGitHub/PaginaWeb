<h1> Pantalla de modificacion de datos </h1>

<?php
session_start();
$msg = "Bienvenido " . $_SESSION['usuario']; 

echo ($msg); 

session_destroy();
?>
