<?php

/* if (isset($_GET['profile'])) {
    $ruta = '';
} else {
    $ruta = '../';
} */
require_once("../config/configuracionDeSesion.php");

require_once "../config/db.php"; // Incluye el archivo de configuración
?>
<!--=============================
        PORTADA
        ==============================-->
<section class="perfil-usuario">
    <div class="contenedor-perfil">
        <div class="portada-perfil" style="background-image: url('../assets/archivosDeUsuario/portada.jpg');">
            <div class="sombra"></div>
            <div class="avatar-perfil">


                <?php if (isset($AvatarGoogle)) { ?>
                    <img loading="lazy" src="<?php echo $AvatarGoogle; ?>" alt="Avatar">
                <?php } else { ?>
                    <img loading="lazy" src="<?php echo ($Avatar != "0.png") ? '../assets/archivosDeUsuario/' . $IDUsuario . '/avatar/' . $Avatar : '../assets/archivosDeUsuario/0.png'; ?>" alt="Avatar">
                <?php } ?>

                <a href="#" class="cambiar-foto">
                    <i class="fas fa-camera"></i>
                    <span>Cambiar foto</span>
                </a>
            </div>
            <div class="datos-perfil">
                <h4 class="titulo-usuario">
                    <?php echo (isset($Nombre)) ? $Nombre . " " . $Apellido : 'nombre de usuario usuario usuario usuario'; ?>
                </h4>
                <!--                 <p class="bio-usuario">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
 -->
                <ul class="lista-perfil">
                    <li>14 Ventas</li>
                    <li>7 Compras</li>
                    <li>22 Articulos</li>
                </ul>
            </div>
            <div class="opcciones-perfil">
                <button type="">Cambiar portada</button>
                <button type=""><i class="fas fa-wrench"></i></button>
            </div>
        </div>

    </div>
</section>
<br>
<!--====  FIN PORTADA  ====-->




<!--=============================
        CONTENIDO PRINCIPAL
        ==============================-->

