<?php
$pg = "inicio";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="./imagenes/favicon.ico" />

</head>

<body id="inicio">
    <header class="contaniner">
    <?php include_once("menu.php"); ?>
    </header>
</body>
<main>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center div-cohete">
                <a href="proyectos.php">
                <img src="./imagenes/cohete.svg" class="cohete">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mi sitio web sobre mi capacitacion en sistemas.</p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
            </div>
        </div>

    </div>

</main>
<footer class=" container mt-sm-5 pb-sm-2">
    <div class="btn-whatsapp">
        <a href="" title="Whatsapp"></a> <i class="fa-brands fa-whatsapp"></i>
    </div>
    <div class="row pb-sm-2">
        <div class="col-12 col-sm-3 text-center text-sm-start pt-1 p-sm-0 ">
            <a href="https://github.com/gastonperezmijoff/portfolio.git" target="_blank" title="Github"><i class="fab fa-github"></i></a>
            <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
            Sponsor <a href="https://depcsuite.com" target="_blank">DePC Suite</a>
        </div>
        <div class="col-12 col-sm-3 text-center text-sm-start p-sm-0">
            <a href="mailto:gmijoff@gmail.com" target="_blank">gmijoff@gmail.com</a>
        </div>

    </div>

    </div>

</footer>

</body>

</html>