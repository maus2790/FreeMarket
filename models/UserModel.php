<?php
class UserModel
{
    public static function getUserByUsername($correo)
    {
        global $db;

        $query = "SELECT * FROM usuarios WHERE CorreoElectronico = :correo";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function createUser($correo, $hashedPassword, $data)
    {
        global $db;

        // Extrae los datos adicionales del array
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $telefono = $data['telefono'];
        $departamento = $data['departamento'];
        $direccion = $data['direccion'];

        // Establecer la zona horaria de La Paz, Bolivia
        date_default_timezone_set('America/La_Paz');
        $FechaRegistro         = date("Y-m-d H:i:s"); // Obtiene la fecha y hora actual en formato "Año-Mes-Día Hora:Minutos:Segundos"
        $FechaUltimoInicioSesion = date("Y-m-d  H:i:s"); // Obtiene la fecha en formato "Año-Mes-Día"

        $query = "INSERT INTO usuarios (CorreoElectronico, Clave, Nombre, Apellido, Telefono, Departamento, Direccion, FechaRegistro, FechaUltimoInicioSesion) 
                  VALUES (:correo, :password, :nombre, :apellido, :telefono, :departamento, :direccion, :FechaRegistro, :FechaUltimoInicioSesion)";

        $stmt = $db->prepare($query);

        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':departamento', $departamento);
        $stmt->bindParam(':direccion', $direccion);
        $stmt->bindParam(':FechaRegistro', $FechaRegistro);
        $stmt->bindParam(':FechaUltimoInicioSesion', $FechaUltimoInicioSesion);

        return $stmt->execute();
    }

    public static function registroDeSesion($correo, $Activo)
    {
        global $db;
        // Establecer la zona horaria de La Paz, Bolivia
        date_default_timezone_set('America/La_Paz');
        $Fechahoy = date("Y-m-d H:i:s"); // Obtiene la fecha en formato "Año-Mes-Día"
        $query = "UPDATE usuarios SET  FechaUltimoInicioSesion = :FechaUltimoInicioSesion, Activo = :Activo WHERE CorreoElectronico = :correo";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':Activo', $Activo);
        $stmt->bindParam(':FechaUltimoInicioSesion', $Fechahoy);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        return  $stmt->execute();
    }

    public static function registroDeSesionConGoogle($correo, $Activo)
    {
        /* aaaaa */
    }
}
