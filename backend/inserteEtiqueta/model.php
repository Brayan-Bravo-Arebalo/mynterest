<?php
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


function eliminarEtiquetasFav($id)
{
    try {
        include "../Config.php";
        $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=" . $port, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("DELETE FROM etiqueta_favorita WHERE (id_usuario = :idusuario);");;
        $stmt->bindParam(":idusuario", $id);

        $stmt->execute();

        $valor = $stmt->fetch(PDO::FETCH_OBJ);
        $conn = null;
        return $valor;
    } catch (Exception $e) {
        echo "conexion fallida: " . $e->getMessage();
    }
}
