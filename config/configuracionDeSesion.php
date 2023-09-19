<?php

$sessionOptions = array(
    'cookie_lifetime' => 7200,
    // 30 minutos en segundos
    'cookie_secure' => true,
    'cookie_httponly' => true,
    'gc_maxlifetime' => 7200 // 30 minutos en segundos
);

session_start($sessionOptions);

// Verifica si el usuario ha iniciado sesión con el sistema
if (isset($_SESSION['IDUsuario'])) {

    // Accede a los datos de sesión
    $IDUsuario = $_SESSION['IDUsuario'];
    $Nombre = $_SESSION['Nombre']; // Si has guardado el Nombre del usuario
    $Apellido = $_SESSION['Apellido'];
    $Telefono = $_SESSION['Telefono'];
    $Departamento = $_SESSION['Departamento'];
    $Direccion = $_SESSION['Direccion'];
    $FechaDeSesion = $_SESSION['FechaDeSesion'];
    $Activo = $_SESSION['Activo'];
    $Avatar = $_SESSION['Avatar'];
    $Clave = $_SESSION['Clave'];
    $Correo = $_SESSION['Correo'];
    $FechaDeRegistro = $_SESSION['FechaDeRegistro'];

    // Ahora puedes usar $NombreUsuario y $Nombre en tu página
} else {
    $IDUsuario = "";
    $Avatar = "0.png";
}

if (isset($_SESSION['CorreoGoogle'])) {
    $AvatarGoogle =  $_SESSION["AvatarGoogle"];
    $Nombre = $_SESSION['Nombre']; // Si has guardado el Nombre del usuario
    $Apellido = $_SESSION['Apellido'];
    $CorreoGoogle = $_SESSION['CorreoGoogle'];
}
