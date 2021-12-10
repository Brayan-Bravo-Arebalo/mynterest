<?php
    function connection($userEmail,$pass){
        try{
            include"../Config.php";
            $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=". $port, $username, $password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $conn ->prepare("SELECT ID_USUARIO FROM usuarios WHERE CORREO = :email AND PASS = :pass");
            
            $stmt ->bindParam(":email",$userEmail);
            $stmt ->bindParam(":pass",$pass);
            
            $stmt ->execute();
            
            
            $value = $stmt->fetch(PDO::FETCH_OBJ);
            $conn= null;
            return $value->ID_USUARIO;


        } catch (Exception $e) {
            echo "conexion fallida: " . $e->getMessage();
        }



    }


    function perfil($id){
        try{
            include"../Config.php";
            $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=". $port, $username, $password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $conn ->prepare("SELECT perfil FROM usuarios WHERE id_usuario = :id");
            
            $stmt ->bindParam(":id",$id);
            
            $stmt ->execute();
            
            
            $value = $stmt->fetch(PDO::FETCH_OBJ);
            $conn= null;
            return $value->perfil;


        } catch (Exception $e) {
            echo "conexion fallida: " . $e->getMessage();
        }

    }
