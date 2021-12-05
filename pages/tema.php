<?php
    session_start();
    if(isset($_SESSION["user"])){
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
                                    <li><a class="dropdown-item" href="#">Mis Temas</a></li>
                                    <li><a class="dropdown-item" href="#">Otros temas</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="../pages/tema.php">Iniciar Tema</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="">Mis Etiquetas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../pages/cerrarSesion.php">cerrar Sesion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="card">
        <form action="../backend/insertarTema/controller.php" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="titulo" id="floatingInput" placeholder=" ">
                <label for="floatingInput">Titulo</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="importancia" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 400px"></textarea>
                <label for="floatingTextarea2">Importancia</label>
            </div>
            <br>
            <select class="form-select" name="etiqueta1" aria-label="Default select example">
                <option value="1">Sin Etiqueta</option>
                <option value="2">Etiqueta 1</option>
                <option value="3">Etiqueta 2</option>
                <option value="4">Etiqueta 3</option>
            </select>
            <br>
            <select class="form-select" name="etiqueta2" aria-label="Default select example">
                <option value="1">Sin Etiqueta</option>
                <option value="2">Etiqueta 1</option>
                <option value="3">Etiqueta 2</option>
                <option value="4">Etiqueta 3</option>
            </select>
            <br>
            <select class="form-select" name="etiqueta3" aria-label="Default select example">
                <option value="1">Sin Etiqueta</option>
                <option value="2">Etiqueta 1</option>
                <option value="3">Etiqueta 2</option>
                <option value="4">Etiqueta 3</option>
            </select>
            <br>
            <div hidden>
                <input type="text" name="usuario" value="<?php echo $_SESSION['ID'] ?>">
                <button id="enviar"></button>
            </div>
        </form>
        <div><button id="btnEnvio" class="btn btn-primary">Publicar</button></div>

    </div>


    <footer>

    </footer>
    <script src="../js/ValidadorTexto.js"></script>
    <script src="../js/tema.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>