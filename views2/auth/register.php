<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>
    <!-- Agrega enlaces a tus archivos Bootstrap y jQuery -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Registro</h1>
                <form id="local-register-form">
                    <div class="form-group">
                        <label for="local-username">Nombre de usuario</label>
                        <input type="text" class="form-control" id="local-username" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group">
                        <label for="local-email">Correo electrónico</label>
                        <input type="email" class="form-control" id="local-email" placeholder="Correo electrónico">
                    </div>
                    <div class="form-group">
                        <label for="local-password">Contraseña</label>
                        <input type="password" class="form-control" id="local-password" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse localmente</button>
                </form>
                <p id="local-registration-result" class="mt-3"></p>
            </div>
            <div class="col-md-6">
                <h1>Registro con Google</h1>
                <button id="google-register-button" class="btn btn-danger">Registrarse con Google</button>
                <p id="google-registration-result" class="mt-3"></p>
            </div>
        </div>
    </div>

    <script src="assets/js/ajax/user_ajax.js"></script>
</body>

</html>