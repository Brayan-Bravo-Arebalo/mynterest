<?php
function insertarTema($titulo, $texto, $cita, $idusuario, $idtema)
{

    try {
        include "../Config.php";
        $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=" . $port, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO subtema (titulo, texto, cita, id_usuariosubtema, id_tema) VALUES (:titulo, :texto, :cita, :idusuario, :idtema)");

        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":texto", $texto);
        $stmt->bindParam(":cita", $cita);
        $stmt->bindParam(":idusuario", $idusuario);
        $stmt->bindParam(":idtema", $idtema);

        $stmt->execute();

        $valor = $stmt->fetch(PDO::FETCH_OBJ);
        $conn = null;
        return $valor;
    } catch (Exception $e) {
        echo "conexion fallida: " . $e->getMessage();
    }
}
