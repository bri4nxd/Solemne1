<?php
session_start();
require_once '../models/Posts/Temas.php';

var_dump($_POST);

$autor = $_POST['autor'];
$tema = $_POST['tema'];
$contenido = $_POST['contenido'];
$fecha = $_POST['fecha'];
$id = $_POST['id'];

try {
    Temas::update($autor, $tema, $contenido, $fecha, $id);
    $_SESSION['actualizado'] = "Se ha actualizado correctamente el tema <$tema>";
} catch (PDOException $e) {
    echo $e;
}

header("Location: ../editTema.php?id=$id");