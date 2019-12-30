<?php require 'inc/header.inc'; ?>

<!-- Login -->
<div id="login">
    <h3>Identifícate</h3>
    <form action="" method="POST" role="form">
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Contraseña"><br>
        <button type="submit">Entrar</button>
        <a href="register.php">Registrarse</a>
    </form>
    <br>

    <?php
    require_once 'lib/config.php';
    require 'lib/errores.php';

    spl_autoload_register(function ($clase) {
        require_once "lib/$clase.php";
    });

    if ($_POST) {
        extract($_POST, EXTR_OVERWRITE);

        if ($email && $password) {
            $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if (preg_match(EMAIL_REGEX, $email)) {
                $db->preparar("SELECT email, password FROM usuarios WHERE email = '$email'");
                $db->ejecutar();
                $db->prep()->bind_result($dbemail, $dbpassword);
                $db->resultado();

                if ($password == $dbpassword && $email == $dbemail) {
                    $_SESSION['ok'] = true;
                } else {
                    trigger_error("Usuario o password incorrectos", E_USER_ERROR);
                }
            } else {
                trigger_error("Email inválido", E_USER_ERROR);
            }
        } else {
            trigger_error("No ha Ingresado datos", E_USER_ERROR);
        }
    }
    ?>
</div>

<?php
if ($_SESSION['ok']) {
    header('Location: admin.php');
}
?>

<?php require 'inc/footer.inc'; ?>