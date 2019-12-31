<?php
session_start();
date_default_timezone_set('America/Mexico_City');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon16.png" type="image/x-icon" />
    <title>Proyecto con JavaScript</title>

    <!-- Estilos CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link id="theme" rel="stylesheet" type="text/css" href="css/green.css">

    <!-- jQuery -->
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.min.css" />
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.structure.min.css" />
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.theme.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>

    <!-- Plugin validacion -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <!-- Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <!-- Moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es-us.js"></script>

    <!-- Scripts -->
    <script src="js/main.js" type="text/javascript"></script>    
</head>

<body>
    <div id="selector-theme">
        <div id="to-green">

        </div>
        <div id="to-red">

        </div>
        <div id="to-blue">

        </div>
    </div>

    <section id="global">
        <!-- Cabecera -->
        <header>
            <div id="logo">
                <h1>Proyecto JS</h1>
            </div>

            <div class="clearfix"></div>

            <nav id="menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="reloj.php">Reloj</a></li>
                    <li><a href="about.php">Sobre mi</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                    <?php if($_SESSION['ok']) : ?>
                        <li><a href="admin.php">Admin</a></li>
                    <?php else : ?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </header>


        <!-- Contenido -->
        <section id="content">