<?php
function insertarTema($titulo, $importancia, $usuario, $etiqueta1, $etiqueta2, $etiqueta3)
{

    try {
        include "../Config.php";
        $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=" . $port, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO temas (titulo, importancia, id_usuario, etiqueta1, etiqueta2, etiqueta3) VALUES (:titulo, :importancia, :usuario, :etiqueta1, :etiqueta2, :etiqueta3)");

        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":importancia", $importancia);
        $stmt->bindParam(":usuario", $usuario);
        $stmt->bindParam(":etiqueta1", $etiqueta1);
        $stmt->bindParam(":etiqueta2", $etiqueta2);
        $stmt->bindParam(":etiqueta3", $etiqueta3);

        $stmt->execute();

        $value = $stmt->fetch(PDO::FETCH_OBJ);
        $conn = null;
        return $value;
    } catch (Exception $e) {
        echo "conexion fallida: " . $e->getMessage();
    }
}
