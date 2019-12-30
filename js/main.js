$(document).ready(function () {

    // Selector de tema
    var theme = $('#theme')

    if (!localStorage.getItem('theme')) {
        localStorage.setItem('theme', "css/green.css");
    }

    theme.attr("href", localStorage.getItem('theme'));

    $('#to-green').click(function (e) {
        e.preventDefault();
        theme.attr("href", "css/green.css");
        localStorage.setItem('theme', theme.attr("href"));
    });

    $('#to-red').click(function (e) {
        e.preventDefault();
        theme.attr("href", "css/red.css");
        localStorage.setItem('theme', theme.attr("href"));
    });

    $('#to-blue').click(function (e) {
        e.preventDefault();
        theme.attr("href", "css/blue.css");
        localStorage.setItem('theme', theme.attr("href"));
    });

    // Scroll subir al principio
    $('.subir').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);

        return false;
    });

    // Acordeon
    if (window.location.href.indexOf('about') > -1) {
        $("#acordeon").accordion();
    }

    // Reloj
    if (window.location.href.indexOf('reloj') > -1) {
        setInterval(function clock() {
            var reloj = moment().format("H:mm:ss");
            $('#reloj').html(reloj);
            return clock;
        }(), 1000);
    }

    // Validacion
    if (window.location.href.indexOf('contact') > -1) {
        $("form input[name='date']").datepicker({
            dateFormat: 'dd-mm-yy'
        });

        $.validate({
            lang: 'es',
            errorMessagePosition: 'top',
            scrollToTopOnError: true,
        });
    }
});