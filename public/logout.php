<?php
require_once '../config/db.php';
require_once '../models/UserModel.php'; // Importa el modelo de usuario
require_once '../controllers/AuthController.php'; // Importa el controlador de autenticación



// Verifica si el usuario está intentando cerrar sesión
if (isset($_GET['logout'])) {
    //logout.php
    include('configGoogle.php');
    //Reset OAuth access token
    $google_client->revokeToken();
    $Correo = $_GET['logout'];
    AuthController::logout($Correo);
}





//Destroy entire session data.
/* session_destroy(); */

//redirect page to index.php
/* header('location:../principal.php'); */
