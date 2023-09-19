<?php
include '../config/db.php'; // Importa la conexión a la base de datos

include '../models/UserModel.php'; // Importa el modelo de usuario
include('../controllers/AuthController.php');
include('../public/configGoogle.php');
session_start();


/* ********************Datos Google********************************/
if (isset($_GET["code"])) {
    //Include Configuration File
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
    if (!isset($token['error'])) {

        $google_client->setAccessToken($token['access_token']);

        $_SESSION['access_token'] = $token['access_token'];

        $google_service = new Google_Service_Oauth2($google_client);

        $data = $google_service->userinfo->get();


        if (!empty($data['given_name'])) {
            $_SESSION['Nombre'] = $data['given_name'];
        }

        if (!empty($data['family_name'])) {
            $_SESSION['Apellido'] = $data['family_name'];
        }

        if (!empty($data['email'])) {
            $_SESSION['CorreoGoogle'] = $data['email'];
        }

        if (!empty($data['gender'])) {
            $_SESSION['user_gender'] = $data['gender'];
        }

        if (!empty($data['picture'])) {
            $_SESSION['AvatarGoogle'] = $data['picture'];
        }
    }
}
AuthController::loginConGoogle($_SESSION['CorreoGoogle']);




if (isset($_SESSION['CorreoGoogle'])) {
    $AvatarGoogle =  $_SESSION["AvatarGoogle"];
    $Nombre = $_SESSION['Nombre']; // Si has guardado el Nombre del usuario
    $Apellido = $_SESSION['Apellido'];
    $CorreoGoogle = $_SESSION['CorreoGoogle'];
    /* $genero = $_SESSION['user_gender']; */
}
/**************************************************** */
