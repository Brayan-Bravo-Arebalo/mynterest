<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/registro.css">
</head>

<body">

    <div class="card text-center bg-dark bg-opacity-50">
        <div class="container">
            <div class="d-grid gap-2 d-flex justify-content-end">
                <div> <a href="../index.php" class="btn btn-secondary">volver</a> </div>
                <div> <a href="../pages/InicioSesion.php" class="btn btn-secondary">Iniciar Sesion</a> </div>
            </div>
        </div>
        <div class="text-white">
            <h1>Registro</h1>
        </div>
        <form action="../backend/registro/controller.php" method="POST">
            <div class=" form-floating mb-3">
                <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="Text" name="user" class="form-control" id="floatingInput2" placeholder="name@example.com" required>
                <label for="floatingInput2">Nombre de Usuario</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword2" placeholder="Password" required>
                <label for="floatingPassword2">Repita su contraseña</label>
            </div>
            <div hidden>
                <input id="passencrip" name="pass" type="text" name="passencrip">
                <button id="envio" type="submit" class="btn btn-primary">envio</button>

            </div>
        </form>
        <button id="registrarme" type="submit" class="btn btn-primary">Registrarme</button>

        <hr>

        <div>
            <button id="facebook" class="btn btn-primary">Facebook</button>
            <button id="gmail" class="btn btn-danger">Gmail</button>
            <button id="twitter" class="btn btn-primary opacity-75">Twitter</button>
        </div>

        <br><br>

    </div>




    <script src="../js/md5.js"></script>
    <script src="../js/registro.js"></script>
    </body>
    <?php include_once("analyticstracking.php") ?>

</html>