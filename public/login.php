<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iniciar sesión</title>

  <?php
  /*===================================================================
    HEADER
    ====================================================================*/
  include "../views/layout/head.php";

  ?>
</head>

<body class="sidebar-collapse">

  <?php
  /*===================================================================
    HEADER
    ====================================================================*/
  include "layout/cabeceraLogin.php";

  ?>

  <div class="login-box mx-auto mt-5 mb-5 pb-2">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary mb-5">
      <div class="card-header text-center">
        <a href="../views/index.php" class="h2"><b>LOGIN</b>-FreeMarket</a>
      </div>
      <div class="card-body">
        <div class="login-box-msg d-none" id="error-message" style="color: red;"></div>

        <p class="login-box-msg color-black">Inicia sesión para comenzar</p>

        <!-- <form method="POST" action="../../index.php"> -->
        <form id="login-form">

          <input type="hidden" name="login" value="1"> <!-- Para indicar que es un intento de inicio de sesión -->

          <div class="input-group mb-3">
            <input type="email" name="correo" class="form-control form-control-sm" placeholder="Correo electronico" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Contraseña" required>
            <div class="input-group-append">
              <div class="input-group-text" style="padding: 0px 10px;">
                <a type="button" id="show-hide-password" class="fa fa-eye-slash text-primary" onclick="togglePasswordVisibility()"></a>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="button" id="login-button" class="btn btn-primary btn-block btn-sm">Iniciar Sesión</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="text-center mt-2">
          <p>¿No tienes una cuenta?<a href="register_p1.php" class=" link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-primary"> <b> Registrarse</b></a></p>
        </div>

        <style>
          .bordered-span {
            border-top: 1px solid black;
            padding: 0 46px;
            /* Añade espaciado interno para separar el contenido del borde */
          }
        </style>

        <div class="d-flex align-items-center">
          <span class="bordered-span"></span>
          <span class=" m-3 text-center"> O accede Con </span>
          <span class="bordered-span"></span>
        </div>

        <div>
          <a href="../index.php?loginGoogle=1" class="btn-sm btn btn-block btn-danger"><i class="fab fa-google-plus mr-2"></i> Iniciar sesión con Google+</a>
        </div>
        <!-- /.social-auth-links -->

        <!--         <p class="mb-1">
          <a href="forgot-password.php">Olvidé mi contraseña</a>
        </p> -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
  <!-- jQuery -->
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../assets/plugins/bootstrap-5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> <!-- Estilo del tema -->
  <!-- AdminLTE App -->
  <script src="../assets/dist/js/adminlte.min.js"></script>
  <script src="../assets/js/verOcultarClave.js"></script>

  <script>
    $(document).ready(function() {
      $("#login-button").click(function() {
        // Obtener los valores del formulario
        var correo = $("input[name='correo']").val();
        var password = $("input[name='password']").val();

        // Realizar una solicitud AJAX al servidor
        $.ajax({
          type: "POST",
          url: "../controllers/validar_login.php", // Reemplaza esto con la URL de tu script de autenticación
          data: {
            correo: correo,
            password: password
          },
          success: function(response) {
            if (response === "OK") {
              // Redireccionar al usuario y enviar datos por POST si la autenticación es exitosa
              var form = $('<form action="../index.php" method="post">' +
                '<input type="hidden" name="login" value="1">' +
                '<input type="hidden" name="correo" value="' + correo + '">' +
                '<input type="hidden" name="password" value="' + password + '">' +
                '</form>');
              $('body').append(form);
              form.submit();
            } else if (response === "Usuario no encontrado") {
              // Mostrar un mensaje de error
              $("#error-message").removeClass("d-none");
              $("#error-message").text("Usuario no encontrado.");
            } else if (response === "Contraseña incorrecta") {
              // Mostrar un mensaje de error
              $("#error-message").removeClass("d-none");
              $("#error-message").text("Contraseña incorrecta.");
            }
          },

          error: function() {
            // Mostrar un mensaje de error en caso de fallo en la solicitud AJAX
            $("#error-message").removeClass("d-none");
            $("#error-message").text("Hubo un error al intentar iniciar sesión.");
          }
        });
      });
    });
  </script>



</body>

</html>