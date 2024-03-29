<?php
$pg = "sobre-mi";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sobre-mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="./imagenes/favicon.ico" />

</head>

<body id="sobre-mi">
    <header class="contaniner">
    <?php include_once("menu.php"); ?>
    </header>
</body>
<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-5 mt-4 pb-sm-4">
                <h1>Sobre mí</h1>

                <div class="mt-4 pb-3">
                    <p>Apasionado por la vida y los proyectos. Soy empatico, creativo y comprometido. Disfruto tener nuevos objetivos y los procesos para cumplirlos.                       
                    </p>
                </div>
                <div class="mt-5">
                    <a href="contacto.php" class="btn-rojo p-2 px-3">Enviar mensaje</a>
                </div>
            </div>

            <div class="col-sm-3 col-12 mb-2 mt-4 offset-sm-2">
                <img src="./imagenes/imggaston11.jpg" alt="Gaston Nicolas Perez" class="img-fluid img-circle">
            </div>
        </div>
    </div>
    <section id="tecnologia">
        <div class="col-12" id="tecnologia">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h2 class="my-sm-5 text-white">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 java">
                            <h3>Javascript</h3>
                            <img src="./imagenes/javascript.jpeg" alt="javascript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 php">
                            <h3>PHP</h3>
                            <img src="./imagenes/php.jpg" alt="PHP">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 html">
                            <h3>HTML5</h3>
                            <img src="./imagenes/html.jpg" alt="HTML">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 react">
                            <h3>React.js</h3>
                            <img src="./imagenes/react.jpg" alt="React.js">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 jquery">
                            <h3>jQuery</h3>
                            <img src="./imagenes/jquery.jpg" alt="jQuery">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center mb-sm-3">
                        <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 bootstrap">
                            <h3>Bootstrap</h3>
                            <img src="./imagenes/bootstrap.jpg" alt="Bootstrap">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 java">
                            <h3>Laravel</h3>
                            <img src="./imagenes/laravel.jpg" alt="Laravel">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 php">
                            <h3>MySQL</h3>
                            <img src="./imagenes/mysql.jgp.png" alt="MySQL">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 html">
                            <h3>CSS</h3>
                            <img src="./imagenes/css.jpg" alt="CSS">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 react">
                            <h3>Git</h3>
                            <img src="./imagenes/git.jpg" alt="Git">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 jquery">
                            <h3>Apache</h3>
                            <img src="./imagenes/apache.jpg" alt="Apache">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center mb-sm-3">
                        <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 bootstrap">
                            <h3>Mercadopago</h3>
                            <img src="./imagenes/mercadopago.jpg" alt="Mercadopago">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experiencia">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i> Experiencia laboral</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded">
                <div class="col-12 p-3">
                    <div class="row mt-0">
                        <div class="col-sm-2 col-4 text-center my-auto p-4">
                            <img src="./imagenes/vw.jpg" alt="Autotag" class="img-fluid">
                        </div>
                        <div class="col-sm-10 col-8 my-auto">
                            <h3>Asesor Comercial de 0km</h3>
                            <h4>Autotag SA</h4>
                            <h5>2020 - presente</h5>
                            <p> Realizo la tarea de Asesor comercial de autos 0km, usados y planes de ahorro. Ademas
                                manejo los canales digitales como Mercado Libre, Facebook y Autocosmos. Llevo la gestion
                                de los datos por el programa Tecnom y Volkswagen Force. Ademas certifique el eTraining
                                de Volkswagen. "Lead Management" </p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-2 col-4 text-center my-auto">
                            <img src="./imagenes/taraborelli1.jpg" alt="Taraborelli" class="img-fluid">
                        </div>
                        <div class="col-sm-10 col-8 my-auto">
                            <h3>Supervisor de ventas convencional</h3>
                            <h4>Taraborelli SA</h4>
                            <h5>2014 - 2020</h5>
                            <p> Supervicion de equipo de venta convencional en casa central, realizaba reuniones con
                                equipo de Marketing, Recursos Humanos y Calidad para un mejor funcionamiento de la
                                sucursal y el alineamiento de los objetivos de venta. En esta empresa logre formarme
                                como Asesor comercial y supervisor, iniciando mi recorrido como asesor de planes de
                                ahorro. Aprendi a manejar herramientas para la gestion de datos como Pilot, Tecnom,
                                Mercado Libre y DoubleTic</p>
                        </div>
                    </div>

                    <div class="row mb-3 mt-3">
                        <div class="col-sm-2 col-4 text-center my-auto">
                            <img src="./imagenes/vetanco1.jpg" alt="VetancoSA" class="img-fluid">
                        </div>
                        <div class="col-sm-10 col-8">
                            <h3>Supervisor de empaque y deposito</h3>
                            <h4>Vetanco SA</h4>
                            <h5>2006 - 2013</h5>
                            <p>Lidere equipos de trabajo en los sectores de empaque y deposito, aprendi a utilizar el
                                sistema SAP para la gestion de todos los procesos de trabajos de ambos sectores. En los
                                cuales trabajabamos fuertemente para estar siempre alineados a los protocolos y normas
                                de calidad del SENASA.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="desarrollo" class="conteiner mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
                </div>

                <div class="row shadow bg-white rounded p-1">
                    <div class="col-12 col-sm-6 mb-2 mb-sm-0">
                        <div class="row">
                            <div class="col-sm-2 col-4 my-4 p-0 d-sm-block">
                                <img src="./imagenes/grow.jpg" alt="Grow consultora" class="img-fluid">
                            </div>
                            <div class="col-6 col-sm-10 mt-sm-3">
                                <h3>Curso de Coaching Ontologico</h3>
                                <h4>Grow consultora</h4>
                                <h5>2020 - 2021</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 mb-4">
                        <div class="row">
                            <div class="col-sm-2 col-4 p-3 my-auto">
                                <img src="./imagenes/uk.jpg" alt="Universidad Kennedy" class="img-fluid">
                            </div>
                            <div class="col-6 col-sm-10 mt-3">
                                <h3>Productor Asesor de Seguros</h3>
                                <h4>Universidad Jhon F. Kennedy</h4>
                                <h5>Expedición: dic 2016</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-sm-2 col-4 my-auto p-0">
                                <img src="./imagenes/mandatario.jpg" alt="Mandatario" class="img-fluid">
                            </div>
                            <div class="col-6 col-sm-10 my-sm-3 mt-0">
                                <h3>Mandatario del Automotor</h3>
                                <h4>Pio XII</h4>
                                <h5>Expedición: dic 2014</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-sm-2 col-4 p-3">
                                <img src="./imagenes/sin-logo.png" alt="Lincoln Shine" class="img-fluid">
                            </div>
                            <div class="col-8 col-sm-10 my-3">
                                <h3>English 7º año</h3>
                                <h4>Instituto Lincoln Shine</h4>
                                <h5>Expedición: dic 2004</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </section>

        <section id="idiomas">
            <div class="container">
                    <div class="row py-5 mx-0">
                        <div class="col-sm-6 col-12 pb-sm-1">
                            <div class="row mr-sm-1 bg-white card-idioma shadow pb-0 me-sm-1">
                                <div class="col-4 text-center icon">
                                    <i class="fas fa-comment-alt"></i>
                                </div>
                                <div class="col-8 p-5">
                                    <h2>IDIOMAS</h2>
                                    <ul class="m-0">
                                        <li>ESPAÑOL - Nativo</li>
                                        <li>INGLÉS - Intermediate B2</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                                <div class="col-4 text-center icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="col-8 p-5">
                                    <h2>HOBBIES</h2>
                                    <ul>
                                        <li>Futbol</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>


</main>
<footer class="container">
    <div class="row mt-5 pb-3">
        <div class="col-12 col-sm-3 text-sm-start ms-1">
            <a href="https://github.com/gastonperezmijoff/portfolio.git" target="_blank" title="Github"><i class="fab fa-github"></i></a>
            <a href="" target="_blank" title="Linkedin"><i
                    class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-12 col-sm-3 ms-1 text-sm-start pt-2 p-sm-0">
            Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
        </div>
        <div class="col-12 col-sm-3 text-sm-start ms-1  pt-2 p-sm-0">
            <a href="mailto:gmijoff@gmail.com">gmijoff@gmail.com.</a>
        </div>
    </div>
</footer>
<div >
    <a href="https://api.whatsapp.com/send?phone=541131374760" class="btn-whatsapp" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
</div>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script></body>

</html>