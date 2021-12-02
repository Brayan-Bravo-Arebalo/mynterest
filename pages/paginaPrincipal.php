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

                            <li class="nav-item">
                                <a class="nav-link active" href="">pagina 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="">cuenta</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <footer>

    </footer>

    <template id="tema">

        <br>
        <div class="card text-center">
            <div class="card-header">

                <button type="button" class="btn btn-white position-relative">
                    <h5 id="nombreTema"></h5>
                    <span id="cantidad" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    </span>
                </button>


            </div>

            <div class="card-body">
                <p id="importancia"></p>
            </div>

            <div class="card-footer text-muted">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option value="1">Recientes</option>
                    <option value="2">Antiguos</option>
                    <option value="3">Mas vistos</option>
                </select>
                <div class="accordion" id="accordionExample">

                </div>
                <div>
                    <button class="btn btn-primary">agragar</button>
                    <button class="btn btn-primary">Ant</button>
                    <button class="btn btn-primary">Sig</button>
                    <button class="btn btn-primary">Debatir</button>
                </div>

            </div>
        </div>

    </template>

    <template id="subtema">

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5 id="nombreSubtema"></h5>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <span class="badge bg-danger rounded-pill">
                        <h6 id="nombreUsuario"></h6>
                    </span><br>
                    <p id="Contenido"></p>
                    <cite title="Source Title" id="cita"></cite>
                </div>
            </div>
        </div>

    </template>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>