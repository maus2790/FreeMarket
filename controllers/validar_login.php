<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $password = $_POST["password"];

    // Conexión a la base de datos (reemplaza con tus propias credenciales de conexión)
    $mysqli = new mysqli("localhost", "root", "2813494D137E1631BBA301D5ACAB6E7BB7AA74CE1185D456565EF51D737677B4", "dotacion");

    if ($mysqli->connect_error) {
        die("Error de conexión a la base de datos: " . $mysqli->connect_error);
    }

    // Consulta para obtener la contraseña almacenada del usuario
    $sql = "SELECT IDUsuario, CorreoElectronico, Clave FROM usuarios WHERE CorreoElectronico = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($user_id, $db_correo, $hashed_password);
        $stmt->fetch();

        // Verificar la contraseña ingresada con la contraseña almacenada
        if (password_verify($password, $hashed_password)) {
            // La autenticación es exitosa
            echo "OK";
        } else {
            // La contraseña no coincide
            echo "Contraseña incorrecta";
        }
    } else {
        // Usuario no encontrado
        echo "Usuario no encontrado";
    }

    // Cerrar la conexión a la base de datos
    $stmt->close();
    $mysqli->close();
} else {
    // La solicitud no es de tipo POST, muestra un mensaje de error
    echo "Acceso no autorizado";
    /* header('location: login.php'); */
}
