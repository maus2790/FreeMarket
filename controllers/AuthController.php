<?php
class AuthController
{
    /*===================================================================
            REGISTRO
            ====================================================================*/
    public static function register($correo, $password, $data)
    {
        // En un escenario real, aquí deberías realizar la validación de los datos y hash de contraseña
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (UserModel::createUser($correo, $hashedPassword, $data)) {
            return true;
        } else {
            return false;
        }
    }


    /*===================================================================
            LOGIN LOCAL
            ====================================================================*/
    public static function login($correo, $password)
    {
        // Verifica que se hayan proporcionado tanto el nombre de usuario como la contraseña
        if (empty($correo) || empty($password)) {
            // Mostrar mensaje de error en la vista
            return false;
        }

        // Obtén el usuario de la base de datos por su nombre de usuario
        $user = UserModel::getUserByUsername($correo);

        // Si no se encuentra el usuario, muestra un mensaje de error
        if (!$user) {
            // Mostrar mensaje de error en la vista
            return false;
        }

        $user = UserModel::getUserByUsername($correo);
        if ($user && password_verify($password, $user['Clave'])) {
            $activo = 1;
            UserModel::registroDeSesion($correo, $activo);
            // Inicio de sesión exitoso

            $_SESSION['IDUsuario'] = $user['IDUsuario'];
            $_SESSION['Nombre'] = $user['Nombre'];
            $_SESSION['Apellido'] = $user['Apellido'];
            $_SESSION['Telefono'] = $user['Telefono'];
            $_SESSION['Departamento'] = $user['Departamento'];
            $_SESSION['Direccion'] = $user['Direccion'];
            $_SESSION['FechaDeSesion'] = $user['FechaUltimoInicioSesion'];
            $_SESSION['Activo'] = $user['Activo'];
            $_SESSION['Avatar'] = $user['Avatar'];
            $_SESSION['Clave'] = $user['Clave'];
            $_SESSION['Correo'] = $user['CorreoElectronico'];
            $_SESSION['FechaDeRegistro'] = $user['FechaRegistro']; // Ejemplo de cargar el nombre del usuario

            return true;
        } else {
            // Mostrar mensaje de error en la vista FechaRegistro
            return false;
        }
    }

    /*===================================================================
            LOGIN Con Google
            ====================================================================*/
    public static function loginConGoogle($correo)
    {
        require_once '../models/UserModel.php';
        $user = UserModel::getUserByUsername($correo);
        $activo = 1;
        UserModel::registroDeSesion($correo, $activo);
        // Inicio de sesión exitoso

        $_SESSION['IDUsuario'] = $user['IDUsuario'];
        $_SESSION['Nombre'] = $user['Nombre'];
        $_SESSION['Apellido'] = $user['Apellido'];
        $_SESSION['Telefono'] = $user['Telefono'];
        $_SESSION['Departamento'] = $user['Departamento'];
        $_SESSION['Direccion'] = $user['Direccion'];
        $_SESSION['FechaDeSesion'] = $user['FechaUltimoInicioSesion'];
        $_SESSION['Activo'] = $user['Activo'];
        $_SESSION['Avatar'] = $user['Avatar'];
        $_SESSION['Clave'] = $user['Clave'];
        $_SESSION['Correo'] = $user['CorreoElectronico'];
        $_SESSION['FechaDeRegistro'] = $user['FechaRegistro']; // Ejemplo de cargar el nombre del usuari
        header('Location: ../views/index.php');
        exit();
    }
    /*===================================================================
            CERRAR SESIÓN
            ====================================================================*/
    public static function logout($correo)
    {
        $activo = 0;
        UserModel::registroDeSesion($correo, $activo);
        session_start();
        session_destroy();
        header('Location: ../views/index.php');
        exit();
    }
}
