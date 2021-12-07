<?php
include "model.php";

$json = $_POST["json"];
$id = $_POST["id_usuario"];

if (!empty($json) && !empty($id)) {

    $idusuario = $id;
    eliminarEtiquetasFav($idusuario);
    
    $array = explode(",", $json);
    foreach ($array as &$valor) {

        $id = insertarEtiquetaFav($valor, $idusuario);
    }



    // $id = insertarTema($json, $id);

    // if ($id =1) {


    //     //header("location:../../pages/paginaPrincipal.php");
    // } else {
    //     header("location:error.php");
    // }

} else {
    // header("location:error.php");

    echo $json;
}


//header("location:../../pages/paginaPrincipal.php");