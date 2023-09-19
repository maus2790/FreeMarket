<!-- CONTENIDO PRINCIPAL -->
<section class="content mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card card-primary card-outline">
                        <div class="card-header p-0 px-2">
                            <h3 class="card-title">
                                <h2 class=""><button id="btnNuevo" type="button" class="btn-sm btn btn-primary" data-toggle="modal">Agregar Usuario</button> Gestión de usuarios</h2>
                            </h3>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="margin:-10px; margin-top:-20px">
                        <!-- views/GestionUsuarios.php -->
                        <table id="tabla" class="table table-bordered table-condensed table table-sm" style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Departamento</th>
                                    <th>Activo</th>
                                    <th>Registro</th>
                                    <th>Sesión</th>
                                    <th>Dirección</th>
                                    <th>Avatar</th>
                                    <th>Clave</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

<!--MODAL GUARDAR Y ACTUALIZAR-->
<div class="modal fade" id="modalGuardarActualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"></h4>
                <button type="button" class="text-white swalDefaultInfo" data-dismiss="modal" aria-label="Close" style="background: transparent;border: none;">
                    <i class="fa fa-times-circle" id="cerrar" style="font-size: 29px;margin-right: -7px;font-weight: 300;"></i>
                </button>
            </div>
            <div class="card-body">
                <div class="login-box-msg" id="error-message" style="color: red;"></div>
                <form id="formulario">
                    <input type="hidden" name="opcion" id="opcion" value="0"><!-- Para indicar que es un intento de registro -->
                    <input type="hidden" name="IDUsuario" id="IDUsuario" value="0"> <!-- Para indicar que es un intento de registro -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-sm" name="nombre" id="nombre" placeholder="Nombres" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-sm" name="apellido" id="apellido" placeholder="Apellidos">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="tel" class="form-control form-control-sm" name="telefono" id="telefono" placeholder="Número de Teléfono" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <select class="form-control form-control-sm" aria-label="select example" name="departamento" id="departamento" required>
                                    <option value="">Seleccione un departamento</option>
                                    <option value="La Paz">La Paz</option>
                                    <option value="Oruro">Oruro</option>
                                    <option value="Potosi">Potosi</option>
                                    <option value="Cochabamba">Cochabamba</option>
                                    <option value="Sucre">Sucre</option>
                                    <option value="Tarija">Tarija</option>
                                    <option value="Pando">Pando</option>
                                    <option value="Beni">Beni</option>
                                    <option value="Santa Cruz">Santa Cruz</option>
                                    <option value="Sin Especificar">Sin Especificar</option>
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-flag"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-sm" name="direccion" id="direccion" placeholder="Dirección" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-circle" style="font-size: 21px;margin: -3px;"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control form-control-sm" name="correo" id="correo" placeholder="Correo Electrónico" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Contraseña" required>
                                <div class="input-group-text">
                                    <a type="button" id="show-hide-password" class="fa fa-eye-slash text-primary" onclick="togglePasswordVisibility()"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="password" class="form-control form-control-sm" name="confirmPassword" id="confirmPassword" placeholder="Confirmar Contraseña" required>
                                <div class="input-group-text">
                                    <a type="button" id="show-hide-confirmPassword" class="fa fa-eye-slash text-primary" onclick="toggleConfirmPasswordVisibility()"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                                <label for="agreeTerms" id="agreeTermsLabel">
                                    Acepto los <a href="pages/terminosDeUso.php" class="text-primary">términos y condiciones</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="button" id="register-button" class="btn btn-primary btn-block btn-sm">Registrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

</div>
<!-- MODAL CONFIRMAR ELIMINACION -->
<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="" id="exampleModalLabel"> <b>(Id:<span id="IDUsuarioE"></span>)</b> Confirmar eliminación</h5>
                <button type="button" class="text-white swalDefaultInfo" data-dismiss="modal" aria-label="Close" style="background: transparent;border: none;">
                    <i class="fa fa-times-circle" style="font-size: 29px;margin-right: -7px;font-weight: 300;"></i>
                </button>
            </div>
            <div class="modal-body">
                ¿Está seguro de eliminar del registro al usuario <b><span id="NombreE"></span> <span id="ApellidoE"></span></b> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-sm btn btn-secondary swalDefaultInfo" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn-sm btn btn-danger" id="confirmDelete">Eliminar Registro</button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL VER DETALLES DE USUARIO -->
<div class="modal fade" id="modalDetalles" tabindex="-1" aria-labelledby="modalDetallesLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" id="modalDetallesLabel">Detalles del Usuario</h5>
                <button type="button" class="text-white" data-dismiss="modal" aria-label="Close" style="background: transparent;border: none;">
                    <i class="fa fa-times-circle" style="font-size: 29px;margin-right: -7px;font-weight: 300;"></i>
                </button>
            </div>
            <div class="modal-body">
                <!-- Aquí mostrarás los detalles del usuario -->
                <div id="userDetails"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="../../controllers/controladorUsuarios.js"></script><!-- Muuuy importante -->
<script type="text/javascript" src="../../controllers/configuracionTablaServerSide.js"></script><!-- Muuuy importante -->
<script type="text/javascript" src="../../controllers/alertas.js"></script><!-- Muuuy importante -->
<script type="text/javascript" src="../../assets/js/mover_modales.js"></script><!-- Muuuy importante -->
<script src="../../assets/js/verOcultarClave.js"></script>