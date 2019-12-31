<?php require 'inc/header.inc'; ?>

<div class="box">
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




    <form class="needs-validation" novalidate>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" value="" required>
            <div class="valid-feedback">
                Correcto
            </div>
            <div class="invalid-feedback">
                Campo obligatorio
            </div>
        </div>

        <div class="form-group">
            <label for="surname">Apellidos</label>
            <input type="text" class="form-control" id="surname" value="" required>
            <div class="valid-feedback">
                Correcto
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>


</div>

<?php require 'inc/aside.inc'; ?>

<div class="clearfix"></div>

<?php require 'inc/footer.inc'; ?>