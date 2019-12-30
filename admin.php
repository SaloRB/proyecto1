<?php require 'inc/header.inc'; ?>

<?php

if (!$_SESSION['ok']) {
    header("Location: index.php");
}

if (isset($_POST['logout'])) {
    $_SESSION['ok'] = false;
    header("Location: index.php");
}
?>

<div id="logout">
    <form action="" method="POST">
        <button type="submit" name="logout">Cerrar Sesión</button>
    </form>
</div>

<?php require 'inc/footer.inc'; ?>