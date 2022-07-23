<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="./imagenes/favicon.ico" />

</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="conteniner">
<?php include_once("menu.php"); ?>
    </header>
    </body>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtContacto" id="Contacto" placeholder="Contacto"
                            class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control">
                    </div>
                    <div class="pb-sm-5">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control"></textarea>
                    </div>
                    <div>
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </form>
            </div>

        </div>

    </main>
    <footer class="container mt-auto pb-sm-4">
        <div class="btn-whatsapp">
           <a href="" title="Whatsapp"></a> <i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="row mb-sm-4 pb-sm-3">
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                <a href="https://github.com/gastonperezmijoff/portfolio.git" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                Sponsor <a href="https://depcsuite.com" target="_blank">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-center sm-text-start ms-sm-3">
                <a href="mailto:gmijoff@gmail.com" target="_blank">gmijoff@gmail.com</a>
            </div>

        </div>

        </div>

    </footer>

</body>

</html>