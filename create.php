<?php require 'inc/header.inc'; ?>

<?php
if (!$_SESSION['ok']) {
    header("Location: index.php");
}
?>

<!-- Create Post -->
<div id="create">
    <form action="" method="POST" role="form">
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" id="title">
        </div>

        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea name="content" class="form-control" id="content" rows="3"></textarea>
        </div>

        <button type="submit" name="create_post" class="btn btn-primary">Crear Post</button>
    </form>

    <?php
    require_once 'lib/config.php';
    require 'lib/errores.php';

    spl_autoload_register(function ($clase) {
        require_once "lib/$clase.php";
    });

    if ($_POST) {
        extract($_POST, EXTR_OVERWRITE);

        if (strlen($title) > 5) {

            if (strlen($content) > 15) {

                $user_id = $_SESSION['user_id'];
                $date = new DateTime();
                $date = $date->format('Y-m-d');

                $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                if ($db->preparar("INSERT INTO posts VALUES (NULL, $user_id, '$title', '$content', '$date')")) {
                    $db->ejecutar();
                    $ok = true;
                }
            } else {
                trigger_error("El contenido debe tener al menos 16 caracteres", E_USER_ERROR);
            }
        } else {
            trigger_error("El título debe contener al menos 6 caracteres");
        }
    }
    ?>
</div>

<?php
if ($ok) {
    header('Location: admin.php');
}
?>

<?php require 'inc/footer.inc'; ?>