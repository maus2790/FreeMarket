<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar y validar los datos del formulario
    $IDUsuario = isset($_POST["IDUsuario"]) ? $_POST["IDUsuario"] : "0";
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
    $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
    $departamento = isset($_POST["departamento"]) ? $_POST["departamento"] : "";
    $correo = isset($_POST["correo"]) ? $_POST["correo"] : "";
    $direccion = isset($_POST["direccion"]) ? $_POST["direccion"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $confirmPassword = isset($_POST["confirmPassword"]) ? $_POST["confirmPassword"] : "";

    // Validar que todos los campos obligatorios estén completos
    if (empty($nombre) || empty($telefono) ||  empty($correo) || empty($password) || empty($confirmPassword)) {
        echo "Por favor, complete todos los campos obligatorios.(*)";
    } else {
        // Validar que el número de teléfono sea válido (formato numérico)
        if (!preg_match("/^\d+$/", $telefono)) {
            echo "Por favor, introduzca un número de teléfono válido.";
        } else {
            // Validar que el correo electrónico sea válido
            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                echo "Por favor, introduzca una dirección de correo electrónico válida." . $correo;
            } else {
                // Conexión a la base de datos (reemplaza con tus propias credenciales de conexión)
                $mysqli = new mysqli("localhost", "root", "2813494D137E1631BBA301D5ACAB6E7BB7AA74CE1185D456565EF51D737677B4", "dotacion");

                if ($mysqli->connect_error) {
                    die("Error de conexión a la base de datos: " . $mysqli->connect_error);
                }
                if ($IDUsuario == 0) { //=========REGISTRO=============
                    $sql = "SELECT IDUsuario FROM usuarios WHERE CorreoElectronico = ?";
                    $stmt = $mysqli->prepare($sql);
                    $stmt->bind_param("s", $correo);
                    $stmt->execute();
                    $stmt->store_result();

                    if ($stmt->num_rows > 0) {
                        echo "Este correo ya esta viculado a una cuenta.";
                    } elseif ($password != $confirmPassword) {
                        echo "Las contraseñas no coinciden.";
                    } else {
                        // Aquí puedes ejecutar la inserción del usuario en la base de datos si todos los datos son válidos
                        // Recuerda hashear la contraseña antes de almacenarla en la base de datos
                        // Cerrar la conexión a la base de datos
                        echo "exito"; // Puedes redirigir a una página de éxito o mostrar un mensaje aquí
                    }
                } else { //=================== ACTUALIZACION ==========================
                    // Consulta para obtener todos los datos del usuario con el IDUsuario
                    // Consulta para obtener todos los datos del usuario con el IDUsuario
                    $sql = "SELECT * FROM usuarios WHERE IDUsuario = ?";
                    $stmt = $mysqli->prepare($sql);
                    $stmt->bind_param("i", $IDUsuario); // Suponiendo que IDUsuario sea un valor numérico (integer)
                    $stmt->execute();
                    $result = $stmt->get_result(); // Obtener el resultado de la consulta

                    // El usuario con el IDUsuario especificado existe, puedes obtener los datos del usuario
                    $row = $result->fetch_assoc();                   // Ahora, puedes acceder a los datos del usuario como $IDUsuarioActual, $nombreActual, $apellidoActual, etc.

                    if ($password != $confirmPassword) {
                        echo "Las contraseñas no coinciden.";
                    } else {
                        $sw = "exito";
                        // Verificar que las contraseñas coincidan
                        if ($password != $row["Clave"]) {
                            // Contraseña válida, puedes continuar con el proceso
                            $sw .= "clave"; //Cambio de clave
                        }
                        if ($correo != $row["CorreoElectronico"]) {
                            // Contraseña válida, puedes continuar con el proceso
                            $sw .= "correo"; //Cambio de correo
                        }
                        echo $sw; // Puedes redirigir a una página de éxito o mostrar un mensaje aquí

                    }
                }
                $stmt->close();
                $mysqli->close();
            }
        }
    }
} else {
    // La solicitud no es de tipo POST, muestra un mensaje de error
    echo "Acceso no autorizado";
    header('location: login.php');
}
