<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/inicioSesion.css">
</head>

<body class="m-0 vh-100 row justify-content-center align-items-center" style="backdrop-filter: blur(5px)">

    <div class="bg-white ">
        <form action="../backend/inicioSesion/loginController.php" method="POST">
            <div>
                <h2>Inicio de Sesión</h2>
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Correo</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <br>
            <button type="submit" onclick="login()" class="btn btn-primary">Submit</button>
            <div hidden>
                <button id="btnLogin" type="submit">login</button>
                <input type="password2" name="password2" class="form-control" id="password2">

            </div>
        </form>
    </div>
    <script src="../js/md5.js"></script>
    <script src="../js/inicioSesion.js"></script>
</body>
<?php include_once("analyticstracking.php") ?>

</html>