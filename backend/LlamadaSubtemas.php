<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');


    include "Config.php";
    $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=" . $port, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "SELECT s.id_subtema,s.titulo,s.texto,s.cita, u.nombre, t.id_tema FROM subtema s JOIN temas t ON t.id_tema = s.id_tema JOIN usuarios u ON s.id_usuariosubtema = u.id_usuario ;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $datos = $stmt->fetchAll();
    echo json_encode($datos);
