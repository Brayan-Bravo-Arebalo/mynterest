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

    <div class="card text-center bg-dark bg-opacity-25">
        <div class="container">
            <div class="d-grid gap-2 d-flex justify-content-end">
                <div> <a href="../index.php" class="btn btn-secondary">volver</a> </div>
                <div> <a href="../pages/InicioSesion.php" class="btn btn-secondary">Iniciar Sesion</a> </div>
            </div>
        </div>
        <div class="text-white">
            <h1>Registro</h1>
        </div>
        <form>
            <div class=" form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nombre de Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Repita su contraseña</label>
            </div>
            <button type="submit" class="btn btn-primary">Registrarme</button>
        </form>
    </div>

    <hr>

    <div>
        <button class="btn btn-primary">Facebook</button>
        <button class="btn btn-danger">Gmail</button>
        <button class="btn btn-primary opacity-75">Twitter</button>
    </div>



    </body>
    <?php include_once("analyticstracking.php") ?>

</html>