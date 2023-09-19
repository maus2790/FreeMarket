<?php
//Include Configuration File
include('configGoogle2.php');

$login_button = '';

if (isset($_GET["code"])) {

  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
  if (!isset($token['error'])) {

    $google_client->setAccessToken($token['access_token']);

    $_SESSION['access_token'] = $token['access_token'];

    $google_service = new Google_Service_Oauth2($google_client);

    $data = $google_service->userinfo->get();

    if (!empty($data['given_name'])) {
      $_SESSION['nombre'] = $data['given_name'];
    } else {
      $_SESSION['nombre'] = "";
    }

    if (!empty($data['family_name'])) {
      $_SESSION['apellido'] = $data['family_name'];
    } else {
      $_SESSION['apellido'] = "";
    }

    if (!empty($data['email'])) {
      $_SESSION['correo'] = $data['email'];
    } else {
      $_SESSION['correo'] = "";
    }

    if (!empty($data['gender'])) {
      $_SESSION['genero'] = $data['gender'];
    } else {
      $_SESSION['genero'] = "";
    }

    if (!empty($data['picture'])) {
      $_SESSION['avatar'] = $data['picture'];
    } else {
      $_SESSION['avatar'] = "";
    }
  }
}
if (isset($_GET["CorreoLocal"])) {
  $_SESSION['correo'] = $_GET['CorreoLocal'];
  $_SESSION['nombre'] = "";
  $_SESSION['apellido'] = "";
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE | Página de Registro</title>

  <?php
  /*===================================================================
    HEADER
    ====================================================================*/
  include "../views/layout/head.php";

  ?>
  <style>
    /* Para pantallas más pequeñas (móviles) */
    .login-box {
      width: 93%;
      /* Ocupa el ancho completo */
    }

    /* Para pantallas más grandes (escritorio) */
    @media (min-width: 768px) {
      .login-box {
        width: 560px;
        /* Ancho específico para pantallas de escritorio */
      }
    }
  </style>
</head>

<body class="sidebar-collapse">

  <?php
  /*===================================================================
    HEADER
    ====================================================================*/
  include "layout/cabeceraRegistro.php";

  ?>


  <div class="login-box mx-auto mt-5">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../views/index.php" class="h2"><b>REGISTRO</b>-FreeMarket</a>
      </div>
      <div class="card-body">
        <div class="login-box-msg d-none" id="error-message" style="color: red;"></div>

        <p class="login-box-msg">Nuevo registro</p>

        <!-- <form action="../../index.php" method="POST"> -->

        <form id="login-form">

          <input type="hidden" name="register" value="1"> <!-- Para indicar que es un intento de inicio de sesión -->

          <div class="row">
            <div class="col-md-12">
              <div class="input-group mb-3">
                <input type="text" class="form-control form-control-sm" name="nombre" value="<?php echo (isset($_SESSION['nombre'])) ? $_SESSION['nombre'] : "" ?>" placeholder="Nombres*" required>
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="input-group mb-3">
                <input type="text" class="form-control form-control-sm" name="apellido" value="<?php echo (isset($_SESSION['apellido'])) ? $_SESSION['apellido'] : ""; ?>" placeholder="Apellidos">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="input-group mb-3">
                <input type="tel" class="form-control form-control-sm" name="telefono" placeholder="Número de Teléfono*" required>
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group mb-3">
                <select class="form-control form-control-sm" aria-label="select example" name="departamento" id="departamento">
                  <option value="Sin Especificar">Seleccione un departamento</option>
                  <option value="La Paz">La Paz</option>
                  <option value="Oruro">Oruro</option>
                  <option value="Potosi">Potosi</option>
                  <option value="Cochabamba">Cochabamba</option>
                  <option value="Sucre">Sucre</option>
                  <option value="Tarija">Tarija</option>
                  <option value="Pando">Pando</option>
                  <option value="Beni">Beni</option>
                  <option value="Santa Cruz">Santa Cruz</option>
                  <option value="Sin Especificar">Sin Especificar</option>
                </select>
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-flag"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="input-group mb-3">
                <input type="text" class="form-control form-control-sm" name="direccion" placeholder="direccion" required>
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user-circle" style="font-size: 21px;margin: -3px;"></i></span>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="input-group mb-3">
                <input type="email" class="form-control form-control-sm" name="correo" value="<?php echo (isset($_SESSION['correo'])) ? $_SESSION['correo'] : "" ?>" placeholder="Correo Electrónico*" readonly required>
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
              </div>
            </div>

          </div>
          <div class="row">

            <div class="col-md-6">
              <div class="input-group mb-3">
                <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Contraseña*" required>
                <div class="input-group-text" style="padding: 0px 10px;">
                  <a type="button" id="show-hide-password" class="fa fa-eye-slash text-primary" onclick="togglePasswordVisibility()"></a>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="input-group mb-3">
                <input type="password" class="form-control form-control-sm" name="confirmPassword" id="confirmPassword" placeholder="Confirmar Contraseña*" required>
                <div class="input-group-text" style="padding: 0px 10px;">
                  <a type="button" id="show-hide-confirmPassword" class="fa fa-eye-slash text-primary" onclick="toggleConfirmPasswordVisibility()"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <small>
                <div class="icheck-primary text-center">
                  <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>

                  <label for="agreeTerms" id="agreeTermsLabel" class="ms-2">
                    Acepto los <a href="terminosYCondicionesDeUso.php" class="text-center text-primary">términos y condiciones*</a>
                  </label>
                </div>
              </small>
            </div>
            <!-- /.col -->
            <div class="col-6">
              <button type="button" id="register-button" class="btn btn-primary btn-block btn-sm w-100">Registrar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!--         <div class="social-auth-links text-center">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Registrarse usando Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Registrarse usando Google+
          </a>
        </div> -->

        <hr>
        <a href="politicaDePrivacidad.php" class="text-center text-primary">Política de Privacidad</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->

  </div>
  <!-- jQuery -->
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/dist/js/adminlte.min.js"></script>
  <script src="../assets/js/verOcultarClave.js"></script>
  <script>
    $(document).ready(function() {
      $("#register-button").click(function() {
        // Obtener el valor del checkbox de términos y condiciones
        var agreeTerms = $("#agreeTerms").prop("checked");

        // Verificar si se aceptaron los términos y condiciones
        if (!agreeTerms) {
          // Mostrar un mensaje de error si los términos y condiciones no se aceptaron
          $("#error-message").text("Debes aceptar los términos y condiciones para registrarte.");
          // Resaltar la casilla de términos y condiciones
          $("#agreeTermsLabel").css("background", "yellow"); // Cambia el color del texto
          return; // Salir de la función sin realizar el registro
        }
        // Si se aceptaron los términos y condiciones, eliminar el resaltado si estaba presente
        $("#agreeTermsLabel").css("background", ""); // Restaura el color del texto



        // Obtener los valores del formulario de registro
        var nombre = $("input[name='nombre']").val();
        var apellido = $("input[name='apellido']").val();
        var telefono = $("input[name='telefono']").val();
        var departamento = $("select[name='departamento']").val();
        var correo = $("input[name='correo']").val();
        var direccion = $("input[name='direccion']").val();
        var password = $("input[name='password']").val();
        var confirmPassword = $("input[name='confirmPassword']").val();

        // Realizar una solicitud AJAX al servidor
        $.ajax({
          type: "POST",
          url: "../controllers/validar_registro.php", // Reemplaza esto con la URL de tu script de registro
          data: {
            nombre: nombre,
            apellido: apellido,
            telefono: telefono,
            departamento: departamento,
            correo: correo,
            direccion: direccion,
            password: password,
            confirmPassword: confirmPassword
          },
          success: function(response) {
            if ((response == "exito") || (response == "exitoclave") || (response == "exitocorreo") || (response == "exitoclavecorreo")) {
              // Crear un formulario oculto
              var form = $('<form action="../index.php" method="POST"></form>');

              // Agregar todos los campos del formulario de registro como entradas ocultas
              form.append('<input type="hidden" name="register" value="1">');
              form.append('<input type="hidden" name="nombre" value="' + nombre + '">');
              form.append('<input type="hidden" name="apellido" value="' + apellido + '">');
              form.append('<input type="hidden" name="telefono" value="' + telefono + '">');
              form.append('<input type="hidden" name="departamento" value="' + departamento + '">');
              form.append('<input type="hidden" name="correo" value="' + correo + '">');
              form.append('<input type="hidden" name="direccion" value="' + direccion + '">');
              form.append('<input type="hidden" name="password" value="' + password + '">');

              // Agregar el formulario al cuerpo del documento
              $('body').append(form);

              // Enviar el formulario automáticamente
              form.submit();
            } else {
              $("#error-message").removeClass("d-none");
              $("#error-message").text(response);
            }
          },



          error: function() {
            $("#error-message").removeClass("d-none");

            // Mostrar un mensaje de error en caso de fallo en la solicitud AJAX
            $("#error-message").text("Hubo un error al intentar registrarse.");
          }
        });
      });
    });
  </script>

</body>

</html>