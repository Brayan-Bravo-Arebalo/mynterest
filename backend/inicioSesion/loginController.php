<?php

include "loginModel.php";

$userEmail = $_POST['email'];
$password = $_POST['password2'];

if (!empty($userEmail) && !empty($password)) {
    $id = connection($userEmail, $password);

    if ($id > 0) {


        session_start();
        $_SESSION["user"] = $userEmail;
        $_SESSION["ID"] = $id;


        header("location:../../pages/paginaPrincipal.php");
    } else {
        header("location:../../pages/InicioSesion.php");
        die();
    } 
} else {
    header("location:../../pages/InicioSesion.php"); 
    die();
}
