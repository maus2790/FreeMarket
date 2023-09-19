<?php
// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_NAME', 'dotacion');
define('DB_USER', 'root');
define('DB_PASSWORD', '2813494D137E1631BBA301D5ACAB6E7BB7AA74CE1185D456565EF51D737677B4');

// Configuración de la aplicación
define('BASE_URL', 'http://localhost/FreeMarket/');
define('SESSION_TIMEOUT', 1800); // Tiempo de expiración de sesión en segundos (30 minutos)

// Otras configuraciones
define('DEBUG_MODE', true); // Cambiar a false en producción para desactivar mensajes de depuración

// Configuraciones de seguridad
define('SALT', 'tu_salt_secreto'); // Una cadena aleatoria para aumentar la seguridad de las contraseñas
/* 
La función define() en PHP se utiliza para crear constantes en tiempo de ejecución. 

define('PI', 3.14159);
echo PI; // Esto mostrará 3.14159

*/