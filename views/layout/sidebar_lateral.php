<!-- ##############################   BARRA LATERA IZQUIERDO ####################################################################### -->
<!-- Contenedor de barra lateral principal -->
<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Logotipo -->
    <a href="../views/index.php" class="brand-link text-white" style="background: var(--verde);">
        <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class=" bg-white brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Administracion</span>
    </a>

    <!-- barra lateral -->
    <div class="sidebar">



        <!-- Menú de la barra lateral -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Agregar íconos a los enlaces utilizando la clase .nav-icon con Font Awesome u otra librería de íconos -->

                <li class="nav-item">
                    <a href="index.php" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>

                <!-- ==================================================================================================== -->
                <?php
                // Consulta SQL para obtener todos los registros de la tabla categorias
                $sql = "SELECT * FROM categorias WHERE padre_id IS NULL"; // Obtener las categorías principales

                try {
                    // Ejecutar la consulta
                    $stmt = $db->query($sql);

                    // Verificar si la consulta se ejecutó correctamente
                    if ($stmt) {
                        // Obtener todos los registros como un array asociativo
                        $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        if ($categorias) {
                            // Procesar las categorías
                            foreach ($categorias as $categoria) {
                                // Acceder a los valores de las columnas
                                $id = $categoria['IDCategoria'];
                                $categoriaItem = $categoria['categoriaItem'];
                                $icono = $categoria['icono'];

                                // Consultar los ítems relacionados con esta categoría
                                $sqlItems = "SELECT * FROM categorias WHERE padre_id = $id";

                                // Ejecutar la consulta de los ítems
                                $stmtItems = $db->query($sqlItems);

                                // Obtener los ítems como un array asociativo
                                $items = $stmtItems->fetchAll(PDO::FETCH_ASSOC);
                ?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon <?php echo $icono; ?>"></i>
                                        <p>
                                            <?php echo "  " . $categoriaItem; ?>
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <?php
                                        // Procesar los ítems de la categoría
                                        foreach ($items as $item) {
                                            $vista = $item['vista'];
                                            $nombreItem = $item['categoriaItem'];
                                        ?>
                                            <li class="nav-item">
                                                <a onclick="cargarContenido('content-wrapper', '<?php echo $vista; ?>')" class="nav-link" style="cursor: pointer;">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p><?php echo "  " . $nombreItem; ?></p>
                                                </a>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                <?php
                            }
                        } else {
                            echo "No se encontraron categorías.";
                        }
                    } else {
                        echo "Error en la consulta.";
                    }
                } catch (PDOException $e) {
                    die('Error al ejecutar la consulta: ' . $e->getMessage());
                }

                // Cerrar la conexión
                $db = null;
                ?>

                <!-- ================================================================================================================ -->


                <!-- CERRAR SESIÓN -->
                <li class="nav-item bg-danger">
                    <a href="../public/logout.php?logout=<?php echo $Correo ?>" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Cerrar Sesión</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <div class="sidebar-custom">
        <a href="#" class="btn btn-primary pe-2"><i class="fas fa-cogs"></i> Configuración</a>
    </div>
</aside>
<!-- ###################################################################################################### -->

<script>
    // Obtén todos los elementos con la clase "nav-link"
    var navLinks = document.querySelectorAll('.nav-link');

    // Agrega un evento onclick a cada elemento
    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            // Elimina la clase "Active" de todos los elementos con la clase "nav-link"
            navLinks.forEach(function(link) {
                link.classList.remove('active');
            });

            // Agrega la clase "Active" al elemento actual
            this.classList.add('active');
        });
    });
</script>