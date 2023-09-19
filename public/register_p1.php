<?php
include('configGoogle2.php');

?>
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
  include "layout/cabeceraRegistro.php";

  ?>

  <div class="login-box mx-auto mt-5">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary mb-5">
      <div class="card-header text-center">
        <a href="../views/index.php" class="h2"><b>REGISTRO</b>-FreeMarket</a>
      </div>
      <div class="card-body">
        <div class="login-box-msg d-none" id="error-message" style="color: red;"></div>

        <p class="login-box-msg color-black">Registrese para comenzar</p>

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
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="button" id="login-button" class="btn btn-primary btn-block btn-sm">Registrarse</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="text-center mt-2">
          <p>¿Ya tienes una cuenta?<a href="login.php" class=" link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-primary"> <b> Inicie Sesión</b></a></p>
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
          <span class=" m-3 text-center"> Registrarse Con </span>
          <span class="bordered-span"></span>
        </div>

        <div>
          <a href="<?php echo $google_client->createAuthUrl(); ?>" class="btn-sm btn btn-block btn-danger"><i class="fab fa-google-plus mr-2"></i> Registrarse con Google+</a>
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

        // Realizar una solicitud AJAX al servidor
        $.ajax({
          type: "POST",
          url: "../controllers/validar_registro_p1.php", // Reemplaza esto con la URL de tu script de autenticación
          data: {
            correo: correo
          },
          success: function(response) {
            if (response == "OK") {
              var urlDestino = "register_p2.php?CorreoLocal=" + correo;

              // Redireccionar al usuario a la página de destino con los parámetros
              window.location.href = urlDestino;
            } else {


              $("#error-message").removeClass("d-none");

              $("#error-message").text(response);
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