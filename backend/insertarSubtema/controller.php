<?php
include "model.php";

$titulo = $_POST["titulo"];
$texto = $_POST["texto"];
$cita = $_POST["cita"];
$idtema = $_POST["idtema"];
$idusuario = $_POST["usuario"];

if (!empty($titulo) && !empty($texto) && !empty($cita) && !empty($idtema) && !empty($idusuario)) {
    $id = insertarTema($titulo, $texto, $cita, $idusuario, $idtema);
    if ($id = 1) {
        header("location:../../pages/paginaPrincipal.php");
    } else {
        header("location:../../pages/Error.php");
    }

// echo $titulo;
// echo $texto;
// echo $cita;
// echo $idtema;
// echo $idusuario;


} else {
    header("location:../../pages/Error.php");
// echo $titulo;
// echo $texto;
// echo $cita;
// echo $idtema;
// echo $idusuario;
}