<div class="contenedor-perfil mt-1">
    <div class=" m-auto">
        <div class="card card-success card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">

                    <li class="nav-item"><a class="nav-link  text-primary active d-flex align-items-center" href="#tienda" data-toggle="tab"><i class="icono-perfil fas fa-store-alt"></i><span class="d-md-block d-none mx-2"> Tienda </span> </a></li>
                    <li class="nav-item"><a class="nav-link text-primary d-flex align-items-center" href="#publicaciones" data-toggle="tab"><i class="icono-perfil fas fa-bullhorn"></i><span class="d-md-block d-none mx-2"> Publicaciones </span> </a></li>
                    <li class="nav-item"><a class="nav-link  text-primary d-flex align-items-center" href="#ajustes" data-toggle="tab"><i class="icono-perfil fas fa-sliders-h"></i> <span class="d-md-block d-none mx-2"> Ajustes</span> </a></li>
                    <li class="nav-item"><a class="nav-link  text-primary d-flex align-items-center" href="#info" data-toggle="tab"><i class="icono-perfil fas fa-info-circle"></i><span class="d-md-block d-none mx-2"> Información</span> </a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content ">

                    <!--=============================
                            TIENDA
                        ==============================-->
                    <div class="tab-pane active row " id="tienda">
                        <div class="row">
                            <!-- publicacion 1 -->
                            <div class="col-md-6 mb-4">

                                <div class="card card-outline card-primary d-flex h-100">
                                    <div class="card-body p-1">
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="col-12">

                                                    <div class="position-relative">
                                                        <img loading="lazy" src="../assets/dist/img/prod-1.jpg" class="product-image pb-2" alt="Imagen del producto">
                                                        <div class="ribbon-wrapper ribbon-xl">
                                                            <div class="ribbon bg-danger text-xl">
                                                                AGOTADO
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 product-image-thumbs">
                                                    <div class="product-image-thumb active"><img loading="lazy" src="../assets/dist/img/prod-1.jpg" alt="Imagen del producto"></div>
                                                    <div class="product-image-thumb"><img loading="lazy" src="../assets/dist/img/prod-2.jpg" alt="Imagen del producto"></div>
                                                    <div class="product-image-thumb"><img loading="lazy" src="../assets/dist/img/prod-3.jpg" alt="Imagen del producto"></div>
                                                    <div class="product-image-thumb"><img loading="lazy" src="../assets/dist/img/prod-4.jpg" alt="Imagen del producto"></div>
                                                    <div class="product-image-thumb"><img loading="lazy" src="../assets/dist/img/prod-5.jpg" alt="Imagen del producto"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <h4 class="my-3">Reseña de las botas de senderismo LOWA Men’s Renegade GTX Mid</h4>
                                                <p>Denim crudo que probablemente no hayas oído hablar de ellos, pantalones cortos de mezclilla Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>


                                                <div class="bg-gray py-2 px-3 mt-4">
                                                    <h4 class="mb-0">
                                                        Bs. 80.00
                                                    </h4>
                                                    <h5 class="mt-0">
                                                        <small>Impuestos excluidos: Bs. 80.00 </small>
                                                    </h5>
                                                </div>
                                                <div class="mt-4 product-share mb-2 d-flex">
                                                    <!--====  INICIO BOTONES ANIMADOS  ====-->
                                                    <button type="button" class="btn-animado animacion-cuatro w-50 mx-2">

                                                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                                        <span class="tex-icono">
                                                            Comprar
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn-animado animacion-tres color-facebook w-50 mx-2">

                                                        <i class="fas fa-bookmark fa-lg mr-2"></i>
                                                        <span class="tex-icono">
                                                            Guardar
                                                        </span>
                                                    </button><br>

                                                </div>
                                                <!--====  BOTON PARA COLAPSAR DETALLES  ====-->
                                                <button type="button" class="btn-animado animacion-uno color-instagram  w-100" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">

                                                    <i class="fas fa-tag fa-lg mr-2"></i>
                                                    <span class="tex-icono">
                                                        Detalles del producto
                                                    </span>
                                                </button>
                                                <!--====  FIN BOTONES ANIMADOS  ====-->
                                            </div>
                                        </div>

                                        <br>
                                        <!--====  COLAPSO DE DETALLES  ====-->
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body pt-0">
                                                <div class="row mt-0">
                                                    <nav class="w-100">
                                                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                                                            <a class="nav-link text-primary  px-2 active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripción</a>
                                                            <a class="nav-link text-primary  px-2" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comentarios</a>
                                                            <a class="nav-link text-primary  px-2" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Puntuación</a>
                                                        </div>
                                                    </nav>
                                                    <div class="tab-content p-3" id="nav-tabContent">
                                                        <!-- Sección de Descripción -->
                                                        <div class="tab-pane fade active show" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                                                            <p>Las botas de senderismo LOWA Men’s Renegade GTX Mid son la elección perfecta para aventureros que buscan comodidad y durabilidad en cada paso. Estas botas están diseñadas con materiales de alta calidad y tecnología de vanguardia para brindarte la mejor experiencia en tus excursiones al aire libre.</p>

                                                            <p>Características clave:</p>
                                                            <ul>
                                                                <li>Parte superior resistente al agua con tecnología GORE-TEX para mantener tus pies secos en todas las condiciones.</li>
                                                                <li>Suela Vibram duradera que proporciona un agarre excepcional en terrenos variados.</li>
                                                                <li>Construcción de calidad que garantiza una larga vida útil de las botas.</li>
                                                                <li>Comodidad excepcional gracias a su diseño ergonómico y amortiguación superior.</li>
                                                            </ul>

                                                            <p>Ya sea que estés explorando senderos en las montañas o caminando por terrenos rocosos, estas botas te brindarán el soporte y la protección que necesitas.</p>
                                                        </div>
                                                        <!-- Sección de Comentarios -->
                                                        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                                                            <div class="media">
                                                                <img src="../assets/archivosDeUsuario/0.png" width="40" class="rounded-circle mr-3" alt="Avatar Usuario">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">Juan Pérez</h5>
                                                                    <p>Estas botas son increíbles. Las he usado en varias caminatas largas y son muy cómodas. Además, el sistema de cordones es excelente para ajustar el ajuste.</p>
                                                                </div>
                                                            </div>
                                                            <div class="media">
                                                                <img src="../assets/archivosDeUsuario/0.png" width="40" class="rounded-circle mr-3" alt="Avatar Usuario">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">María Rodríguez</h5>
                                                                    <p>Me encanta el diseño de estas botas. Son elegantes y funcionales. Las recomiendo ampliamente.</p>
                                                                </div>
                                                            </div>
                                                            <!-- Formulario para nuevos comentarios -->
                                                            <div class="rounded mt-2 p-2 d-flex align-items-center">
                                                                <form class="flex-grow-1">
                                                                    <div class="input-group">
                                                                        <textarea class="form-control" id="comment" rows="1" placeholder="Escribe tu comentario..."></textarea>
                                                                        <div class="input-group-append">
                                                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                        <!-- Sección de Calificación -->
                                                        <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
                                                            <!-- Contenido de calificación aquí -->
                                                            <div class="bg-gray rounded mt-4 p-3">
                                                                <p>Puntuación promedio: 4.5/5</p>
                                                                <p>Basado en 25 reseñas de clientes</p>
                                                                <div class="rating">
                                                                    <i class="fas fa-star" style="color: yellow;"></i>
                                                                    <i class="fas fa-star" style="color: yellow;"></i>
                                                                    <i class="fas fa-star" style="color: yellow;"></i>
                                                                    <i class="fas fa-star" style="color: yellow;"></i>
                                                                    <i class="fas fa-star-half-alt" style="color: yellow;"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div> <!-- publicacion 2 -->
                            <div class="col-md-6 mb-4">

                                <div class="card card-outline card-primary d-flex h-100">
                                    <div class="card-body p-1">
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="col-12">
                                                    <div class="position-relative">
                                                        <img loading="lazy" src="https://via.placeholder.com/250" class="product-image pb-2" alt="Imagen del producto 4">
                                                        <div class="ribbon-wrapper ribbon-xl">
                                                            <div class="ribbon bg-success text-xl">
                                                                DISPONIBLE
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 product-image-thumbs">
                                                    <div class="product-image-thumb active"><img loading="lazy" src="https://via.placeholder.com/100" alt="Imagen en miniatura del producto 4"></div>
                                                    <div class="product-image-thumb"><img loading="lazy" src="https://via.placeholder.com/100" alt="Imagen en miniatura del producto 4"></div>
                                                    <div class="product-image-thumb"><img loading="lazy" src="https://via.placeholder.com/100" alt="Imagen en miniatura del producto 4"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <h4 class="my-3">Producto 2: Nombre del Producto</h4>
                                                <p>Descripción del producto 4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis libero quis est efficitur auctor. Vivamus ultricies libero et quam volutpat, eget tristique ante volutpat.</p>
                                                <p>Características clave:</p>
                                                <ul>
                                                    <li>Característica 1.</li>
                                                    <li>Característica 2.</li>
                                                    <li>Característica 3.</li>
                                                    <li>Característica 4.</li>
                                                </ul>
                                                <div class="bg-gray py-2 px-3 mt-4">
                                                    <h4 class="mb-0">
                                                        Precio: Bs. XX.XX
                                                    </h4>
                                                    <h5 class="mt-0">
                                                        <small>Impuestos excluidos: Bs. XX.XX</small>
                                                    </h5>
                                                </div>
                                                <div class="mt-4 product-share mb-2 d-flex">
                                                    <!--====  INICIO BOTONES ANIMADOS  ====-->
                                                    <button type="button" class="btn-animado animacion-cuatro w-50 mx-2">

                                                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                                        <span class="tex-icono">
                                                            Comprar
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn-animado animacion-tres color-facebook w-50 mx-2">

                                                        <i class="fas fa-bookmark fa-lg mr-2"></i>
                                                        <span class="tex-icono">
                                                            Guardar
                                                        </span>
                                                    </button><br>

                                                </div>
                                                <button type="button" class="btn-animado animacion-uno color-instagram w-100" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
                                                    <i class="fas fa-tag fa-lg mr-2"></i>
                                                    <span class="tex-icono">
                                                        Detalles del producto
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="collapse" id="collapseExample4">
                                            <div class="card card-body pt-0">
                                                <div class="row mt-0">
                                                    <nav class="w-100">
                                                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                                                            <a class="nav-link text-primary  px-2 active" id="product-desc-tab" data-toggle="tab" href="#product-desc4" role="tab" aria-controls="product-desc4" aria-selected="true">Descripción</a>
                                                            <a class="nav-link text-primary  px-2" id="product-comments-tab" data-toggle="tab" href="#product-comments4" role="tab" aria-controls="product-comments4" aria-selected="false">Comentarios</a>
                                                            <a class="nav-link text-primary  px-2" id="product-rating-tab" data-toggle="tab" href="#product-rating4" role="tab" aria-controls="product-rating4" aria-selected="false">Puntuación</a>
                                                        </div>
                                                    </nav>
                                                    <div class="tab-content p-3" id="nav-tabContent">
                                                        <!-- Sección de Descripción -->
                                                        <div class="tab-pane fade active show" id="product-desc4" role="tabpanel" aria-labelledby="product-desc-tab4">
                                                            <p>Descripción detallada del Producto 4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis libero quis est efficitur auctor. Vivamus ultricies libero et quam volutpat, eget tristique ante volutpat.</p>
                                                            <p>Características adicionales:</p>
                                                            <ul>
                                                                <li>Característica adicional 1.</li>
                                                                <li>Característica adicional 2.</li>
                                                                <li>Característica adicional 3.</li>
                                                                <li>Característica adicional 4.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- Sección de Comentarios -->
                                                        <div class="tab-pane fade" id="product-comments4" role="tabpanel" aria-labelledby="product-comments-tab4">
                                                            <div class="media">
                                                                <img src="../assets/archivosDeUsuario/0.png" width="40" class="rounded-circle mr-3" alt="Avatar Usuario">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">Usuario 1</h5>
                                                                    <p>Comentario del Usuario 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                                </div>
                                                            </div>
                                                            <div class="media">
                                                                <img src="../assets/archivosDeUsuario/0.png" width="40" class="rounded-circle mr-3" alt="Avatar Usuario">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">Usuario 2</h5>
                                                                    <p>Comentario del Usuario 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                                </div>
                                                            </div>
                                                            <!-- Formulario para nuevos comentarios -->
                                                            <div class="rounded mt-2 p-2 d-flex align-items-center">
                                                                <form class="flex-grow-1">
                                                                    <div class="input-group">
                                                                        <textarea class="form-control" id="comment" rows="1" placeholder="Escribe tu comentario..."></textarea>
                                                                        <div class="input-group-append">
                                                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- Sección de Calificación -->
                                                        <div class="tab-pane fade" id="product-rating4" role="tabpanel" aria-labelledby="product-rating-tab4">
                                                            <!-- Contenido de calificación aquí -->
                                                            <div class="bg-gray rounded mt-4 p-3">
                                                                <p>Puntuación promedio: 4.2/5</p>
                                                                <p>Basado en 18 reseñas de clientes</p>
                                                                <div class="rating">
                                                                    <i class="fas fa-star" style="color: yellow;"></i>
                                                                    <i class="fas fa-star" style="color: yellow;"></i>
                                                                    <i class="fas fa-star" style="color: yellow;"></i>
                                                                    <i class="fas fa-star" style="color: yellow;"></i>
                                                                    <i class="fas fa-star-half-alt" style="color: yellow;"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- publicacion 3 -->
                            <div class="col-md-6 mb-4">

                                <div class="card card-outline card-primary d-flex h-100">
                                    <div class="card-body p-1">
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="col-12">
                                                    <div class="position-relative">
                                                        <img loading="lazy" src="https://via.placeholder.com/250" class="product-image pb-2" alt="Imagen del producto 3">
                                                        <div class="ribbon-wrapper ribbon-xl">
                                                            <div class="ribbon bg-danger text-xl">
                                                                AGOTADO
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 product-image-thumbs">
                                                    <div class="product-image-thumb active"><img loading="lazy" src="https://via.placeholder.com/100" alt="Imagen en miniatura del producto 3"></div>
                                                    <div class="product-image-thumb"><img loading="lazy" src="https://via.placeholder.com/100" alt="Imagen en miniatura del producto 3"></div>
                                                    <div class="product-image-thumb"><img loading="lazy" src="https://via.placeholder.com/100" alt="Imagen en miniatura del producto 3"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <h4 class="my-3">Producto 3: Nombre del Producto</h4>
                                                <p>Las botas de senderismo LOWA Men’s Renegade GTX Mid son la elección perfecta para aventureros que buscan comodidad y durabilidad en cada paso. Estas botas están diseñadas con materiales de alta calidad y tecnología de vanguardia para brindarte la mejor experiencia en tus excursiones al aire libre.</p>
                                                <p>Características clave:</p>
                                                <ul>
                                                    <li>Parte superior resistente al agua con tecnología GORE-TEX para mantener tus pies secos en todas las condiciones.</li>
                                                    <li>Suela Vibram duradera que proporciona un agarre excepcional en terrenos variados.</li>
                                                    <li>Construcción de calidad que garantiza una larga vida útil de las botas.</li>
                                                    <li>Comodidad excepcional gracias a su diseño ergonómico y amortiguación superior.</li>
                                                </ul>
                                                <div class="bg-gray py-2 px-3 mt-4">
                                                    <h4 class="mb-0">
                                                        Precio: Bs. XX.XX
                                                    </h4>
                                                    <h5 class="mt-0">
                                                        <small>Impuestos excluidos: Bs. XX.XX</small>
                                                    </h5>
                                                </div>
                                                <div class="mt-4 product-share mb-2 d-flex">
                                                    <!--====  INICIO BOTONES ANIMADOS  ====-->
                                                    <button type="button" class="btn-animado animacion-cuatro w-50 mx-2">

                                                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                                        <span class="tex-icono">
                                                            Comprar
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn-animado animacion-tres color-facebook w-50 mx-2">

                                                        <i class="fas fa-bookmark fa-lg mr-2"></i>
                                                        <span class="tex-icono">
                                                            Guardar
                                                        </span>
                                                    </button><br>

                                                </div>
                                                <button type="button" class="btn-animado animacion-uno color-instagram w-100" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                                                    <i class="fas fa-tag fa-lg mr-2"></i>
                                                    <span class="tex-icono">
                                                        Detalles del producto
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="collapse" id="collapseExample3">
                                            <div class="card card-body pt-0">
                                                <div class="row mt-0">
                                                    <nav class="w-100">
                                                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                                                            <a class="nav-link text-primary  px-2 active" id="product-desc-tab" data-toggle="tab" href="#product-desc3" role="tab" aria-controls="product-desc3" aria-selected="true">Descripción</a>
                                                            <a class="nav-link text-primary  px-2" id="product-comments-tab" data-toggle="tab" href="#product-comments3" role="tab" aria-controls="product-comments3" aria-selected="false">Comentarios</a>
                                                            <a class="nav-link text-primary  px-2" id="product-rating-tab" data-toggle="tab" href="#product-rating3" role="tab" aria-controls="product-rating3" aria-selected="false">Puntuación</a>
                                                        </div>
                                                    </nav>
                                                    <div class="tab-content p-3" id="nav-tabContent">
                                                        <!-- Sección de Descripción -->
                                                        <div class="tab-pane fade active show" id="product-desc3" role="tabpanel" aria-labelledby="product-desc-tab3">
                                                            <p>Las botas de senderismo LOWA Men’s Renegade GTX Mid son la elección perfecta para aventureros que buscan comodidad y durabilidad en cada paso. Estas botas están diseñadas con materiales de alta calidad y tecnología de vanguardia para brindarte la mejor experiencia en tus excursiones al aire libre.</p>
                                                            <p>Características clave:</p>
                                                            <ul>
                                                                <li>Parte superior resistente al agua con tecnología GORE-TEX para mantener tus pies secos en todas las condiciones.</li>
                                                                <li>Suela Vibram duradera que proporciona un agarre excepcional en terrenos variados.</li>
                                                                <li>Construcción de calidad que garantiza una larga vida útil de las botas.</li>
                                                                <li>Comodidad excepcional gracias a su diseño ergonómico y amortiguación superior.</li>
                                                            </ul>
                                                        </div>
                                                        <!-- Sección de Comentarios -->
                                                        <div class="tab-pane fade" id="product-comments3" role="tabpanel" aria-labelledby="product-comments-tab3">
                                                            <div class="media">
                                                                <img src="../assets/archivosDeUsuario/0.png" width="40" class="rounded-circle mr-3" alt="Avatar Usuario">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">Juan Pérez</h5>
                                                                    <p>Estas botas son increíbles. Las he usado en varias caminatas largas y son muy cómodas. Además, el sistema de cordones es excelente para ajustar el ajuste.</p>
                                                                </div>
                                                            </div>
                                                            <div class="media">
                                                                <img src="../assets/archivosDeUsuario/0.png" width="40" class="rounded-circle mr-3" alt="Avatar Usuario">
                                                                <div class="media-body">
                                                                    <h5 class="mt-0">María Rodríguez</h5>
                                                                    <p>Me encanta el diseño de estas botas. Son elegantes y funcionales. Las recomiendo ampliamente.</p>
                                                                </div>
                                                            </div>
                                                            <!-- Formulario para nuevos comentarios -->
                                                            <div class="rounded mt-2 p-2 d-flex align-items-center">
                                                                <form class="flex-grow-1">
                                                                    <div class="input-group">
                                                                        <textarea class="form-control" id="comment" rows="1" placeholder="Escribe tu comentario..."></textarea>
                                                                        <div class="input-group-append">
                                                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- Sección de Calificación -->
                                                        <div class="tab-pane fade" id="product-rating3" role="tabpanel" aria-labelledby="product-rating-tab3">
                                                            <!-- Contenido de calificación aquí -->
                                                            <div class="bg-gray rounded mt-4 p-3">
                                                                <p>Puntuación promedio: 4.5/5</p>
                                                                <p>Basado en 25 reseñas de clientes</p>
                                                                <div class="rating">
                                                                    <i class="fas fa-star" style="color: yellow;"></i>
                                                                    <i class="fas fa-star" style="color: yellow;"></i>
                                                                    <i class="fas fa-star" style="color: yellow;"></i>
                                                                    <i class="fas fa-star" style="color: yellow;"></i>
                                                                    <i class="fas fa-star-half-alt" style="color: yellow;"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!--=============================
                            PUBLICACIONES
                        ==============================-->
                    <div class="tab-pane" id="publicaciones">
                        <h1>Publicaciones</h1>
                    </div>
                    <!--=============================
                            AJUSTES
                        ==============================-->
                    <div class="tab-pane" id="ajustes">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--=============================
                            INFORMACION
                        ==============================-->
                    <div class="tab-pane" id="info">
                        INFORMACION
                    </div>

                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>


<!-- jQuery -->
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->