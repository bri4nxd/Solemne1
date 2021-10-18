<?php
session_start();
require_once '../models/Posts/Posts.php';

var_dump($_POST);

$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$fecha = $_POST['fecha'];
$id = $_POST['id'];

try {
    Posts::update($autor, $titulo, $contenido, $fecha, $id);
    $_SESSION['actualizado'] = "Se ha actualizado correctamente el post <$titulo>";
} catch (PDOException $e) {
    echo $e;
}

header("Location: ../editPost.php?id=$id");
