<?php 
session_start();
require_once '../models/Usuario/Usuario.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

$pass = password_hash($password, PASSWORD_BCRYPT);
try{
    Usuario::register($nombre, $email, $pass);
    $_SESSION['registro'] = "Se ha registrado correctamente el usuario $nombre";
}catch(PDOException $e){
    echo $e;
}

header("Location: ../registrar.php");