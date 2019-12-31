<?php require 'inc/header.inc'; ?>

<?php

if (!$_SESSION['ok']) {
    header("Location: index.php");
}

if (isset($_POST['logout'])) {
    $_SESSION['ok'] = false;
    $_SESSION['user_id'] = null;
    header("Location: index.php");
}
?>

<?php
require_once 'lib/config.php';
require 'lib/errores.php';

spl_autoload_register(function ($clase) {
    require_once "lib/$clase.php";
});

$db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$db->preparar("SELECT 
                title,
                date
               FROM posts
               ORDER BY date");
$db->ejecutar();
$db->prep()->bind_result($title, $date);
?>

<div id="logout">
    <form action="" method="POST">
        <button type="submit" name="logout">Cerrar Sesión</button>
    </form>
</div>

<div id="menu_admin">
    <a href="create.php">Crear Nuevo Post</a>
</div>

<div id="user_posts">
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conteo = 0;
            while ($db->resultado()) {
                $conteo++;
                echo "
                    <tr>
                        <td>$conteo</td>
                        <td>$title</td>
                        <td>$date</td>
                    </tr>
                ";
            }
            ?>
        </tbody>
    </table>

</div>

<?php require 'inc/footer.inc'; ?>