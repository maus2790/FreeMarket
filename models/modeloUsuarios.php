<?php
include_once '../config/db.php';

$IDUsuario = (isset($_POST['IDUsuario'])) ? $_POST['IDUsuario'] : '';

$Nombre = (isset($_POST['Nombre'])) ? $_POST['Nombre'] : '';
$Apellido = (isset($_POST['Apellido'])) ? $_POST['Apellido'] : '';
$CorreoElectronico = (isset($_POST['CorreoElectronico'])) ? $_POST['CorreoElectronico'] : '';
$Telefono = (isset($_POST['Telefono'])) ? $_POST['Telefono'] : '';
$Departamento = (isset($_POST['Departamento'])) ? $_POST['Departamento'] : '';
$Avatar = (isset($_POST['Avatar'])) ? $_POST['Avatar'] : '0.png';
$Direccion = (isset($_POST['Direccion'])) ? $_POST['Direccion'] : '';
$FechaRegistro = (isset($_POST['FechaRegistro'])) ? $_POST['FechaRegistro'] : '';
$FechaUltimoInicioSesion = (isset($_POST['FechaUltimoInicioSesion'])) ? $_POST['FechaUltimoInicioSesion'] : '';
$Activo = 1;
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$claveCorreo = (isset($_POST['claveCorreo'])) ? $_POST['claveCorreo'] : ''; //nos indica si el usuario modificara el usuario y contraseña

$Clave = (isset($_POST['Clave'])) ? $_POST['Clave'] : '';
$hashedClave = password_hash($Clave, PASSWORD_DEFAULT);

$dato = "";
// Establecer la zona horaria de La Paz, Bolivia
date_default_timezone_set('America/La_Paz');
$FechaRegistro         = date("Y-m-d H:i:s"); // Obtiene la fecha y hora actual en formato "Año-Mes-Día Hora:Minutos:Segundos"
$FechaUltimoInicioSesion = date("Y-m-d  H:i:s"); // Obtiene la fecha en formato "Año-Mes-Día"

switch ($opcion) {
    case 1:

        $query = "INSERT INTO usuarios (CorreoElectronico, Clave, Nombre, Apellido, Telefono, Departamento, Direccion, FechaRegistro, FechaUltimoInicioSesion, Activo) 
                  VALUES (:correo, :password, :nombre, :apellido, :telefono, :departamento, :direccion, :FechaRegistro, :FechaUltimoInicioSesion, :Activo)";

        $stmt = $db->prepare($query);

        $stmt->bindParam(':correo', $CorreoElectronico);
        $stmt->bindParam(':password', $hashedClave);
        $stmt->bindParam(':nombre', $Nombre);
        $stmt->bindParam(':apellido', $Apellido);
        $stmt->bindParam(':telefono', $Telefono);
        $stmt->bindParam(':departamento', $Departamento);
        $stmt->bindParam(':direccion', $Direccion);
        $stmt->bindParam(':FechaRegistro', $FechaRegistro);
        $stmt->bindParam(':FechaUltimoInicioSesion', $FechaUltimoInicioSesion);
        $stmt->bindParam(':Activo', $Activo);
        $stmt->execute();

        $query = "SELECT * FROM usuarios ORDER BY IDUsuario DESC LIMIT 1";
        $stmt = $db->prepare($query);
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print json_encode($data, JSON_UNESCAPED_UNICODE); //envío el array final en formato JSON a AJAX

        break;
    case 2:

        switch ($claveCorreo) {
            case 'exitocorreo':
                $consulta = "UPDATE usuarios SET CorreoElectronico = :correo, Nombre = :nombre, Apellido = :apellido, Telefono = :telefono, Departamento = :departamento, Avatar = :avatar, Direccion = :direccion, FechaRegistro = :fechaRegistro, FechaUltimoInicioSesion = :fechaUltimoInicioSesion, Activo = :activo WHERE IDUsuario = :idUsuario";
                break;
            case 'exitoclave':
                $consulta = "UPDATE usuarios SET Clave = :clave, Nombre = :nombre, Apellido = :apellido, Telefono = :telefono, Departamento = :departamento, Avatar = :avatar, Direccion = :direccion, FechaRegistro = :fechaRegistro, FechaUltimoInicioSesion = :fechaUltimoInicioSesion, Activo = :activo WHERE IDUsuario = :idUsuario";
                break;
            case 'exitoclavecorreo':
                $consulta = "UPDATE usuarios SET CorreoElectronico = :correo, Clave = :clave, Nombre = :nombre, Apellido = :apellido, Telefono = :telefono, Departamento = :departamento, Avatar = :avatar, Direccion = :direccion, FechaRegistro = :fechaRegistro, FechaUltimoInicioSesion = :fechaUltimoInicioSesion, Activo = :activo WHERE IDUsuario = :idUsuario";
                break;
            default:
                $consulta = "UPDATE usuarios SET Nombre = :nombre, Apellido = :apellido, Telefono = :telefono, Departamento = :departamento, Avatar = :avatar, Direccion = :direccion, FechaRegistro = :fechaRegistro, FechaUltimoInicioSesion = :fechaUltimoInicioSesion, Activo = :activo WHERE IDUsuario = :idUsuario";
                break;
        }

        $resultado = $db->prepare($consulta);

        $resultado->bindParam(':nombre', $Nombre);
        $resultado->bindParam(':apellido', $Apellido);
        $resultado->bindParam(':telefono', $Telefono);
        $resultado->bindParam(':departamento', $Departamento);
        $resultado->bindParam(':avatar', $Avatar);
        $resultado->bindParam(':direccion', $Direccion);
        $resultado->bindParam(':fechaRegistro', $FechaRegistro);
        $resultado->bindParam(':fechaUltimoInicioSesion', $FechaUltimoInicioSesion);
        $resultado->bindParam(':activo', $Activo);
        $resultado->bindParam(':idUsuario', $IDUsuario);

        if ($claveCorreo == 'exitocorreo' || $claveCorreo == 'exitoclavecorreo') {
            $resultado->bindParam(':correo', $CorreoElectronico);
        }

        if ($claveCorreo == 'exitoclave' || $claveCorreo == 'exitoclavecorreo') {
            $resultado->bindParam(':clave', $hashedClave);
        }

        $resultado->execute();

        $consulta = "SELECT * FROM usuarios WHERE IDUsuario = :idUsuario";
        $resultado = $db->prepare($consulta);
        $resultado->bindParam(':idUsuario', $IDUsuario);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        print json_encode($data, JSON_UNESCAPED_UNICODE);


        break;
    case 3:
        try {
            $consulta = "DELETE FROM usuarios WHERE IDUsuario='$IDUsuario'";
            $resultado = $db->prepare($consulta);
            $data = $resultado->execute();
            $data = true;
        } catch (\Throwable $th) {
            $data = false;
        }

        echo $data;
        break;
}

$db = null;
