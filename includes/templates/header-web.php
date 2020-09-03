<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ing. Victor Daniel Perez Vargas">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="icon" href="favicon.png" type="image/png" />

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Place your kit's code here -->
    <!-- <link rel="stylesheet" href="css/fontawesome-all.min.css"> -->
    <script src="https://kit.fontawesome.com/2a018e8ab0.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/normalize.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.css">

    <link rel="stylesheet" href="css/carousel.css">

    <link rel="stylesheet" href="css/main.css">

    <meta name="theme-color" content="#fafafa">

    <?php
    // $_SERVER['PHP_SELF']
    // This is the filename of the currently executing script, relative to the document root.
    // PHP_SELF is a variable that returns the current script being executed. 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace('.php', '', $archivo);

    switch ($pagina) {
        case 'login':
            echo '<title>Inicio de Sesión</title>';
            echo ' <meta name="description" content="Inicio de Sesión de Sistema Histoclin Web">';
            break;

        case 'index':
            echo '<title>Histoclin Web</title>';
            echo ' <meta name="description" content="Sistema de Expediente Clínico Online">';
            break;

        case 'contacto':
            echo '<title>Contacto</title>';
            echo ' <meta name="description" content="Envianos tus comentario o dudas.">';
            break;

        case 'conocenos':
            echo '<title>Conócenos</title>';
            echo ' <meta name="description" content="Conoce más de nosotros y lo que hacemos.">';
            break;

        case 'noticias':
            echo '<title>noticias</title>';
            echo ' <meta name="description" content="Te dejamos información que esperamos sea de utilidad.">';
            break;

        default:

            break;
    }

    ?>

</head>

<body class="<?php echo $pagina; ?>">

    <!-- Preloader -->
    <!-- <div class="preloader" style="display: none;">
        <div class="spinner" style="display: none;">
            <div class="circles"></div>
        </div>
    </div> -->
    <!-- Fin Preloader -->

    <header class=" sticky-top ">

        <!-- Menu Navegacion  -->
        <nav id="menu-navegacion" class="sombra-menu navbar navbar-expand-md navbar-light bg-light">
            <!-- Imagen  -->
            <a class="navbar-brand" href="index.php">
                <img src="img/logo-tr3.png" width="110" height="auto" class="d-inline-block align-top" alt="Logo HistoclinWeb" loading="lazy">
            </a>
            <!-- Menu  -->
            <!--  -->
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#IdMenu_navbarNavAltMarkup" aria-controls="IdMenu_navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <!--<span navbar-toggler-icon </span> -->
                <span><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse w-100" id="IdMenu_navbarNavAltMarkup">
                <!-- menu-movil navbar-expand-md align-items-center justify-content-around  -->
                <div class="navbar-nav align-items-center ml-md-auto ">
                    <a class="nav-link w-100 text-center text-nowrap p-2 " href="index.php">Inicio</a>
                    <a class="nav-link w-100 text-center text-nowrap p-2" href="conocenos.php">Conócenos</a>
                    <a class="nav-link w-100 text-center text-nowrap p-2" href="contacto.php">Contacto</a>
                    <a class="nav-link w-100 text-center text-nowrap p-2" href="noticias.php">Noticias</a>
                    <a class="nav-link w-100 text-center text-nowrap text-success p-2" href="login.php"><i class="fa fa-user-circle mr-1"></i> Iniciar Sesión</a>
                </div>
            </div>




        </nav>

    </header>