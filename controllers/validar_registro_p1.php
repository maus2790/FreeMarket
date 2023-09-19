<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validar que todos los campos obligatorios estén completos
    if (!empty($correo)) {
        echo "Por favor, ingrese un correo electrónico";
    } else {
        $correo = $_POST["correo"];
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            echo "Por favor, introduzca una dirección de correo electrónico válida.";
        } else {
            // Conexión a la base de datos (reemplaza con tus propias credenciales de conexión)
            $mysqli = new mysqli("localhost", "root", "2813494D137E1631BBA301D5ACAB6E7BB7AA74CE1185D456565EF51D737677B4", "dotacion");

            if ($mysqli->connect_error) {
                die("Error de conexión a la base de datos: " . $mysqli->connect_error);
            }

            // Consulta para obtener la contraseña almacenada del usuario
            $sql = "SELECT CorreoElectronico FROM usuarios WHERE CorreoElectronico = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("s", $correo);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows == 1) {

                echo "Este correo ya esta viculado a una cuenta.";
            } else {
                // Usuario no encontrado
                echo "OK";
            }

            // Cerrar la conexión a la base de datos
            $stmt->close();
            $mysqli->close();
        }
    }
} else {
    // La solicitud no es de tipo POST, muestra un mensaje de error
    echo "Acceso no autorizado";
    /* header('location: login.php'); */
}
