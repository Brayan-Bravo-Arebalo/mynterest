<?php
include "model.php";

$usuario = $_POST["user"];
$correo = $_POST["correo"];
$pass = $_POST["pass"];

if (!empty($usuario) && !empty($pass) && !empty($correo)) {
   
    $id = insertarUser($usuario,$correo,$pass);
    if ($id > 1) {
        $etiqueta = 1;
        $id2 =insertarEtiquetaFav($etiqueta,$id);
        header("location:../../pages/paginaPrincipal.php");
    } else {
        header("location:../../pages/Error.php");
    }




} else {
    header("location:../../pages/Error.php");

}
