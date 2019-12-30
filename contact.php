<?php require 'inc/header.inc'; ?>

    <div id="box">
        <!-- Cargar formulario -->
        <h2>Contacto</h2>
        <form action="" method="POST" id="form_contact">
            <label for="name">Nombre</label>
            <input type="text" name="name" data-validation="alphanumeric">

            <label for="surname">Apellidos</label>
            <input type="text" name="surname" data-validation="alphanumeric">

            <label for="email">Email</label>
            <input type="email" name="email" data-validation="email">

            <label for="sex">Sexo</label>
            <select name="sex" data-validation="required">
                <option value="man">Hombre</option>
                <option value="woman">Mujer</option>
            </select>

            <label for="date">Fecha de nacimiento</label>
            <input type="text" name="date" data-validation="date" data-validation-format="dd-mm-yyyy">

            <label for="years">Edad</label>
            <input type="number" name="years" data-validation="number">

            <input type="submit" value="Enviar">
        </form>
    </div>

    <?php require 'inc/aside.inc'; ?>

    <div class="clearfix"></div>

<?php require 'inc/footer.inc'; ?>