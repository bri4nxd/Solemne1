<?php 
session_start();
require_once '../models/Posts/Posts.php';


$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$fecha = $_POST['fecha'];

try{
    Posts::agregar($autor, $titulo, $contenido, $fecha);
    $_SESSION['agregar'] = "Se ha registrado correctamente el post <$titulo>";
    
}catch(PDOException $e){
    echo $e;
}

header("Location: ../addPost.php");