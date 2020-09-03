/* javascript
  -------------------------------------------------- */

eventListeners();


function eventListeners() {

    // Dcument ready se ejecuta la cargar el documento 
    document.addEventListener('DOMContentLoaded', function() {

    });

}


/* JQuery
  -------------------------------------------------- */

$(function() {


    /* Ejecuta modal al registrar un nuevo suscriptor
       ----------------------------------------*/
    $(document).ready(function() {
        $('#modelMailRealyConfrimacion').modal('toggle');
    });


    /* Fijar Footer en la Parte inferior cuando el área de los contenidos 
    no se la suficiente
        ----------------------------------------*/
    try {

        $(document).ready(ajustarPie);
        $(window).on("resize", ajustarPie);

        function ajustarPie() {
            var winH = $(window).height();
            var docH = $("body").height();
            var pieH = $("footer").height();

            if (docH + pieH < winH) {
                $("footer").attr("class", "bottom");
            } else {
                $("footer").attr("class", "");
            }
        }


    } catch (error) {

    }

    /* Quitar Cache
        ----------------------------------------*/
    function clearjQueryCache() {
        // console.log('inica for');
        for (var x in jQuery.cache) {
            delete jQuery.cache[x];
            // console.log('delete cache');

        }
    }
    clearjQueryCache();
    // console.log('Paso funcion');

    /* Agregar clase a Menu 
      ----------------------------------------*/
    try {
        // $('body').removeClass();
        $('body.index .navbar-nav a:contains("Inicio")').addClass('activo');
        $('body.conocenos .navbar-nav a:contains("Conócenos")').addClass('activo');
        $('body.contacto .navbar-nav a:contains("Contacto")').addClass('activo');
        $('body.login .navbar-nav a:contains("Iniciar Sesión")').addClass('activo-secondary');
        $('body.noticias .navbar-nav a:contains("Noticias")').addClass('activo');
    } catch ($error) {
        // $error_ini = 'agregar clase a menu ';
        // alert($error_ini.concat(error.message));
    }

    /* Cambiando Fondo de Barra de Navegación
     ----------------------------------------*/
    $(window).scroll(function() {

        if ($('#menu-navegacion').offset().top > 11) {
            $('#menu-navegacion').addClass('bg-menu-nav');
        } else {
            $('#menu-navegacion').removeClass('bg-menu-nav');
        }

    })


    /* Tool-Tips Boostrap
            ----------------------------------------*/
    $('[data-toggle="tooltip"]').tooltip()



    /* Validación de Formulario de Subscripcion
        ----------------------------------------*/

    $("#idEnviarSuscripcion").on("click", function(event) {

        event.preventDefault();
        // resto de tu codigo
        if (validarRegistroSuscripcion()) {
            InsertarSuscriptor();
        }
    });

    function validarRegistroSuscripcion() {

        var nombre = $('#subscriber_name').val(),
            email = $('#subscriber_email').val();

        var subscriber_name = $('#subscriber_name');
        var subscriber_email = $('#subscriber_email');

        var idMensajeValNombre = $("#idMensajeValNombre");
        var idMensajeValEmail = $("#idMensajeValEmail");

        if (nombre == '') {
            mostrarNotificacion(idMensajeValNombre, subscriber_name,
                nombre, email, subscriber_name, subscriber_email);

        }

        if (email == '') {
            mostrarNotificacion(idMensajeValEmail, subscriber_email,
                nombre, email, subscriber_name, subscriber_email);

        }

        if (nombre == '' || email == '') {
            return false;
        }

        return true;

    }

    function mostrarNotificacion(elementoNotifica, elementoValidado,
        nombre, email, subscriber_name, subscriber_email) {

        //Mostrar alertas de campos vacíos
        elementoNotifica.toggle('slow');

        //Establecer color alerta de elemnto validado
        if ($('.borderReset')) {
            elementoValidado.removeClass('borderReset');
        }
        setTimeout(() => {
            elementoValidado.addClass('borderError');
            if (nombre == '') {
                subscriber_name.focus();
            } else {
                if (email == '') {
                    subscriber_email.focus();
                }
            }
        }, 800);

        //Ocultar alertas de campos vacíos
        setTimeout(() => {

            elementoNotifica.toggle('slow');
            elementoValidado.addClass('borderReset');
        }, 5000);

    }

    function InsertarSuscriptor() {

        // AJAX

        // 1 Crear llamado a ajax 
        var xhr = new XMLHttpRequest();

        // enviar datso por FormData 

        var nombreSuscriptor = $('#subscriber_name').val(),
            emailSuscriptor = $('#subscriber_email').val();


        var datos = new FormData();
        datos.append('nombreSuscriptor', nombreSuscriptor);
        datos.append('emailSuscriptor', emailSuscriptor);
        datos.append('accion', 'insert');
        datos.append('id_registro', '0')

        // 2 abrir la conexión 
        xhr.open('POST', 'includes/modelos/modelo-suscriptores.php', true);

        // 3 En la carga 
        xhr.onload = function() {

            if (this.status === 200) {

                console.log(xhr.responseText);
                var respuesta = JSON.parse(xhr.responseText);
                // if (respuesta.respuesta == 'ok') {
                //     var respuesta = respuesta.respuesta,
                //         id_insertado = respuesta.id_insertado,
                //         accion = respuesta.accion;
                //     window.location.href = 'http://localhost:8888/histoclin/noticias.php?mailrelay=true';
                // } else {
                //     Swal.fire({
                //         icon: 'error',
                //         title: 'Error...',
                //         text: 'Hubo un error!'
                //     });
                // }

            }

        }

        // 4 Enviar el request 
        xhr.send(datos);

    }



});