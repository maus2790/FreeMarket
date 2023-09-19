<?php

if (isset($_GET['profile'])) {
    $ruta = '';
} else {
    $ruta = '../';
    include("$ruta../config/configuracionDeSesion.php");
}
require_once "$ruta../config/db.php"; // Incluye el archivo de configuración
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

                    <li class="nav-item"><a class="nav-link  text-primary active" href="#tienda" data-toggle="tab"><i class="icono-perfil fas fa-store-alt"></i> Tienda </a></li>
                    <li class="nav-item"><a class="nav-link text-primary" href="#publicaciones" data-toggle="tab"><i class="icono-perfil fas fa-bullhorn"></i> Publicaciones</a></li>
                    <li class="nav-item"><a class="nav-link  text-primary" href="#ajustes" data-toggle="tab"><i class="icono-perfil fas fa-sliders-h"></i> Ajustes </a></li>
                    <li class="nav-item"><a class="nav-link  text-primary" href="#info" data-toggle="tab"><i class="icono-perfil fas fa-info-circle"></i> Información </a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">

                    <!--=============================
                            TIENDA
                        ==============================-->
                    <div class="active tab-pane" id="tienda">
                        <?php
                        for ($i = 0; $i < 100; $i++) { ?>
                            <section class="content" style="display: flex;justify-content: space-evenly;">

                                <!-- Cuadro 1 -->
                                <div class="card card-outline card-primary" style="width: 48%;">
                                    <div class="card-body p-1">
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <h4 class="d-inline-block d-sm-none">Reseña de las botas de senderismo LOWA Men’s Renegade GTX Mid</h4>
                                                <div class="col-12">

                                                    <div class="position-relative">
                                                        <img loading="lazy" src="../assets/dist/img/prod-1.jpg" class="product-image pb-2" alt="Imagen del producto">
                                                        <div class="ribbon-wrapper ribbon-xl">
                                                            <div class="ribbon bg-danger text-xl">
                                                                AGOTADO
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!--====  INICIO Boton Reacciones  ====-->
                                                    <button type="button" class="boton-reacciones">
                                                        <span class="texto-boton">Reaccionar</span>
                                                        <div class="reacciones">
                                                            <div class="reaccion">
                                                                <i class="fas fa-thumbs-up"></i>
                                                                <span class="nombre-reccion">
                                                                    Me gusta
                                                                </span>
                                                            </div>
                                                            <div class="reaccion">
                                                                <i class="fas fa-heart"></i>
                                                                <span class="nombre-reccion">
                                                                    Me encanta
                                                                </span>
                                                            </div>
                                                            <div class="reaccion">
                                                                <i class="far fa-sad-tear"></i>
                                                                <span class="nombre-reccion">
                                                                    Me entristece
                                                                </span>
                                                            </div>
                                                            <div class="reaccion">
                                                                <i class="far fa-grin-squint-tears"></i>
                                                                <span class="nombre-reccion">
                                                                    Me divierte
                                                                </span>
                                                            </div>
                                                            <div class="reaccion">
                                                                <i class="far fa-angry"></i>
                                                                <span class="nombre-reccion">
                                                                    Me enoja
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </button>
                                                    <!--====  FIN Boton Reacciones  ====-->
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
                                                <div class="mt-4 product-share">
                                                    <!--====  INICIO BOTONES ANIMADOS  ====-->
                                                    <button type="button" class="btn-animado animacion-cuatro color-instagram">

                                                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                                        <span class="tex-icono">
                                                            Comprar
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn-animado animacion-tres color-facebook">

                                                        <i class="fas fa-bookmark fa-lg mr-2"></i>
                                                        <span class="tex-icono">
                                                            Guardar
                                                        </span>
                                                    </button>
                                                    <!--====  FIN BOTONES ANIMADOS  ====-->
                                                </div>

                                            </div>
                                        </div>


                                        <p>
                                            <button class="btn btn-outline-primary mt-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Detalles del producto
                                            </button>
                                        </p>
                                        <!-- =========== COLAPSO MAS INFORMACION ============= -->
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                <div class="row mt-0">
                                                    <nav class="w-100">
                                                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                                                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripción</a>
                                                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comentarios</a>
                                                            <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Calificación</a>
                                                        </div>
                                                    </nav>
                                                    <div class="tab-content p-3" id="nav-tabContent">
                                                        <div class="tab-pane fade active show" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus.</div>
                                                        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum.</div>
                                                        <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ======================== -->

                                    </div>
                                    <!-- /.card-body -->
                                </div>

                                <!-- Cuadro 2 -->
                                <div class="card card-outline card-primary" style="width: 48%;">
                                    <div class="card-body p-1">
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <h4 class="d-inline-block d-sm-none">Reseña de las botas de senderismo LOWA Men’s Renegade GTX Mid</h4>
                                                <div class="col-12">

                                                    <div class="position-relative">
                                                        <img loading="lazy" src="../assets/dist/img/prod-1.jpg" class="product-image pb-2" alt="Imagen del producto">
                                                        <div class="ribbon-wrapper ribbon-lg">
                                                            <div class="ribbon bg-primary text-lg">
                                                                OFERTA
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!--====  INICIO Boton Reacciones  ====-->
                                                    <button type="button" class="boton-reacciones">
                                                        <span class="texto-boton">Reaccionar</span>
                                                        <div class="reacciones">
                                                            <div class="reaccion">
                                                                <i class="fas fa-thumbs-up"></i>
                                                                <span class="nombre-reccion">
                                                                    Me gusta
                                                                </span>
                                                            </div>
                                                            <div class="reaccion">
                                                                <i class="fas fa-heart"></i>
                                                                <span class="nombre-reccion">
                                                                    Me encanta
                                                                </span>
                                                            </div>
                                                            <div class="reaccion">
                                                                <i class="far fa-sad-tear"></i>
                                                                <span class="nombre-reccion">
                                                                    Me entristece
                                                                </span>
                                                            </div>
                                                            <div class="reaccion">
                                                                <i class="far fa-grin-squint-tears"></i>
                                                                <span class="nombre-reccion">
                                                                    Me divierte
                                                                </span>
                                                            </div>
                                                            <div class="reaccion">
                                                                <i class="far fa-angry"></i>
                                                                <span class="nombre-reccion">
                                                                    Me enoja
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </button>
                                                    <!--====  FIN Boton Reacciones  ====-->
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
                                                <div class="mt-4 product-share">
                                                    <!--====  INICIO BOTONES ANIMADOS  ====-->
                                                    <button type="button" class="btn-animado animacion-cuatro color-instagram">

                                                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                                        <span class="tex-icono">
                                                            Comprar
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn-animado animacion-tres color-facebook">

                                                        <i class="fas fa-bookmark fa-lg mr-2"></i>
                                                        <span class="tex-icono">
                                                            Guardar
                                                        </span>
                                                    </button>
                                                    <!--====  FIN BOTONES ANIMADOS  ====-->
                                                </div>

                                            </div>
                                        </div>


                                        <p>
                                            <button class="btn btn-outline-primary mt-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Detalles del producto
                                            </button>
                                        </p>
                                        <!-- =========== COLAPSO MAS INFORMACION ============= -->
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                <div class="row mt-0">
                                                    <nav class="w-100">
                                                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                                                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripción</a>
                                                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comentarios</a>
                                                            <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Calificación</a>
                                                        </div>
                                                    </nav>
                                                    <div class="tab-content p-3" id="nav-tabContent">
                                                        <div class="tab-pane fade active show" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus.</div>
                                                        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum.</div>
                                                        <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ======================== -->

                                    </div>
                                    <!-- /.card-body -->
                                </div>

                            </section>
                        <?php } ?>
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