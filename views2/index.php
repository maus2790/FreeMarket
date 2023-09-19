<?php
require_once '../config/db.php'; // Incluye el archivo de configuración
include('../config/configuracionDeSesion.php');
// Array de categorías
$categorias = [
    "Electrónica",
    "Ropa y moda",
    "Joyería y relojes",
    "Hogar y jardín",
    "Belleza y cuidado personal",
    "Juguetes y juegos",
    "Deportes y aire libre",
    "Libros y medios",
    "Alimentos y bebidas",
    "Salud y bienestar",
    "Muebles y decoración de interiores",
    "Electrodomésticos",
    "Electrónica de consumo",
    "Herramientas y mejoras para el hogar",
    "Equipaje y accesorios de viaje",
    "Automoción y piezas de repuesto",
    "Instrumentos musicales",
    "Material de oficina y papelería",
    "Productos para bebés y niños",
    "Productos para mascotas",
    "Arte y artesanía",
    "Suministros de construcción",
    "Electrónica para el automóvil",
    "Ropa deportiva",
    "Productos ecológicos y sostenibles"
];
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FreeMarket</title>
    <?php

    /*===================================================================
    HEAD
    ====================================================================*/
    include_once "layout/head.php";

    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed  sidebar-collapse" style="height: auto;">

    <!-- <body class="hold-transition sidebar-mini layout-fixed">
 -->
    <div class="wrapper">
        <!-- Precargador -->
        <!--         <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../assets/dist/img/AdminLTELogo.png" alt="Logo de AdminLTE" height="60" width="60">
        </div> -->
        <?php
        if (isset($_GET['profile'])) {
            $pagina = "profile";
        } else {
            $pagina = "home";
        }
        /*===================================================================
            HEADER
            ====================================================================*/
        include "layout/header_navbar.php";

        /*===================================================================
            MENU LATERAL
            ====================================================================*/
        include "layout/sidebar_lateral.php";

        /*===================================================================
            CONTENIDO PRINCIPAL DE LA PAGINA
            ====================================================================*/
        echo '<div class="content-wrapper">';

        include "$pagina/index.php";

        echo '</div>';


        ?>

    </div>

    <!-- Panel de control lateral -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- El contenido del panel de control lateral va aquí -->
    </aside>
    <!-- / .control-sidebar -->

    </div>
    <!-- ./wrapper -->


    <?php

    /*===================================================================
    SCRIPTS
    ====================================================================*/
    include_once "layout/scripts.php";

    ?>
</body>

</html>