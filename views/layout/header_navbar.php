<!-- ####################################   CABECERA   ######################################################################## -->

<!-- Barra de navegación -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-primary" style="height: 58px;">
    <!-- Enlaces de navegación izquierdos -->

    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link text-white px-1" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link px-md-4 px-0" data-widget="pushmenu" href="#" role="button"><img src="../assets/dist/img/titulo.png" style="margin: 0px;width: 150px;height: 20px;" alt=""></a>
        </li>

    </ul>

    <style>
        /* Estilos para dispositivos móviles con un ancho máximo de 100% */
        @media (max-width: 767px) {
            .navegacionSup {
                position: fixed;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1030;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
            }

            .navegacionSup a {
                flex-direction: column;
                padding: 0;
            }

            .navegacionSup a span {
                font-size: small;
            }

            .navegacionSup div {
                margin-top: 5px;
            }

            .ADD i {
                font-size: xx-large;
            }

        }

        @media (min-width: 993px) {
            .navegacionSup li {
                margin-right: -5px
            }
        }



        .navegacionSup a {
            color: white;
        }
    </style>

    <ul class="navbar-nav bg-primary navegacionSup">
        <!-- tiene que aparecer en la parte inferior como de tiktok-->
        <li class="nav-item" style="margin-right: -10px;width: 25%;">
            <a href=" index.php" style="color:#55ff7c" class="home nav-link p-2 d-flex align-items-center "><i class="fas fa-home"></i> <span class=" mx-3"> Inicio</span></a>
            <div id="margenInferiorHome" style="height: 4px; width: 100%; background:#55ff7c"></div>
        </li>

        <li class="nav-item" style="margin-right: -10px;width: 25%;">
            <a href="#" id="ofertas" class="ofertas nav-link p-2 d-flex align-items-center text-white "><i class="fas fa-gift"></i> <span class=" mx-3 "> Ofertas</span> </a>
            <div id="margenInferiorOfertas" class="d-none" style="height: 4px; width: 100%; background:#55ff7c"></div>
        </li>
        <li class="nav-item" style="margin-right: -10px;width: 25%;">
            <a href="#" id="ADD" class="ADD nav-link p-2 d-flex align-items-center text-white"><i class="fas fa-plus-circle"></i> <span class=" mx-3 d-md-block d-none"> Publicar</span></a>
            <div id="margenInferiorADD" class="d-none" style="height: 4px; width: 100%; background:#55ff7c"></div>
        </li>
        <li class="nav-item" style="margin-right: -10px;width: 25%;">
            <a href="#" id="mercado" class="mercado nav-link p-2 d-flex align-items-center text-white "><i class="fas fa-shopping-bag"></i> <span class=" mx-3"> Mercado</span> </a>
            <div id="margenInferiorMercado" class="d-none" style="height: 4px; width: 100%; background:#55ff7c"></div>
        </li>

        <li class="nav-item" style="margin-right: -10px;width: 25%;">
            <a href="#" id="miTienda" class="miTienda nav-link p-2 d-flex align-items-center text-white "><i class="fas fa-store"></i> <span class=" mx-3"> MiTienda</span> </a>
            <div id="margenInferiorMiTienda" class="d-none" style="height: 4px; width: 100%; background:#55ff7c"></div>
        </li>

    </ul>

    <div class="d-md-flex d-none align-items-center w-100">
        <marquee behavior="" direction="right" style="border-radius: 10px;"> <img src="../assets/dist/img/AdminLTELogo.png" style="margin: 0px;" width="42" alt=""></marquee>
    </div>

    <!-- Enlaces de navegación derechos -->
    <ul class="navbar-nav ml-auto">
        <!-- Búsqueda en la barra de navegación -->
        <li class="nav-item px-0">
            <a class="nav-link text-white px-2" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>

            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">


                        <div class="dropdown input-group-append">
                            <button class="btn btn-navbar nav-link" type="button" id="dropdownButton">
                                <i class="left fas fa-angle-left"></i>
                            </button>
                            <!-- ====== LISTA DE CATEGORIAS ======== -->
                            <ul class="border-success dropdown-menu" id="dropdownMenu" style="overflow: auto;max-height: 63vh;">
                                <?php foreach ($categorias as $categoria) : ?>
                                    <li class="border-bottom border-success "><a class="dropdown-item py-0" href="#"><?= $categoria ?></a></li>
                                <?php endforeach; ?>
                            </ul>

                        </div>

                        <input class="form-control form-control-navbar" id="buscador" type="search" placeholder="Buscar" aria-label="Buscar">

                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search" id="closeButton">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Menú desplegable de Mensajes -->
        <!--  -->
        <!-- Menú desplegable de Notificaciones -->
        <li class="nav-item dropdown px-0">
            <a class="nav-link text-white px-2" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notificaciones</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 nuevos mensajes
                    <span class="float-right text-muted text-sm">3 minutos</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 solicitudes de amistad
                    <span class="float-right text-muted text-sm">12 horas</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 nuevos informes
                    <span class="float-right text-muted text-sm">2 días</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">Ver Todas las Notificaciones</a>
            </div>
        </li>
        <!-- Botón de Pantalla Completa -->
        <li class="nav-item px-0">
            <a class="nav-link text-white px-2" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <!-- foto de perfil -->
        <div class="profile-dropdown">
            <?php if (isset($AvatarGoogle)) { ?>
                <img id="profile-image" src="<?php echo $AvatarGoogle; ?>" width="40" class="rounded-circle ms-1">
            <?php } elseif (isset($_SESSION['IDUsuario'])) { ?>
                <img id="profile-image" src="<?php echo ($Avatar != "0.png") ? '../assets/archivosDeUsuario/' . $IDUsuario . '/avatar/' . $Avatar : '../assets/archivosDeUsuario/0.png'; ?>" width="40" class="rounded-circle ms-1">
            <?php } else { ?>
                <img id="profile-image" src="<?php echo ($Avatar != "0.png") ? '../assets/archivosDeUsuario/' . $IDUsuario . '/avatar/' . $Avatar : '../assets/archivosDeUsuario/0.png'; ?>" width="40" class="rounded-circle ms-1">
            <?php } ?>

            <!--=============================
                    TARGETA PERFIL
                ==============================-->

            <div class="profile-dropdown-content card-usuario">
                <div class="seccion-avatar">
                    <div class="avatar">
                        <div class="img-avatar">
                            <?php if (isset($AvatarGoogle)) { ?>
                                <img src="<?php echo $AvatarGoogle; ?>" alt="Avatar">
                            <?php } else { ?>
                                <img src="<?php echo ($Avatar != "0.png") ? '../assets/archivosDeUsuario/' . $IDUsuario . '/avatar/' . $Avatar : '../assets/archivosDeUsuario/0.png'; ?>" alt="Avatar">
                            <?php } ?>
                        </div>
                    </div>
                    <?php if (isset($_SESSION['Correo'])) { ?>

                        <div class="datos-redes">
                            <div class="datos-usuario">
                                <span>12</span>
                                <span>Productos</span>
                            </div>
                            <div class="datos-usuario">
                                <span>3</span>
                                <span>Pedidos</span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="seccion-datos">
                    <?php if (isset($_SESSION['Correo'])) { ?>
                        <h5><?php echo (isset($Nombre)) ? $Nombre . " " . $Apellido : 'nombre de usuario usuario usuario usuario'; ?></h5>
                    <?php } ?>
                    <p><i class="fas fa-map-marker-alt"></i> Bolivia / La paz</p>
                    <div class="botones-redes">
                        <a href="#" class="btn-social facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn-social twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="btn-social instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <!--                     <p class="bio-usuario">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p> -->
                    <?php if (isset($_SESSION['Correo'])) { ?>
                        <a href="#" class="miTienda" style="cursor: pointer;"><i class="fas fa-user  fs-4  mb-0"></i> Ver mi Tienda en Linea</a>
                        <a href="dashboard/" title="Ir al panel de control"> <i class="nav-icon fas fa-tachometer-alt"></i> Ir al panel de control</a>
                        <a href="index.php" title="Pagina Principal"><i class="fa fa-home  fs-4  mb-0"></i> Pagina Principal</a>
                        <a href="../public/logout.php?logout=<?php $_SESSION['Correo']; ?>" title="Ver mi Tienda en Linea"><i class="fa fa-power-off  fs-4  mb-0"></i> Cerrar Sesion</a>
                    <?php } else { ?>
                        <a href="../public/login.php" title="Iniciar Sesión"><i class="fas fa-arrow-circle-right me-2"></i> Iniciar Sesión</a>
                        <a href="../public/register_p1.php" title="Registro"><i class="fas fa-address-card me-2"></i> Registro</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </ul>
</nav>

<!-- ###################################################################################################### -->
