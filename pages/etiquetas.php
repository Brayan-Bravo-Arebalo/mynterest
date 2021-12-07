<?php
session_start();
if (isset($_SESSION["user"])) {
} else {
    header("location:../pages/InicioSesion.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/pages.css">
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../pages/paginaPrincipal.php">Mysterest</a>
                <button class="navbar-toggler bg-danger" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tema
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="misTemas.php">Mis Temas</a></li>
                                    <li><a class="dropdown-item" href="#">Otros temas</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="tema.php">Iniciar Tema</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="etiquetas.php">etiquetas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="cerrarSesion.php">cerrar Sesion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div hidden>
        <input id="iduser" type="text" value="<?php echo $_SESSION['ID'] ?>">
    </div>



    <div class="card">
        <h5 class="card-header">Etiquetas Favoritas</h5>
        <div class="card-body">
            <div id="InserEtiquetas">




            </div>


            <button id="GuardarEtiqueta" class="btn btn-primary btn-sm">Guardar</button>
        </div>


    </div>

    <div hidden>

        <form action="../backend/inserteEtiqueta.php/controller.php" method="POST">

            <input name="id_usuario" type="text" value="<?php echo $_SESSION['ID'] ?>">
            <input id="jso" name="json" type="text" value="valorjson">

            <button id="envioEtiqueta" type="submit"></button>

        </form>


    </div>





    <footer>


    </footer>
    <template id="etiquetas">

        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="remplazar">
            <label id="nombreEtiqueta" class="form-check-label" for="remplazar">etiqueta 1</label>
        </div>

    </template>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/etiquetas.js"></script>

</body>

</html>