    <!-- ##############################   PIE DE PAGINA ####################################################################### -->
    <footer class="py-0" style="margin-left: 0;">

        <strong class="my-0">
            <i> Fecha de registro de usuario (
                <?php
                // Divide la fecha y hora en dos variables separadas (opcional)
                list($fechaActualDesdeDB, $horaActualDesdeDB) = explode(" ", $FechaDeRegistro);
                // Convierte la fecha al formato "día-mes-año"
                $fechaFormateada = date("d-m-Y", strtotime($fechaActualDesdeDB));

                // Muestra la fecha y hora
                echo $fechaFormateada . " : ";
                echo $horaActualDesdeDB;

                ?>)
            </i>
        </strong>
        <hr>
        <strong class="my-0">Derechos de autor &copy; 2023 <a href="#">Marco A. Uscamayta</a>.</strong>
        Todos los derechos reservados.
        <div class="float-right d-none d-sm-inline-block">
            <b>Versión</b> 1.0
        </div>

    </footer>