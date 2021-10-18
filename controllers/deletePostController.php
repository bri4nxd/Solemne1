<?php 
session_start();
require_once '../models/Posts/Posts.php';

$id = $_GET['id'];

try{
    Posts::delete($id);
    $_SESSION['delete'] = "Se ha eliminar correctamente el post";
}catch(PDOException $e){
    echo $e;
}

header("Location: ../index.php");