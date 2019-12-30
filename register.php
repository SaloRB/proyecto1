<?php require 'inc/header.inc'; ?>

    <!-- Register -->
    <div id="register">

    <?php
        require_once 'lib/config.php';
        include 'lib/errores.php';

        spl_autoload_register(function ($clase)
        {
            require_once "lib/$clase.php";
        });

        if ($_POST) {
            extract($_POST, EXTR_OVERWRITE);

            $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if ($first_name && $last_name && $email && $password && $password_confirm) {
                
                $regexp = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

                if (preg_match($regexp, $email)) {
                    if (strlen($password) > 5) {
                        
                        if ($password == $password_confirm) {
                            $validarEmail = $db->validarDatos('email', 'usuarios', $email);

                            if ($validarEmail == 0) {
                                
                                if ($db->preparar("INSERT INTO usuarios VALUES (NULL, '$email', '$password', '$first_name', '$last_name')")) {
                                    $db->ejecutar();

                                    $ok = true;
                                }
                            } else {
                                trigger_error("Ya existe un usuario con ese email", E_USER_ERROR);
                            }
                        } else {
                            trigger_error("Las contraseñas no coinciden", E_USER_ERROR);
                        }
                    } else {
                        trigger_error("La contraseña debe contener 6 o más caracteres", E_USER_ERROR);
                    }
                } else {
                    trigger_error("Email inválido", E_USER_ERROR);
                }
            }
        }
    ?>

    <?php if ($ok) : ?>

        <h2>Hola <?php echo $first_name ?></h2>
        <p>Te has registrado correctamente, da click en el enlace para ingresar.</p>
        
    <?php else : ?>

        <h3>Regístrate</h3>

        <form action="" method="POST" role="form">
            <input type="text" name="first_name" placeholder="Nombre"><br>
            <input type="text" name="last_name" placeholder="Apellidos"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="password" name="password" placeholder="Contraseña"><br>
            <input type="password" name="password_confirm" placeholder="Confirmar Contraseña"><br>
            <button type="submit">Registrase</button>
        </form>

        <?php endif; ?>
    </div>

<?php require 'inc/footer.inc'; ?>