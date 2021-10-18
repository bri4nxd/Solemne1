<?php 
session_start();
require_once '../models/Posts/Temas.php';

$id = $_GET['id'];

try{
    Temas::delete($id);
    $_SESSION['delete'] = "Se ha eliminar correctamente el tema";
}catch(PDOException $e){
    echo $e;
}

header("Location: ../indexTema.php");