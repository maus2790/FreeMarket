<?php
// Definir un array de productos
$productos = [
    [
        "nombre" => "Celular Samsung S21",
        "descripcion" => "El último modelo de Samsung con pantalla AMOLED y cámara de alta resolución.",
        "precio" => "2,999.00",
        "imagen" => "https://via.placeholder.com/300"
    ],
    [
        "nombre" => "Laptop Dell XPS 13",
        "descripcion" => "Potente laptop con pantalla InfinityEdge y procesador Intel Core i7.",
        "precio" => "4,499.00",
        "imagen" => "https://via.placeholder.com/300"
    ],
    [
        "nombre" => "TV LG OLED 4K",
        "descripcion" => "Televisor con calidad de imagen OLED y sonido Dolby Atmos.",
        "precio" => "3,799.00",
        "imagen" => "https://via.placeholder.com/300"
    ],
    [
        "nombre" => "Cámara Canon EOS 5D Mark IV",
        "descripcion" => "Cámara réflex digital de alta gama con sensor de fotograma completo.",
        "precio" => "8,599.00",
        "imagen" => "https://via.placeholder.com/300"
    ],
    [
        "nombre" => "Tablet iPad Pro",
        "descripcion" => "Potente tablet con pantalla Retina y chip A14 Bionic.",
        "precio" => "1,199.00",
        "imagen" => "https://via.placeholder.com/300"
    ],
    [
        "nombre" => "Smartwatch Samsung Galaxy Watch",
        "descripcion" => "Reloj inteligente con seguimiento de salud y pantalla AMOLED.",
        "precio" => "699.00",
        "imagen" => "https://via.placeholder.com/300"
    ],
    [
        "nombre" => "Auriculares Sony WH-1000XM4",
        "descripcion" => "Auriculares con cancelación de ruido y calidad de sonido excepcional.",
        "precio" => "899.00",
        "imagen" => "https://via.placeholder.com/300"
    ],
    [
        "nombre" => "Consola PlayStation 5",
        "descripcion" => "La última consola de Sony con gráficos de alta calidad y SSD ultrarrápido.",
        "precio" => "5,999.00",
        "imagen" => "https://via.placeholder.com/300"
    ],
    [
        "nombre" => "Refrigeradora LG de Doble Puerta",
        "descripcion" => "Refrigeradora con dispensador de agua y múltiples compartimentos de almacenamiento.",
        "precio" => "3,499.00",
        "imagen" => "https://via.placeholder.com/300"
    ]
];

?>

<section class="content-header py-2 pt-3">

    <div class="container-fluid">
        <div class="row mb-0">

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

</section>

<!-- Main content -->
<section class="">
    <!-- CONTENIDO -->

    <div class="row mx-md-4 m-auto mt-1 mb-0">
        <div class=" col-md-4 d-none mx-auto d-md-block bg-body-tertiary rounded shadow" style=" max-height: 86vh;overflow: auto;">
            <h3 class="card card-outline card-primary p-1 mx-1">Ofertas</h3>
            <!-- OFERTAS 1 -->
            <?php

            try {
                $db = new PDO(
                    'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
                    DB_USER,
                    DB_PASSWORD,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                );

                // Configura PDO para lanzar excepciones en caso de errores
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Consulta SQL para obtener los productos
                $query = "SELECT * FROM productos";
                $stmt = $db->query($query);

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="col-md-12 m-auto">
                        <div class="card card-outline card-primary mb-3 mx-2 p-0">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="https://via.placeholder.com/100" class="card-img-top" alt="' . $row['NombreProducto'] . '">
                                </div>
                                <div class="col-md-7 m-auto ">
                                    <div class="card-body py-0">
                                        <h5 class="card-title my-1">' . $row['NombreProducto'] . '</h5>
                                        <p class="card-text my-1 lh-1" style="text-align: justify;"><small>' . $row['Descripcion'] . '</small></p>
                                    </div>
                                    <div class="btn-group p-2 d-flex justify-content-center" role="group" aria-label="Basic mixed styles example">
                                        <a href="#" class="btn-sm btn btn-outline-success p-0" style="border: none;"><i class="fas fa-money-bill-wave fs-5"></i> Bs. ' . $row['Precio'] . '</a>
                                        <a href="#" class="btn-sm btn btn-outline-info p-0" style="border: none;">Más Detalles</a>
                                    </div>
                
                                    <a href="#" class="btn-sm btn btn-outline-primary p-0" style="border: none;" data-toggle="modal" data-target="#editarProductoModal' . $row['IDProducto'] . '" onclick="cargarDatosProducto(' . $row['IDProducto'] . ')">Ajustes</a>
                                </div>
                            </div>
                        </div>
                    </div>';

                    // Modal para editar el producto (dentro del bucle)
                    echo '<div class="modal fade" id="editarProductoModal' . $row['IDProducto'] . '" tabindex="-1" role="dialog" aria-labelledby="editarProductoModalLabel' . $row['IDProducto'] . '" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editarProductoModalLabel' . $row['IDProducto'] . '">Editar Producto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulario para editar los datos del producto -->
                                    <form id="editarProductoForm' . $row['IDProducto'] . '">
                                        <div class="form-group">
                                            <label for="nombreProducto' . $row['IDProducto'] . '">Nombre del Producto</label>
                                            <input type="text" class="form-control" id="nombreProducto' . $row['IDProducto'] . '" name="nombreProducto">
                                        </div>
                                        <div class="form-group">
                                            <label for="descripcion' . $row['IDProducto'] . '">Descripción</label>
                                            <textarea class="form-control" id="descripcion' . $row['IDProducto'] . '" name="descripcion"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="precio' . $row['IDProducto'] . '">Precio</label>
                                            <input type="text" class="form-control" id="precio' . $row['IDProducto'] . '" name="precio">
                                        </div>
                                        <!-- Agrega más campos según tus necesidades -->
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary" onclick="guardarCambios(' . $row['IDProducto'] . ')">Guardar Cambios</button>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            } catch (PDOException $e) {
                die('Error al conectar a la base de datos: ' . $e->getMessage());
            }
            ?>

        </div>

        <div class=" col-md-8 col-12 shadow-lg  p-3 pt-0 pb-0 mb-0 bg-body-tertiary rounded " style=" max-height: 86vh;overflow: auto;">
            <h3 class="card card-outline card-primary p-1 mx-1" style="margin-top: -15px;">Productos</h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">

                <?php
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

            <br>
            <hr>
            <?php
            /*===================================================================
            FOOTER
            ====================================================================*/
            include "modulos/layout/footer.php";

            ?>

        </div>

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
</section>
<!-- /.content -->
