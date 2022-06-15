<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$contraseñaEncriptada = md5($contraseña);
session_start();
$_SESSION['usuario'] = $usuario;

include('DB2.php');

$consulta="SELECT*FROM usuario where nombreUSuario='$usuario' and clave ='$contraseñaEncriptada'";
$resultado=mysqli_query($conexion,$consulta);

$filas= mysqli_num_rows($resultado);

if($filas){
    header("location:index.php");
    
}else{  
    ?>
    <?php
    include("LoginRegistro.php");
    ?>
    <h1 class ="bad"> ERROR EN LA AUTENTIFICACION </h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
