// Manejo del formulario de registro local y registro con Google utilizando AJAX y Bootstrap
$(document).ready(function () {
    var localRegisterForm = $('#local-register-form');
    var googleRegisterButton = $('#google-register-button');

    localRegisterForm.on('submit', function (e) {
        e.preventDefault();

        // Obtener los datos del formulario de registro local
        var username = $('#local-username').val();
        var email = $('#local-email').val();
        var password = $('#local-password').val();

        // Realizar una solicitud AJAX al controlador de registro local
        $.ajax({
            url: '/controllers/AuthController.php?action=registerLocal',
            method: 'POST',
            dataType: 'json',
            data: JSON.stringify({ username: username, email: email, password: password }),
            contentType: 'application/json',
            success: function (response) {
                if (response.success) {
                    $('#local-registration-result').removeClass('text-danger').addClass('text-success').text(response.message);
                    setTimeout(function () {
                        window.location.href = '/views/dashboard/index.php'; // Redirigir al dashboard u otra página
                    }, 2000);
                } else {
                    $('#local-registration-result').removeClass('text-success').addClass('text-danger').text(response.message);
                }
            },
            error: function () {
                $('#local-registration-result').removeClass('text-success').addClass('text-danger').text('Error en el registro local');
            }
        });
    });

    googleRegisterButton.on('click', function () {
        // Realizar una solicitud AJAX al controlador de registro con Google
        $.ajax({
            url: '/controllers/AuthController.php?action=registerGoogle',
            method: 'POST',
            dataType: 'json',
            contentType: 'application/json',
            success: function (response) {
                if (response.success) {
                    $('#google-registration-result').removeClass('text-danger').addClass('text-success').text(response.message);
                    setTimeout(function () {
                        window.location.href = '/views/dashboard/index.php'; // Redirigir al dashboard u otra página
                    }, 2000);
                } else {
                    $('#google-registration-result').removeClass('text-success').addClass('text-danger').text(response.message);
                }
            },
            error: function () {
                $('#google-registration-result').removeClass('text-success').addClass('text-danger').text('Error en el registro con Google');
            }
        });
    });
});
