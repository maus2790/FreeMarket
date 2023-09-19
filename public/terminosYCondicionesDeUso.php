<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Términos y Condiciones de Uso</title>

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

    <div class="mx-3 mt-5 mb-5 pb-2">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary mb-5">
            <div class="card-header text-center">
                <a href="../views/index.php" class="h2"><b>Términos y Condiciones de Uso</b></a>
            </div>
            <div class="card-body">
                <div class="login-box-msg d-none" id="error-message" style="color: red;"></div>

                <!-- Contenido de los Términos y Condiciones -->
                <h2>1. Aceptación de los Términos</h2>
                <p>Al utilizar <b>FreeMarket</b>, aceptas los siguientes Términos y Condiciones de Uso. Si no estás de acuerdo con estos términos, por favor no utilices nuestra plataforma.</p>

                <h2>2. Uso de la Plataforma</h2>
                <p>2.1. <b>FreeMarket</b> proporciona una plataforma en línea que permite a vendedores y compradores realizar transacciones. Los usuarios deben cumplir con todas las leyes y regulaciones aplicables al utilizar la plataforma.</p>
                <p>2.2. Los usuarios deben proporcionar información precisa y actualizada al registrarse en <b>FreeMarket</b>. No está permitido el uso de información falsa o engañosa.</p>

                <!-- Puedes agregar más secciones y detalles sobre los términos y condiciones aquí -->

                <h2>3. Privacidad</h2>
                <p>3.1. La información personal de los usuarios se recopila y procesa de acuerdo con nuestra Política de Privacidad. Al utilizar nuestra plataforma, aceptas nuestras prácticas de privacidad.</p>

                <h2>4. Cambios en los Términos</h2>
                <p>4.1. <b>FreeMarket</b> se reserva el derecho de actualizar o modificar estos Términos y Condiciones en cualquier momento. Los cambios entrarán en vigencia después de su publicación en la plataforma. Es responsabilidad del usuario revisar periódicamente los términos actualizados.</p>

                <!-- Puedes agregar información sobre cómo se notificarán los cambios a los usuarios -->

                <h2>5. Contacto</h2>
                <p>5.1. Si tienes preguntas o inquietudes sobre estos Términos y Condiciones, puedes contactarnos en [dirección de correo electrónico de contacto].</p>

                <!-- Agrega información de contacto -->

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p>&copy; 2023 FreeMarket. Todos los derechos reservados.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex">
                    <a href="terminosYCondicionesDeUso.php" class="mx-3">Términos y Condiciones</a>
                    <a href="politicaDePrivacidad.php">Política de Privacidad</a>

                </div>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Tu código JavaScript existente aquí
        });
    </script>

</body>

</html>