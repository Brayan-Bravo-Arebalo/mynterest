<?php
include "model.php";

$titulo = $_POST["titulo"];
$importancia = $_POST["importancia"];
$etiqueta1 = $_POST["etiqueta1"];
$etiqueta2 = $_POST["etiqueta2"];
$etiqueta3 = $_POST["etiqueta3"];
$usuario = $_POST["usuario"];

if (!empty($titulo) && !empty($importancia) && !empty($usuario)) {
    $id = insertarTema($titulo, $importancia, $usuario, $etiqueta1, $etiqueta2, $etiqueta3);
    if ($id = 1) {

        header("location:../../pages/misTemas.php");
    } else {
        header("location:../../pages/Error.php");
    }
} else {
    header("location:../../pages/Error.php");
}


//header("location:../../pages/paginaPrincipal.php");