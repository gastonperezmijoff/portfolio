<?php
$pg = "proyectos";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="./imagenes/favicon.ico" />

</head>

<body id="proyectos">
    <header class="conteniner">
    <?php include_once("menu.php"); ?>
    </header>
</body>
<main class="container">
    <div class="row">
        <div class="col-12 mb-5 mt-3">
            <h1>Proyectos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>Los siguientes son algunos de los trabajos que eh realizado:</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-4 p-4">
            <div class="row border proyecto pb-5">
                <div class="col-12 p-0">
                    <img src="imagenes/abmclientes.png" alt="AMB CLIENTES" class="img-fluid">
                </div>
                <div class="col-12 color py-3 pb-1">
                    <h2>ABM CLIENTES</h2>
                </div>
                <p class="py-3 pb-5 px-3">Altas,bajas y modificacion de registro de clientes.
                    Realizado en HTML, CSS, PHP, bootstrap y Json.</p>

                <div class="col-6">
                    <a href="#" class="btn-rojo p-2 px-3">Ver online</a>

                </div>
                <div class="col-6 text-center">
                    <a href="#" class="link-rojo">Código fuente</a>

                </div>
            
        </div>
    </div>
    <div class="col-12 col-sm-4 p-4">
        <div class="row border proyecto pb-5">
            <div class="col-12 p-0">
                <img src="imagenes/abmventas.png" alt="AMB VENTAS" class="img-fluid">
            </div>
            <div class="col-12 color py-3 pb-1">
                <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
            </div>
            <p class="py-2 px-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>

            <div class="col-6">
                <a href="#" class="btn-rojo p-2 px-3">Ver online</a>

            </div>
            <div class="col-6 text-center">
                <a href="#" class="link-rojo">Código fuente</a>

            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 p-4">
        <div class="row border proyecto pb-sm-5">
            <div class="col-12 p-0">
                <img src="imagenes/proyecto-integrador.png" alt="listado de cobros" class="img-fluid">
            </div>
            <div class="col-12 color py-3 pb-1">
                <h2>PROYECTO INTEGRADOR</h2>
            </div>
            <p class="py-2 px-3">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>

            <div class="col-6">
                <a href="#" class="btn-rojo p-2 px-3">Ver online</a>

            </div>
            <div class="col-6 text-center">
                <a href="#" class="link-rojo">Código fuente</a>

            </div>
        
    </div>

</main>
<footer class=" container mt-auto pb-sm-2">
    <div class="btn-whatsapp">
       <a href="" title="Whatsapp"></a> <i class="fa-brands fa-whatsapp"></i>
    </div>
    <div class="row mt-5 pb-3">
        <div class="col-12 col-sm-3 text-start">
            <a href="https://github.com/gastonperezmijoff/portfolio.git" target="_blank" title="Github"><i class="fab fa-github"></i></a>
            <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-12 col-sm-3 text-start pt-2 p-sm-0 ">
            Sponsor <a href="https://depcsuite.com" target="_blank">DePC Suite</a>
        </div>
        <div class="col-12 col-sm-3 text-start ms-0">
            <a href="mailto:gmijoff@gmail.com" target="_blank">gmijoff@gmail.com</a>
        </div>

    </div>

    </div>

</footer>

</body>

</html>