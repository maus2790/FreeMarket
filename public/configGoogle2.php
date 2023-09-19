<?php
// Iniciar sesión en la página web
/* session_start(); */

// config.php

// Incluir el archivo de autenticación de la Biblioteca de Google Client para PHP
require_once 'vendor/autoload.php';

// Crear un objeto del Cliente de API de Google para llamar a la API de Google
$google_client = new Google_Client();

// Establecer el ID de Cliente de OAuth 2.0 | Copiar "ID DE CLIENTE"
$google_client->setClientId('276284574493-h3qt9fgvi7riqs4la04vnd5ag549l1q1.apps.googleusercontent.com');

// Establecer la clave secreta de Cliente de OAuth 2.0
$google_client->setClientSecret('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');

// Establecer la URL de Redirección de OAuth 2.0 | URL AUTORIZADO
$google_client->setRedirectUri('https://tecnologia.umsa.bo/FreeMarket/public/register_p2.php');

// Para obtener el correo electrónico y el perfil
$google_client->addScope('email');

$google_client->addScope('profile');
