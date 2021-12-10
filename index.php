<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mynterest</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/LandingPage.css">
</head>

<body>
    <div class="container">
        <div class="d-grid gap-2 d-flex justify-content-end">
            <div> <a href="pages/InicioSesion.php" class="btn btn-secondary">Iniciar Sesion</a> </div>
        </div>
    </div>
    <div class="align-content-center">

        <div class="card text-center bg-dark bg-opacity-25 text-white ">
            <div class="card-header">
                <h1 class="card-title">Mysterest</h1>
                <p class="card-text"> plataforma donde obtener opiniones respaldadas por fuentes dadas por los usuarios </p>
            </div>
            <div class="card-body">
                <h4>
                    <div class="card-text">
                        Un lugar donde propones un tema y la comunidad aporta Contenido

                    </div>
                    <br>
                    <div class="card-text">

                        <div class="card bg-dark bg-opacity-25" >busca temas de tu interes a traves de etiquetas</div>
                        <br>
                        <div class="card bg-dark bg-opacity-25">Ingresa tu opinion a temas a base de fundamentos</div>
                        <br>
                        <div class="card bg-dark bg-opacity-25">  Califica temas de otros usuarios </div>
                        <br>
                        <div class="card bg-dark bg-opacity-25">  Debate con otros usuarios </div>




                    </div>

                </h4>
            </div>
            <div class="card-footer ">
                <a href="pages/Registro.php" class="btn btn-primary">Unirse</a>

            </div>
        </div>
    </div>

</body>
<?php include_once("pages/analyticstracking.php") ?>

</html>