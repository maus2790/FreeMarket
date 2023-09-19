<?php
require_once '../../config/db.php'; // Incluye el archivo de configuración
include('../../config/configuracionDeSesion.php');
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
    <title>AdminLTE | Panel de control</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- ADMIN LTE -->
    <link rel="stylesheet" href="../../assets/dist/css/adminlte.css">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/scroll.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/resaltoFilasTabla.css" />

    <!-- DATATABLES CSS -->

    <link rel="stylesheet" type="text/css" href="../../assets/datatables/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <style>
        .brand-link .brand-image {
            max-height: 40px;
        }
    </style>
    <link href="../../assets/css/menuDesplegablePerfil.css" rel="stylesheet">
    <!-- TARGETA PERFIL USUARIO -->
    <link rel="stylesheet" href="../../assets/css/targetaUsuario.css">
    <!-- COLORES -->
    <link rel="stylesheet" href="../../assets/css/colores.css">
    <!-- BUSCADOR -->
    <link rel="stylesheet" href="../../assets/css/BuscadorEstilos.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed  sidebar-collapse" style="height: auto;">

    <!-- <body class="hold-transition sidebar-mini layout-fixed">
 -->
    <div class="wrapper">
        <!-- Precargador -->
        <!--         <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../assets/dist/img/AdminLTELogo.png" alt="Logo de AdminLTE" height="60" width="60">
        </div> -->
        <?php

        /*===================================================================
            HEADER
            ====================================================================*/
        include "modulos/layout/header_navbar.php";

        /*===================================================================
            MENU LATERAL
            ====================================================================*/
        include "modulos/layout/sidebar_lateral.php";

        /*===================================================================
            CONTENIDO PRINCIPAL DE LA PAGINA
            ====================================================================*/
        echo '<div class="content-wrapper">';

        include "modulos/inicio.php";

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


    <!-- ################## SCRIPTS ####################################################################### -->

    <!-- jQuery -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/dist/js/adminlte.js"></script>


    <script>
        function cargarContenido(contenedor, contenido) {
            $("." + contenedor).load(contenido);
        }
    </script>

    <!-- DATATABLES JS -->
    <script src="../../assets/datatables/datatables.min.js" type="text/javascript"></script>
    <!-- SweetAlert2 -->
    <script src="../../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="../../assets/js/menuDesplegablePerfil.js"></script>
    <script src="../../assets/js/buscador.js"></script>

</body>

</html>