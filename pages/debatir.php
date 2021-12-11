<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debatir</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/debate.css">
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
                                    <li><a class="dropdown-item" href="TemasDeOtrosUsuarios.php">Otros temas</a></li>
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
                                <a class="nav-link active" href="debatir.php">Debatir</a>
                            </li>
                            <?php
                            if ($_SESSION["perfil"] == "admin") {
                                echo '<li class="nav-item">
                                    <a class="nav-link active" href="administracion.php">administacion</a>
                                </li>';
                            }
                            ?>

                            <li class="nav-item">
                                <a class="nav-link active" href="cerrarSesion.php">cerrar Sesion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="m-0 vh-100 row justify-content-center align-items-center">

        <div class="card bg-dark bg-opacity-25 text-center" style="height: 500px;">
            <h1>Funcion en contruccion, no disponibel por el momento</h1>
        </div>
    </div>

</body>

</html>