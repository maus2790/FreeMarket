<?php
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en línea</title>
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link href="../../assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../assets/plugins/bootstrap-5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/scroll.css" rel="stylesheet">
    <link href="../../assets/css/menuDesplegablePerfil.css" rel="stylesheet">

</head>

<body class="">

    <!-- CABECERA -->
    <header class="row py-0 mx-0 mb-1 sticky-top border-bottom border-top border-success" style="background: #d1e7dd;"> <!-- Campo de búsqueda centrado -->

        <div class="col-md-3 col-1 py-0 d-flex  align-items-center p-0">
            <i class="fas fa-bars mx-2 fs-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"></i>
            <div class="d-md-flex d-none align-items-center w-100">
                <img src="../../assets/dist/img/titulo.png" style="margin: 0px;width: 150px;height: 20px;" alt="">
                <marquee behavior="" direction="right" style="border-radius: 15px;"> <img src="../../assets/dist/img/AdminLTELogo.png" style="margin: 0px;" width="50" alt=""></marquee>
            </div>
        </div>
        <div class="col-md-9 col-11 d-flex align-items-center justify-content-end pe-1"> <!-- Campo de búsqueda centrado -->

            <div class="input-group py-1 " style="margin-left: 0;">
                <button class="btn btn-success dropdown-toggle rounded-start-pill border border-success d-md-flex d-none align-items-center  " type="button" data-bs-toggle="dropdown" aria-expanded="false"> Categorias</button>
                <button class="btn btn-success dropdown-toggle rounded-start-pill border border-success d-sm-none d-flex align-items-center " type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                <ul class="dropdown-menu border-success" style="overflow: auto;max-height: 63vh;">
                    <?php foreach ($categorias as $categoria) : ?>
                        <li class="border-bottom border-success "><a class="dropdown-item py-0" href="#"><?= $categoria ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <input type="text" class="form-control border border-success " aria-label="Text input dropdown buttons" placeholder="Busqueda de articulos" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
                <button class="btn btn-success rounded-end-pill border border-success d-md-flex d-none align-items-center  " type="button"><i class="fas fa-search mx-1"></i> Buscar</button>
                <button class="btn btn-success rounded-end-pill border border-success  d-sm-none d-flex align-items-center " type="button"><i class="fas fa-search mx-1"></i></button>

            </div>

            <nav class="navbar navbar-expand-lg navbar-lightt py-0 px-2">
                <!-- Barra de navegación -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Vender</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ofertas</a>
                        </li>
                        <li class="nav-item">
                            <!-- Carrito de compras --><!-- Button trigger modal -->
                            <a href="#" class=" nav-link" data-bs-toggle="modal" data-bs-target="#carrito">Carrito</a>

                        </li>
                    </ul>
                </div>
            </nav>

            <!-- foto de perfil -->
            <div class="profile-dropdown">
                <?php if (isset($AvatarGoogle)) { ?>
                    <img id="profile-image" src="<?php echo $AvatarGoogle; ?>" width="40" class="rounded-circle ms-1">
                <?php } elseif (isset($_SESSION['IDUsuario'])) { ?>
                    <img id="profile-image" src="<?php echo ($Avatar != "0.png") ? '../../assets/archivosDeUsuario/' . $IDUsuario . '/avatar/' . $Avatar : '../../assets/archivosDeUsuario/0.png'; ?>" width="40" class="rounded-circle ms-1">
                <?php } else { ?>
                    <img id="profile-image" src="<?php echo ($Avatar != "0.png") ? '../../assets/archivosDeUsuario/' . $IDUsuario . '/avatar/' . $Avatar : '../../assets/archivosDeUsuario/0.png'; ?>" width="40" class="rounded-circle ms-1">
                <?php } ?>

                <div class="profile-dropdown-content border border-success rounded">
                    <div class="card" style="width: 16rem;">
                        <div class="card-header p-0">
                            <?php if (isset($_SESSION['Correo'])) { ?>
                                <h6 class="card-title text-center text-white" style="position: absolute;margin: 5px 5px;background: rgba(25, 135, 84, 0.7);border-radius: 12px;padding: 5px;font-size: 15px;"><?php echo (isset($Nombre)) ? $Nombre . " " . $Apellido : 'nombre de  usuario usuario usuario usuario'; ?></h6>
                            <?php } ?>

                            <?php if (isset($AvatarGoogle)) { ?>
                                <img id="profile-image" src="<?php echo $AvatarGoogle; ?>" width="40" class="card-img-top">
                            <?php } else { ?>
                                <img id="profile-image" src="<?php echo ($Avatar != "0.png") ? '../../assets/archivosDeUsuario/' . $IDUsuario . '/avatar/' . $Avatar : '../../assets/archivosDeUsuario/0.png'; ?>" width="40" class="card-img-top">
                            <?php } ?>

                        </div>
                        <?php if (isset($_SESSION['Correo'])) { ?>
                            <div class="card-body p-0 bg-white">

                                <a href="../profile/" class="p-0 pb-2">
                                    <button type="button" class="btn btn-outline-success btn-sm py-0 px-1 rounded-pill w-100">Ver Perfil</button>
                                </a>

                            </div>
                        <?php } ?>

                        <ul class="list-group list-group-flush" style="margin-top: -3px;">

                            <?php if (isset($_SESSION['Correo'])) { ?>
                                <li class="list-group-item p-0"><a class="dropdown-item  py-2" href="../dashboard/"><i class="fas fa-user  fs-4  mb-0"></i> Administrar</a></li>
                                <li class="list-group-item p-0"><a class="dropdown-item  py-2" href="../../public/logout.php?logout=<?php $_SESSION['Correo']; ?>"><i class="fa fa-power-off  fs-4  mb-0"></i> Cerrar Sesión</a></li>
                            <?php } else { ?>
                                <li class="list-group-item p-0 "><a class="dropdown-item  py-2 d-flex align-items-center" href="../../public/login.php"><i class="fas fa-arrow-circle-right fs-4 mb-0 me-2"></i> Iniciar Sesión</a></li>
                                <li class="list-group-item  p-0"><a class="dropdown-item  py-2 d-flex align-items-center" href="../../public/register_p1.php"><i class="fas fa-address-card  fs-4  mb-0 me-2"></i> Registro</a></li>

                            <?php } ?>
                        </ul>
                        <div class="card-footer text-body-secondary bg-white">
                            <p class="card-text"><small class="text-body-secondary">Última actualización hace 3 minutos</small></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- CONTENIDO -->

    <div class="row mx-md-4 m-auto mt-1 mb-0">
        <div class="col-md-4 d-none mx-auto d-md-block bg-body-tertiary rounded shadow" style=" max-height: 89vh;overflow: auto;">
            <h3 class="mx-1">Ofertas</h3>
            <!-- OFERTAS 1 -->
            <?php for ($i = 0; $i <= 20; $i++) { ?>
                <div class="col-md-12 m-auto">
                    <div class="card mb-3 mx-2 p-0">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="https://via.placeholder.com/100" class="card-img-top" alt="Producto 1">
                            </div>
                            <div class="col-md-7 m-auto ">
                                <div class="card-body py-0">
                                    <h5 class="card-title my-1">Celular Samsung S21</h5>
                                    <p class="card-text my-1 lh-1" style=" text-align: justify;"><small>El último modelo de Samsung con pantalla AMOLED y cámara de alta resolución.</small></p>
                                </div>
                                <div class="btn-group p-2 d-flex justify-content-center" role="group" aria-label="Basic mixed styles example">
                                    <a href="#" class="btn-sm btn btn-outline-success p-0" style="border: none;"><i class="fas fa-money-bill-wave fs-5"></i> Bs. 1000</a>
                                    <a href="#" class="btn-sm btn btn-outline-info p-0" style="border: none;">Mas Detalles</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="col-md-8 col-12 shadow-lg  p-3 pb-0 mb-0 bg-body-tertiary rounded " style=" max-height: 89vh;overflow: auto;">
            <h2 class="mx-2 shadow-sm p-0 mb-1 bg-body-tertiary rounded">Productos</h2>
            <hr>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">

                <?php
                // Definir un array de productos
                $productos = [
                    [
                        "nombre" => "Celular Samsung S21",
                        "descripcion" => "El último modelo de Samsung con pantalla AMOLED y cámara de alta resolución.",
                        "precio" => "2,999.00",
                        "imagen" => "https://via.placeholder.com/100"
                    ],
                    [
                        "nombre" => "Laptop Dell XPS 13",
                        "descripcion" => "Potente laptop con pantalla InfinityEdge y procesador Intel Core i7.",
                        "precio" => "4,499.00",
                        "imagen" => "https://via.placeholder.com/100"
                    ],
                    [
                        "nombre" => "TV LG OLED 4K",
                        "descripcion" => "Televisor con calidad de imagen OLED y sonido Dolby Atmos.",
                        "precio" => "3,799.00",
                        "imagen" => "https://via.placeholder.com/100"
                    ],
                    [
                        "nombre" => "Cámara Canon EOS 5D Mark IV",
                        "descripcion" => "Cámara réflex digital de alta gama con sensor de fotograma completo.",
                        "precio" => "8,599.00",
                        "imagen" => "https://via.placeholder.com/100"
                    ],
                    [
                        "nombre" => "Tablet iPad Pro",
                        "descripcion" => "Potente tablet con pantalla Retina y chip A14 Bionic.",
                        "precio" => "1,199.00",
                        "imagen" => "https://via.placeholder.com/100"
                    ],
                    [
                        "nombre" => "Smartwatch Samsung Galaxy Watch",
                        "descripcion" => "Reloj inteligente con seguimiento de salud y pantalla AMOLED.",
                        "precio" => "699.00",
                        "imagen" => "https://via.placeholder.com/100"
                    ],
                    [
                        "nombre" => "Auriculares Sony WH-1000XM4",
                        "descripcion" => "Auriculares con cancelación de ruido y calidad de sonido excepcional.",
                        "precio" => "899.00",
                        "imagen" => "https://via.placeholder.com/100"
                    ],
                    [
                        "nombre" => "Consola PlayStation 5",
                        "descripcion" => "La última consola de Sony con gráficos de alta calidad y SSD ultrarrápido.",
                        "precio" => "5,999.00",
                        "imagen" => "https://via.placeholder.com/100"
                    ],
                    [
                        "nombre" => "Refrigeradora LG de Doble Puerta",
                        "descripcion" => "Refrigeradora con dispensador de agua y múltiples compartimentos de almacenamiento.",
                        "precio" => "3,499.00",
                        "imagen" => "https://via.placeholder.com/100"
                    ]
                ];


                // Inicializar un contador
                $i = 0;

                // Iterar a través de los productos y generar las tarjetas
                while ($i < count($productos)) {
                ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?php echo $productos[$i]["imagen"]; ?>" class="card-img-top" alt="<?php echo $productos[$i]["nombre"]; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $productos[$i]["nombre"]; ?></h5>
                                <p class="card-text lh-1" style=" text-align: justify;"><?php echo $productos[$i]["descripcion"]; ?></p>
                            </div>
                            <div class="btn-group p-2" role="group" aria-label="Basic mixed styles example">

                                <a href="#" class=" btn btn-outline-success p-0" style="border: none;"><i class="fas fa-money-bill-wave fs-5"></i> Bs. <?php echo $productos[$i]["precio"]; ?></a>
                                <a href="#" class=" btn btn-outline-info p-0" style="border: none;">Mas Detalles</a>

                            </div>

                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                <?php

                    // Incrementar el contador
                    $i++;
                }

                ?>
            </div>
            <!-- piede pagina 1 -->
            <div class=" my-4 p-1 border-bottom border-top border-success text-center" style="background: #d1e7dd;">
                <b class="text-success">Pie de pagina</b>
            </div>

        </div>

    </div>

    <!-- PIE DE PAGINA -->
    <div class="sticky-bottom mb-0 p-1 border-bottom border-top border-success text-center d-md-none d-block" style="background: #d1e7dd;height: 44px;">

        <marquee behavior="" direction="right" style="border-radius: 15px; width: 100%;margin: -10;">
            <img src="../../assets/dist/img/AdminLTELogo.png" style="margin: 0px;" width="40" alt="">
        </marquee>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="carrito" tabindex="-1" aria-labelledby="carritoLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success py-1">
                    <h2 class="modal-title fs-5 text-white" id="carritoLabel">Carrito</h2>
                    <button type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close" style="background: transparent;border: none;">
                        <i class="fas fa-times" style="font-size: 29px;margin-right: -7px;"></i>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer py-1">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-sm btn-success">Comprar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- ============================ OFFCANVAS ============================================ -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header bg-success">
            <h5 class="offcanvas-title text-white" id="offcanvasWithBothOptionsLabel">Contenido</h5>
            <button type="button" class="text-white" data-bs-dismiss="offcanvas" aria-label="Close" style="background: transparent;border: none;">
                <i class="fas fa-times" style="font-size: 29px;margin-right: -7px;"></i>
            </button>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="list-group">
                <li class="list-group-item items2" type="button"> <strong>Electrónica</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Celular iPhone</li>
                        <li class="list-group-item items" type="button"> Laptop MacBook Pro</li>
                        <li class="list-group-item items" type="button"> TV Samsung 4K</li>
                        <li class="list-group-item items" type="button"> Cámara Canon EOS</li>
                        <li class="list-group-item items" type="button"> Consola de videojuegos PlayStation 5</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Ropa y Moda</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Jeans Levi's 501</li>
                        <li class="list-group-item items" type="button"> Vestido Little Black Dress</li>
                        <li class="list-group-item items" type="button"> Zapatillas Nike Air Max</li>
                        <li class="list-group-item items" type="button"> Camiseta blanca básica</li>
                        <li class="list-group-item items" type="button"> Corbata de seda</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Joyería y Relojes</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Anillo de compromiso de diamante</li>
                        <li class="list-group-item items" type="button"> Collar de perlas</li>
                        <li class="list-group-item items" type="button"> Reloj Rolex Submariner</li>
                        <li class="list-group-item items" type="button"> Pulsera de oro</li>
                        <li class="list-group-item items" type="button"> Pendientes de diamante</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Hogar y Jardín</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Sofá de cuero</li>
                        <li class="list-group-item items" type="button"> Mesa de comedor de madera maciza</li>
                        <li class="list-group-item items" type="button"> Cortadora de césped Honda</li>
                        <li class="list-group-item items" type="button"> Set de sartenes antiadherentes</li>
                        <li class="list-group-item items" type="button"> Colchón de espuma viscoelástica</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Belleza y Cuidado Personal</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Perfume Chanel No. 5</li>
                        <li class="list-group-item items" type="button"> Crema hidratante Neutrogena</li>
                        <li class="list-group-item items" type="button"> Cepillo de dientes eléctrico Oral-B</li>
                        <li class="list-group-item items" type="button"> Maquillaje base MAC Studio Fix</li>
                        <li class="list-group-item items" type="button"> Afeitadora eléctrica Braun</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Juguetes y Juegos</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> LEGO Classic Brick Box</li>
                        <li class="list-group-item items" type="button"> Peluche de Mickey Mouse</li>
                        <li class="list-group-item items" type="button"> Monopoly</li>
                        <li class="list-group-item items" type="button"> Muñeca Barbie</li>
                        <li class="list-group-item items" type="button"> Juego de mesa Jenga</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Deportes y Aire Libre</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Bicicleta de montaña Specialized</li>
                        <li class="list-group-item items" type="button"> Pelota de fútbol Nike Premier Team</li>
                        <li class="list-group-item items" type="button"> Tienda de campaña Coleman</li>
                        <li class="list-group-item items" type="button"> Raqueta de tenis Wilson Pro Staff</li>
                        <li class="list-group-item items" type="button"> Patines en línea Rollerblade</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Libros y Medios</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Libro "Cien años de soledad" de Gabriel García Márquez</li>
                        <li class="list-group-item items" type="button"> Película "El Padrino" dirigida por Francis Ford Coppola</li>
                        <li class="list-group-item items" type="button"> Álbum musical "Thriller" de Michael Jackson</li>
                        <li class="list-group-item items" type="button"> Serie de TV "Juego de Tronos"</li>
                        <li class="list-group-item items" type="button"> Revista National Geographic</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Alimentos y Bebidas</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Chocolate Hershey's</li>
                        <li class="list-group-item items" type="button"> Café Starbucks</li>
                        <li class="list-group-item items" type="button"> Vino tinto Cabernet Sauvignon</li>
                        <li class="list-group-item items" type="button"> Pizza Margherita</li>
                        <li class="list-group-item items" type="button"> Agua embotellada Evian</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Salud y Bienestar</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Suplemento vitamínico Centrum</li>
                        <li class="list-group-item items" type="button"> Monitor de presión arterial Omron</li>
                        <li class="list-group-item items" type="button"> Máscara facial N95</li>
                        <li class="list-group-item items" type="button"> Colirio Refresh Tears</li>
                        <li class="list-group-item items" type="button"> Treadmill (cinta de correr) NordicTrack</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Muebles y Decoración de Interiores</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Silla de oficina ergonómica</li>
                        <li class="list-group-item items" type="button"> Lámpara de mesa moderna</li>
                        <li class="list-group-item items" type="button"> Sofá seccional</li>
                        <li class="list-group-item items" type="button"> Mesa de centro de vidrio</li>
                        <li class="list-group-item items" type="button"> Alfombra persa</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Electromésticos</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Refrigerador de acero inoxidable</li>
                        <li class="list-group-item items" type="button"> Lavadora de carga frontal</li>
                        <li class="list-group-item items" type="button"> Horno de microondas Panasonic</li>
                        <li class="list-group-item items" type="button"> Aspiradora Dyson</li>
                        <li class="list-group-item items" type="button"> Licuadora Vitamix</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Electrónica de Consumo</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Auriculares inalámbricos Bose</li>
                        <li class="list-group-item items" type="button"> Tableta iPad Pro</li>
                        <li class="list-group-item items" type="button"> Altavoz Bluetooth JBL</li>
                        <li class="list-group-item items" type="button"> Cámara GoPro HERO</li>
                        <li class="list-group-item items" type="button"> Router Wi-Fi Linksys</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Herramientas y Mejoras para el Hogar</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Juego de llaves inglesas Craftsman</li>
                        <li class="list-group-item items" type="button"> Sierra circular DeWalt</li>
                        <li class="list-group-item items" type="button"> Set de brochas de pintura Wooster</li>
                        <li class="list-group-item items" type="button"> Taladro inalámbrico Makita</li>
                        <li class="list-group-item items" type="button"> Generador Honda</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Equipaje y Accesorios de Viaje</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Maleta Samsonite</li>
                        <li class="list-group-item items" type="button"> Mochila de senderismo Osprey</li>
                        <li class="list-group-item items" type="button"> Bolso de viaje con ruedas</li>
                        <li class="list-group-item items" type="button"> Candado TSA Master Lock</li>
                        <li class="list-group-item items" type="button"> Etiquetas de equipaje personalizadas</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Automoción y Piezas de Repuesto</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Neumáticos Michelin</li>
                        <li class="list-group-item items" type="button"> Batería de coche Interstate</li>
                        <li class="list-group-item items" type="button"> Aceite de motor Mobil 1</li>
                        <li class="list-group-item items" type="button"> Filtros de aire Fram</li>
                        <li class="list-group-item items" type="button"> Luces LED para automóviles</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Instrumentos Musicales</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Guitarra acústica Martin</li>
                        <li class="list-group-item items" type="button"> Teclado Yamaha</li>
                        <li class="list-group-item items" type="button"> Batería Pearl Export Series</li>
                        <li class="list-group-item items" type="button"> Flauta travesera Gemeinhardt</li>
                        <li class="list-group-item items" type="button"> Trompeta Bach Stradivarius</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Material de Oficina y Papelería</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Plumas estilográficas Montblanc</li>
                        <li class="list-group-item items" type="button"> Papel de calidad para impresora</li>
                        <li class="list-group-item items" type="button"> Agendas Moleskine</li>
                        <li class="list-group-item items" type="button"> Calculadora científica Texas Instruments</li>
                        <li class="list-group-item items" type="button"> Marcadores Sharpie</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Productos para Bebés y Niños</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Silla de coche para bebé Graco</li>
                        <li class="list-group-item items" type="button"> Cuna convertible Delta Children</li>
                        <li class="list-group-item items" type="button"> Pañales Pampers</li>
                        <li class="list-group-item items" type="button"> Juguetes educativos Fisher-Price</li>
                        <li class="list-group-item items" type="button"> Ropa de bebé Carter's</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Productos para Mascotas</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Comida para perros Royal Canin</li>
                        <li class="list-group-item items" type="button"> Collar antipulgas y garrapatas Seresto</li>
                        <li class="list-group-item items" type="button"> Juguetes para gatos Kong</li>
                        <li class="list-group-item items" type="button"> Acuario completo para peces tropicales</li>
                        <li class="list-group-item items" type="button"> Arena para gatos Arm & Hammer</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Arte y Artesanía</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Set de pintura acrílica Liquitex</li>
                        <li class="list-group-item items" type="button"> Bloc de dibujo Canson</li>
                        <li class="list-group-item items" type="button"> Herramientas de escultura en madera</li>
                        <li class="list-group-item items" type="button"> Máquina de coser Singer</li>
                        <li class="list-group-item items" type="button"> Hilos de bordar DMC</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Suministros de Construcción</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Madera contrachapada de abedul</li>
                        <li class="list-group-item items" type="button"> Cemento Portland</li>
                        <li class="list-group-item items" type="button"> Azulejos cerámicos para baño</li>
                        <li class="list-group-item items" type="button"> Tuberías de PVC</li>
                        <li class="list-group-item items" type="button"> Hojas de yeso</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Electrónica para el Automóvil</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Radio estéreo Pioneer</li>
                        <li class="list-group-item items" type="button"> Faros LED para automóvil</li>
                        <li class="list-group-item items" type="button"> Batería de arranque DieHard</li>
                        <li class="list-group-item items" type="button"> Sistema de alarma Viper</li>
                        <li class="list-group-item items" type="button"> Kit de cables de encendido MSD</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Ropa Deportiva</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Zapatillas de running Nike Air Zoom</li>
                        <li class="list-group-item items" type="button"> Camiseta de fútbol Adidas</li>
                        <li class="list-group-item items" type="button"> Leggings de yoga Lululemon</li>
                        <li class="list-group-item items" type="button"> Gorro de natación Speedo</li>
                        <li class="list-group-item items" type="button"> Calcetines deportivos Under Armour</li>
                    </ul>
                </li>
                <li class="list-group-item items2" type="button"> <strong>Productos Ecológicos y Sostenibles</strong>
                    <ul class="list-group">
                        <li class="list-group-item items" type="button"> Paneles solares de alta eficiencia</li>
                        <li class="list-group-item items" type="button"> Bolsas reutilizables de tela orgánica</li>
                        <li class="list-group-item items" type="button"> Bombillas LED de bajo consumo</li>
                        <li class="list-group-item items" type="button"> Compostador doméstico</li>
                        <li class="list-group-item items" type="button"> Productos de limpieza ecológicos</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <script src="../../assets/js/menuDesplegablePerfil.js"></script>
    <!-- ========================================================================== -->
    <!-- Agrega el enlace al archivo JavaScript de Bootstrap -->
    <script src="../../assets/plugins/bootstrap-5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>