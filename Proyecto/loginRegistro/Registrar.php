<?php
$usuario=$_POST['usuarioRegistro'];
$correo=$_POST['correoRegistro'];
$contraseña=$_POST['contraseñaRegistro'];
$contraseñaConfirmacion=$_POST['contraseña2Registro'];

include('DB2.php');

if($contraseña === $contraseñaConfirmacion)
{
$contraseñaEncriptada = md5($contraseña);
$consulta = "INSERT INTO usuario (nombreUSuario,correo,clave)
VALUES('$usuario','$correo','$contraseñaEncriptada')";
if (mysqli_query($conexion, $consulta)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
  }
}

mysqli_close($conexion);
?>