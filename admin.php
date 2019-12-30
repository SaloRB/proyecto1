<?php require 'inc/header.inc'; ?>

<?php

if ($_POST) {
    extract($_POST, EXTR_OVERWRITE);

    $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
}

?>

<?php require 'inc/footer.inc'; ?>