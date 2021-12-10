<?php

include "loginModel.php";

$userEmail = $_POST['email'];
$password = $_POST['password2'];

if (!empty($userEmail) && !empty($password)) {
    $id = connection($userEmail, $password);

    if ($id > 0) {

        $perfil = perfil($id);


        session_start();
        $_SESSION["user"] = $userEmail;
        $_SESSION["ID"] = $id;
        $_SESSION["perfil"] = $perfil;


        header("location:../../pages/paginaPrincipal.php");
    } else {
        header("location:../../pages/InicioSesion.php");
        die();
    } 
} else {
    header("location:../../pages/InicioSesion.php"); 
    die();
}
