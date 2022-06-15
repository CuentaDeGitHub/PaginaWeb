<?php
try{
$db = NEW PDO('mysql:host=localhost;dbname=servicio_militar','root','');
}catch(PDOException $e){
    die($e -> getMessage());
}


?>