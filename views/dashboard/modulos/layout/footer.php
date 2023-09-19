    <!-- ##############################   PIE DE PAGINA ####################################################################### -->
    <footer class="main-footer">
        <strong>Derechos de autor &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        Todos los derechos reservados.
        <div class="float-right d-none d-sm-inline-block">
            <b>Versión</b> 3.2.0
        </div>
        <hr>

        <?php if (isset($_SESSION['IDUsuario'])) { ?>


            <strong> <i> Fecha de registro de usuario (
                    <?php
                    // Divide la fecha y hora en dos variables separadas (opcional)
                    list($fechaActualDesdeDB, $horaActualDesdeDB) = explode(" ", $FechaDeRegistro);
                    // Convierte la fecha al formato "día-mes-año"
                    $fechaFormateada = date("d-m-Y", strtotime($fechaActualDesdeDB));

                    // Muestra la fecha y hora
                    echo $fechaFormateada . " : ";
                    echo $horaActualDesdeDB;

                    ?>)</i>
            </strong>
        <?php }  ?>
    </footer>