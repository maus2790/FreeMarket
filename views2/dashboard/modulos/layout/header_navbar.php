<!-- ####################################   CABECERA   ######################################################################## -->

<!-- Barra de navegación -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-primary">
    <!-- Enlaces de navegación izquierdos -->

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-none d-sm-inline-block" data-widget="pushmenu" href="#" role="button"><img src="../../assets/dist/img/titulo.png" style="margin: 0px;width: 150px;height: 20px;" alt=""></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../index.php" class="nav-link text-white">Inicio</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link text-white">Contacto</a>
        </li>
    </ul>

    <div class="d-md-flex d-none align-items-center w-100">
        <marquee behavior="" direction="right" style="border-radius: 10px;"> <img src="../../assets/dist/img/AdminLTELogo.png" style="margin: 0px;" width="50" alt=""></marquee>
    </div>



    <!-- Enlaces de navegación derechos -->
    <ul class="navbar-nav ml-auto">
        <!-- Búsqueda en la barra de navegación -->
        <li class="nav-item">
            <a class="nav-link text-white" data-widget="navbar-search" href="#" role="button">
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
        <li class="nav-item dropdown">
            <a class="nav-link text-white" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Inicio del Mensaje -->
                    <div class="media">
                        <img src="../../assets/dist/img/user1-128x128.jpg" alt="Avatar del Usuario" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Llámame cuando puedas...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Hace 4 horas</p>
                        </div>
                    </div>
                    <!-- Fin del Mensaje -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Inicio del Mensaje -->
                    <div class="media">
                        <img src="../../assets/dist/img/user8-128x128.jpg" alt="Avatar del Usuario" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Recibí tu mensaje, bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Hace 4 horas</p>
                        </div>
                    </div>
                    <!-- Fin del Mensaje -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Inicio del Mensaje -->
                    <div class="media">
                        <img src="../../assets/dist/img/user3-128x128.jpg" alt="Avatar del Usuario" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">El asunto va aquí</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Hace 4 horas</p>
                        </div>
                    </div>
                    <!-- Fin del Mensaje -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">Ver Todos los Mensajes</a>
            </div>
        </li>
        <!-- Menú desplegable de Notificaciones -->
        <li class="nav-item dropdown">
            <a class="nav-link text-white" data-toggle="dropdown" href="#">
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
        <li class="nav-item">
            <a class="nav-link text-white" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <!-- foto de perfil -->
        <div class="profile-dropdown">
            <?php if (isset($AvatarGoogle)) { ?>
                <img id="profile-image" src="<?php echo $AvatarGoogle; ?>" width="40" class="rounded-circle ms-1">
            <?php } elseif (isset($_SESSION['IDUsuario'])) { ?>
                <img id="profile-image" src="<?php echo ($Avatar != "0.png") ? '../../assets/archivosDeUsuario/' . $IDUsuario . '/avatar/' . $Avatar : '../../assets/archivosDeUsuario/0.png'; ?>" width="40" class="rounded-circle ms-1">
            <?php } else { ?>
                <img id="profile-image" src="<?php echo ($Avatar != "0.png") ? '../../assets/archivosDeUsuario/' . $IDUsuario . '/avatar/' . $Avatar : '../../assets/archivosDeUsuario/0.png'; ?>" width="40" class="rounded-circle ms-1">
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
                                <img src="<?php echo ($Avatar != "0.png") ? '../../assets/archivosDeUsuario/' . $IDUsuario . '/avatar/' . $Avatar : '../../assets/archivosDeUsuario/0.png'; ?>" alt="Avatar">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="datos-redes">
                        <div class="datos-usuario">
                            <span>145</span>
                            <span>Productos</span>
                        </div>
                        <div class="datos-usuario">
                            <span>75</span>
                            <span>Vendidos</span>
                        </div>
                    </div>
                </div>
                <div class="seccion-datos">
                    <?php if (isset($_SESSION['Correo'])) { ?>
                        <h5><?php echo (isset($Nombre)) ? $Nombre . " " . $Apellido : 'nombre de usuario usuario usuario usuario'; ?></h5>
                    <?php } ?>
                    <p><i class="fas fa-map-marker-alt"></i> Colombia / Cartagena</p>
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
                    <p class="bio-usuario">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <?php if (isset($_SESSION['Correo'])) { ?>
                        <a href="../index.php?profile=1" title="Ver perfil"><i class="fa fa-user  fs-4  mb-0"></i> Ver perfil</a>
                        <a href="../index.php" title="Pagina Principal"><i class="fa fa-home  fs-4  mb-0"></i> Pagina Principal</a>
                        <a href="../../public/logout.php?logout=<?php $_SESSION['Correo']; ?>" title="Ver perfil"><i class="fa fa-power-off  fs-4  mb-0"></i> Cerrar Sesion</a>
                    <?php } else { ?>
                        <a href="../../public/login.php" title="Iniciar Sesión"><i class="fas fa-arrow-circle-right me-2"></i> Iniciar Sesión</a>
                        <a href="../../public/register_p1.php" title="Registro"><i class="fas fa-address-card me-2"></i> Registro</a>
                    <?php } ?>
                </div>
            </div>



        </div>





    </ul>
</nav>

<!-- ###################################################################################################### -->