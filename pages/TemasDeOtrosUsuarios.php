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

    <div id="contenido">
        <div hidden>
            <input id="iduser" type="text" value="<?php echo $_SESSION['ID'] ?>">
        </div>
        <div id=listaTemas>

        </div>


    </div>




    <footer>

    </footer>

    <template id="tema">





        <br>
        <div class="card text-center">
            <div class="card-header">

                <button type="button" class="btn btn-white position-relative w-100">
                    <h5 class="nombreTema"></h5>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        <div class="cantidad"></div>
                    </span>
                    <!-- <span class="badge bg-danger"><div class="cantidad"></div></span> -->

                </button>


            </div>

            <div class="card-body">
                <p class="importancia"></p>
            </div>

            <div class="card-footer text-muted">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option value="1">Recientes</option>
                    <option value="2">Antiguos</option>
                    <option value="3">Mas vistos</option>
                </select>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button id="btnAcordion" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ver" aria-expanded="false" aria-controls="ver">
                            <h5 class="nombreSubtema">ver</h5>
                        </button>
                    </h2>
                    <div id="ver" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="accordion" id="accordionExample">

                            </div>

                        </div>
                    </div>
                </div>


                <div>
                    <button id="modal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agragar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="../backend/insertarSubtema/controller.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="titulo" id="floatingInput" placeholder=" ">
                                            <label for="floatingInput">Titulo</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" name="texto" placeholder="" id="floatingTextarea2" style="height: 400px"></textarea>
                                            <label for="floatingTextarea2">Texto</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="cita" id="floatingInput2" placeholder=" ">
                                            <label for="floatingInput2">Cita</label>
                                        </div>
                                        <br>
                                        <div hidden>
                                            <input id="idtema" type="text" name="idtema">
                                            <input type="text" name="usuario" value="<?php echo $_SESSION['ID'] ?>">
                                            <button class="enviar"></button>
                                        </div>




                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button id="btnEnvio" type="button" class="btn btn-primary">publicar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <button class="btn btn-primary">Debatir</button>
                </div>

            </div>
        </div>

    </template>

    <template id="subtema">

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button id="btnAcordion" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5 class="nombreSubtema"></h5>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span class="badge bg-danger rounded-pill">
                        <h6 class="nombreUsuario"></h6>
                    </span><br>
                    <p class="Contenido"></p>
                    <cite title="Source Title" class="cita"></cite>
                </div>
            </div>
        </div>

    </template>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/TemasDeOtrosUsuarios.js"></script>
    <script src="../js/subtema.js"></script>
</body>
<?php include_once("analyticstracking.php") ?>

</html>