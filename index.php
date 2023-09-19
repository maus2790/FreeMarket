<?php
require_once 'config/db.php'; // Importa la conexión a la base de datos
require_once 'models/UserModel.php'; // Importa el modelo de usuario
require_once 'controllers/AuthController.php'; // Importa el controlador de autenticación
/* asdasd */
$sessionOptions = array(
    'cookie_lifetime' => 1800,
    // 30 minutos en segundos
    'cookie_secure' => true,
    'cookie_httponly' => true,
    'gc_maxlifetime' => 1800 // 30 minutos en segundos
);

session_start($sessionOptions);

// Verifica si el usuario está intentando iniciar sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    if (isset($_POST['login'])) {
        if (AuthController::login($correo, $password)) {
            // Inicio de sesión exitoso, redirige a una página de bienvenida o panel de control
            header('Location: views/');
        }
    } elseif (isset($_POST['register'])) {
        $data = array( // guardamos los datos del registro en un array asociativo
            'nombre' => isset($_POST['nombre']) ? $_POST['nombre'] : '',
            'apellido' => isset($_POST['apellido']) ? $_POST['apellido'] : '',
            'telefono' => isset($_POST['telefono']) ? $_POST['telefono'] : '',
            'departamento' => isset($_POST['departamento']) ? $_POST['departamento'] : '',
            'direccion' => isset($_POST['direccion']) ? $_POST['direccion'] : ''
        );

        // Intenta registrar al usuario
        if (AuthController::register($correo, $password, $data)) {
            // Si el registro fue exitoso, intenta iniciar sesión
            if (AuthController::login($correo, $password)) {
                // Si el inicio de sesión también es exitoso, redirige al usuario a la página de bienvenida
                header('Location: views/');
                exit(); // Asegúrate de salir después de redirigir
            } else {
                // El inicio de sesión falló, puedes manejar este caso aquí
                echo "Inicio de sesión fallido.";
            }
        } else {
            // El registro falló, puedes manejar este caso aquí
            echo "Registro fallido.";
        }
    } else {
        // Mostrar un mensaje de error en la vista de inicio de sesión
        $loginError = "Nombre de usuario o contraseña incorrectos.";
    }
}


// INICIA SESION CON GOOGLE
if (isset($_GET['loginGoogle'])) {

    include('public/configGoogle.php');
    // Obtiene la URL de autenticación de Google
    $authUrl = $google_client->createAuthUrl();
    // Redirige al usuario a la URL de autenticación de Google
    header("Location: $authUrl");
}


// Verifica si el usuario está intentando cerrar sesión
if (isset($_GET['logout'])) {
    $Correo = $_GET['logout'];
    AuthController::logout($Correo);
}



// Resto de la lógica de enrutamiento y controladores aquí

// Aquí puedes incluir más lógica para manejar diferentes rutas y controladores

// Por ejemplo:
// if ($_SERVER['REQUEST_URI'] === '/perfil') {
//     require_once 'controllers/ProfileController.php';
//     ProfileController::showProfile();
// }

// En última instancia, puedes incluir una vista de inicio de sesión si el usuario no está autenticado
/* if (!isset($_SESSION['Correo'])) {
    header("location: views/pages/login.php  ");
} else {
    // Si el usuario está autenticado, puedes incluir la vista del panel de control u otra página protegida
    header("location:  views/principal.php ");
} */

// Redirige a la página de inicio cuando se accede a la raíz del sitio (http://localhost/FreeMarket/)
if ($_SERVER['REQUEST_URI'] === '/FreeMarket/') {
    header('Location: /FreeMarket/views/index.php');
    exit;
}
