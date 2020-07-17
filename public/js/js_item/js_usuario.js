
$(document).ready(function () {


    registrar_usuario();
    autenticacion_usuario();
   

});


var registrar_usuario = function () {
    $("#formularioUsuario").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: "?controlador=Item&accion=registrar_usuario",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {

                $("#alertControl").html('<div class="alert alert-success" id="alert"> Procesando... </div>');
                window.setTimeout(function () {
                    $(".alert").fadeTo(500, 0).slideUp(500, function () {
                        $(this).remove();
                    });
                }, 3000);
            },
            success: function (response) {
                console.log(response);
                alert("Has sido registrado en el sistema");
                $("#alertControl").html('<div class="alert alert-success" id="alert">' + "Registrado con exito" + '</div>');

                window.setTimeout(function () {
                    $(".alert").fadeTo(5000000, 0).slideUp(50000000, function () {
                        $(this).remove();
                    });

                }, 3000000000);

            }
        });
    });
};


//Validar Autenticacion Usuario
var autenticacion_usuario = function () {
    $("#autenticacion_usuario").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: "?controlador=Item&accion=autenticacion_usuario",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {

                $("#alertControl").html('<div class="alert alert-success" id="alert"> Procesando... </div>');
                window.setTimeout(function () {
                    $(".alert").fadeTo(500, 0).slideUp(500, function () {
                        $(this).remove();
                    });
                }, 3000);
            },
            success: function (response) {
                console.log(response);
                alert("Has sido registrado en el sistema");
                $("#alertControl").html('<div class="alert alert-success" id="alert">' + "Registrado con exito" + '</div>');

                window.setTimeout(function () {
                    $(".alert").fadeTo(5000000, 0).slideUp(50000000, function () {
                        $(this).remove();
                    });

                }, 3000000000);

            }
        });
    });
};