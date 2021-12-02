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
                <a class="navbar-brand" href="../pages/homePage.php">Mysterest</a>
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

    <br>
    <div class="card text-center">
        <div class="card-header">

            <button type="button" class="btn btn-white position-relative">
                Nombre del tema
                <span id="cantidad" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    3
                </span>
            </button>
            <!--
            <button>
                <h4 class="btn-white">Nombre del tema</h4>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    14
                </span>
            </button> -->



        </div>
        <div class="card-body">
            <p>aqui debe ir la importancia del tema</p>
        </div>

        <div class="card-footer text-muted">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option value="1">Recientes</option>
                <option value="2">Antiguos</option>
                <option value="3">Mas vistos</option>
            </select>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapseOne">
                            <h5> subtema con un nombre largo pero no tan largo </h5>
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="badge bg-danger rounded-pill">
                                <h6>nombre usuario 1</h6>
                            </span><br>
                            <strong>This is the first item's accordion body.</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita dicta odio rem consectetur nisi, sequi iste debitis animi error culpa ratione aperiam magnam provident architecto aliquid enim molestias quas adipisci!
                            <cite title="Source Title">aca debe ir su cita</cite>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h5> subten con un nombre largo pero no tan largo </h5>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="badge bg-danger rounded-pill">
                                <h6>nombre usuario 2</h6>
                            </span><br>
                            <strong>This is the first item's accordion body.</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita dicta odio rem consectetur nisi, sequi iste debitis animi error culpa ratione aperiam magnam provident architecto aliquid enim molestias quas adipisci!
                            <cite title="Source Title">aca debe ir su cita</cite>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h5> subten con un nombre largo pero no tan largo </h5>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="badge bg-danger rounded-pill">
                                <h6>nombre usuario 3</h6>
                            </span><br>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita dicta odio rem consectetur nisi, sequi iste debitis animi error culpa ratione aperiam magnam provident architecto aliquid enim molestias quas adipisci!</p>
                            <cite title="Source Title">aca debe ir su cita</cite>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button class="btn btn-primary">agragar</button>
                <button class="btn btn-primary">Ant</button>
                <button class="btn btn-primary">Sig</button>
                <button class="btn btn-primary">Debatir</button>
            </div>

        </div>
    </div>

    <footer>

    </footer>

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