<?php
require_once 'vendor/autoload.php';

// Configura las credenciales
$client = new Google_Client();
$client->setClientId('276284574493-h3qt9fgvi7riqs4la04vnd5ag549l1q1.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/FreeMarket/views/home/index.php');
$client->addScope('https://www.googleapis.com/auth/userinfo.profile');
$client->addScope('https://www.googleapis.com/auth/userinfo.email');

// Inicializa la sesión
session_start();

// Maneja el flujo de autorización
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
    header('Location: http://localhost/FreeMarket/views/home/index.php'); // Redirige a la página deseada después de la autenticación
    exit;
}
