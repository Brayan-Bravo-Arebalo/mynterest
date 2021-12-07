<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if ($_GET["tema"] == "1") {


    include "Config.php";
    $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=" . $port, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "SELECT t.id_tema,t.titulo,t.importancia,e.nombre_etiqueta etiqueta ,e1.nombre_etiqueta etiqueta2 ,e2.nombre_etiqueta etiqueta3, u.nombre usuario,u.id_usuario FROM temas t JOIN etiqueta e ON t.etiqueta1 = e.id_etiqueta JOIN etiqueta e1 ON t.etiqueta2 = e1.id_etiqueta JOIN etiqueta e2 ON t.etiqueta3 = e2.id_etiqueta JOIN usuarios u ON t.id_usuario = u.id_usuario";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $datos = $stmt->fetchAll();
    echo json_encode($datos);
}
