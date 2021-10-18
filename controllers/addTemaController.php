<?php 
session_start();
require_once '../models/Posts/Temas.php';


$autor = $_POST['autor'];
$tema = $_POST['tema'];
$contenido = $_POST['contenido'];
$fecha = $_POST['fecha'];

try{
    Temas::agregar($autor, $tema, $contenido, $fecha);
    $_SESSION['agregar'] = "Se ha registrado correctamente el tema <$tema>";
    
}catch(PDOException $e){
    echo $e;
}

header("Location: ../addTema.php");