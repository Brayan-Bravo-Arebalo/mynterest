<?php
function insertarUser($user, $correo, $pass)
{

    try {
        include "../Config.php";
        $perfil = "user";
        $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=" . $port, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, pass, perfil) VALUES (:user, :correo, :pass, :perfil);");

        $stmt->bindParam(":user", $user);
        $stmt->bindParam(":correo", $correo);
        $stmt->bindParam(":pass", $pass);
        $stmt->bindParam(":perfil", $perfil);

        $stmt->execute();

        $valor = $conn->lastInsertId();
        $conn = null;
        return $valor;
    } catch (Exception $e) {
        echo "conexion fallida: " . $e->getMessage();
    }
}


function insertarEtiquetaFav($id_etiqueta, $id)
{


    try {
        include "../Config.php";
        $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=" . $port, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO etiqueta_favorita (id_usuario, id_etiqueta) VALUES (:idusuario, :idetiqueta);");

        $stmt->bindParam(":idusuario", $id);
        $stmt->bindParam(":idetiqueta", $id_etiqueta);

        $stmt->execute();

        $valor = $stmt->fetch(PDO::FETCH_OBJ);
        $conn = null;
        return $valor;
    } catch (Exception $e) {
        echo "conexion fallida: " . $e->getMessage();
    }
}
