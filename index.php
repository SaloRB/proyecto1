<?php require 'inc/header.inc'; ?>

<!-- Slider -->
<div id="slider">
    <div class="bxslider">
        <div><img src="img/hojas.jpg" title="Hojas"></div>
        <div><img src="img/rojo.jpg" title="Rojo"></div>
        <div><img src="img/cielo.jpg" title="Cielo"></div>
    </div>
</div>

<div id="posts">
    <?php
    require_once 'lib/config.php';
    require 'lib/errores.php';

    spl_autoload_register(function ($clase) {
        require_once "lib/$clase.php";
    });

    setlocale(LC_ALL, "es_MX");

    $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $db->preparar("SELECT * FROM posts ORDER BY date");
    $db->ejecutar();
    $db->prep()->bind_result($id_post, $author, $title, $content, $date);

    $conteo = 0;
    while ($db->resultado()) {
        $conteo++;

        $date = new DateTime($date);
        $date = $date->format('l, F jS Y');
        echo "
            <article class='post'>
                <h2>$title</h2>
                <span class='date'>Published on $date</span>
                <p>$content</p>
                <a class='btn btn-primary btn-lg' href='#'>Leer mas</a>
            </article>
            ";
    }
    ?>

</div>

<?php require 'inc/aside.inc'; ?>

<div class="clearfix"></div>

<script src="js/index.js" type="text/javascript"></script>

<?php require 'inc/footer.inc'; ?>