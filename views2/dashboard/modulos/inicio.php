<section class="content-header">

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Panel de Control</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Panel de Control v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Cuadros pequeños (Cajas de Estadísticas) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- Caja pequeña -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Nuevos Pedidos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- Caja pequeña -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Tasa de Rebote</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- Caja pequeña -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Registros de Usuarios</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- Caja pequeña -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Visitantes Únicos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->


        <!-- Main row -->
        <div class="row">

            <!-- Columna izquierda -->
            <section class="col-lg-6 connectedSortable">

                <!-- Lista de TAREAS -->
                <?php
                // Datos ficticios de pagos pendientes, etiquetas de énfasis y tiempos estimados
                $pagosPendientes = [
                    ["usuario" => "John Smith", "monto" => 100, "tiempo" => "2 minutos"],
                    ["usuario" => "Mary Johnson", "monto" => 200, "tiempo" => "4 horas"],
                    ["usuario" => "Robert Brown", "monto" => 50, "tiempo" => "1 día"],
                    ["usuario" => "Linda Davis", "monto" => 75, "tiempo" => "30 minutos"],
                    ["usuario" => "Michael Wilson", "monto" => 120, "tiempo" => "3 horas"],
                    ["usuario" => "Jennifer Lee", "monto" => 60, "tiempo" => "1 día"],
                    ["usuario" => "William Anderson", "monto" => 90, "tiempo" => "45 minutos"],
                    ["usuario" => "Elizabeth White", "monto" => 150, "tiempo" => "2 horas"],
                    ["usuario" => "David Martin", "monto" => 80, "tiempo" => "1 día"],
                    ["usuario" => "Susan Taylor", "monto" => 110, "tiempo" => "3 horas"],
                    ["usuario" => "James Johnson", "monto" => 70, "tiempo" => "1 hora"],
                    ["usuario" => "Patricia Clark", "monto" => 130, "tiempo" => "2 horas"],
                    ["usuario" => "Richard Walker", "monto" => 55, "tiempo" => "30 minutos"],
                    ["usuario" => "Deborah Harris", "monto" => 85, "tiempo" => "1 día"],
                    ["usuario" => "Charles Moore", "monto" => 95, "tiempo" => "2 horas"],
                    ["usuario" => "Jessica King", "monto" => 105, "tiempo" => "1 día"],
                    ["usuario" => "Thomas Baker", "monto" => 125, "tiempo" => "4 horas"],
                    ["usuario" => "Sarah Turner", "monto" => 45, "tiempo" => "15 minutos"],
                    ["usuario" => "Daniel Nelson", "monto" => 70, "tiempo" => "2 horas"],
                    ["usuario" => "Karen Evans", "monto" => 110, "tiempo" => "1 día"],
                ];


                $etiquetasEnfasis = ["danger", "info", "warning", "success", "primary", "secondary"];

                // Genera elementos HTML para mostrar pagos pendientes y etiquetas
                $htmlPagos = "";
                foreach ($pagosPendientes as $index => $pago) {
                    // Selecciona una etiqueta de énfasis al azar
                    $etiquetaAzar = $etiquetasEnfasis[array_rand($etiquetasEnfasis)];

                    // Crea un elemento de lista para el pago pendiente
                    $htmlPagos .= '<li>';
                    $htmlPagos .= '<span class="handle">';
                    $htmlPagos .= '<i class="fas fa-ellipsis-v"></i>';
                    $htmlPagos .= '<i class="fas fa-ellipsis-v"></i>';
                    $htmlPagos .= '</span>';
                    $htmlPagos .= '<div class="icheck-primary d-inline ml-2">';
                    $htmlPagos .= '<input type="checkbox" value="" name="todo' . ($index + 1) . '" id="todoCheck' . ($index + 1) . '">';
                    $htmlPagos .= '<label for="todoCheck' . ($index + 1) . '"></label>';
                    $htmlPagos .= '</div>';
                    $htmlPagos .= '<span class="text">Pagar a ' . $pago["usuario"] . ' - Bs. ' . $pago["monto"] . '</span>';
                    $htmlPagos .= '<small class="badge badge-' . $etiquetaAzar . '"><i class="far fa-clock"></i> ' . $pago["tiempo"] . '</small>';
                    $htmlPagos .= '<div class="tools">';
                    $htmlPagos .= '<i class="fas fa-edit text-primary"></i>';
                    $htmlPagos .= '<i class="fas fa-trash"></i>';
                    $htmlPagos .= '</div>';
                    $htmlPagos .= '</li>';
                }
                ?>
                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            Lista de Pagos Pendientes
                        </h3>

                        <div class="card-tools">
                            <ul class="pagination pagination-sm">
                                <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="todo-list" data-widget="todo-list">
                            <?php echo $htmlPagos; ?>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Agregar
                            elemento</button>
                    </div>
                </div>

                <!-- /.card -->
            </section>
            <!-- /.Columna izquierda -->

            <!-- Columna izquierda -->
            <section class="col-lg-6 connectedSortable">

                <!-- Lista de TAREAS -->
                <?php
                // Datos ficticios de pagos pendientes, etiquetas de énfasis y tiempos estimados
                $pagosPendientes = [
                    ["usuario" => "Christopher Williams-Smith", "monto" => 180, "tiempo" => "3 horas"],
                    ["usuario" => "Isabella Johnson-Brown", "monto" => 250, "tiempo" => "2 días"],
                    ["usuario" => "Alexander Martinez-Gonzalez", "monto" => 90, "tiempo" => "1 día"],
                    ["usuario" => "Madison Lee-Davis", "monto" => 120, "tiempo" => "4 horas"],
                    ["usuario" => "William Anderson-Clark", "monto" => 75, "tiempo" => "2 horas"],
                    ["usuario" => "Olivia Taylor-Wilson", "monto" => 110, "tiempo" => "1 día"],
                    ["usuario" => "Benjamin Moore-Jackson", "monto" => 140, "tiempo" => "3 horas"],
                    ["usuario" => "Emily Harris-Martin", "monto" => 95, "tiempo" => "1 día"],
                    ["usuario" => "James King-Baker", "monto" => 160, "tiempo" => "5 horas"],
                    ["usuario" => "Sophia Turner-Nelson", "monto" => 55, "tiempo" => "30 minutos"],
                ];


                $etiquetasEnfasis = ["danger", "info", "warning", "success", "primary", "secondary"];

                // Genera elementos HTML para mostrar pagos pendientes y etiquetas
                $htmlPagos = "";
                foreach ($pagosPendientes as $index => $pago) {
                    // Selecciona una etiqueta de énfasis al azar
                    $etiquetaAzar = $etiquetasEnfasis[array_rand($etiquetasEnfasis)];

                    // Crea un elemento de lista para el pago pendiente
                    $htmlPagos .= '<li>';
                    $htmlPagos .= '<span class="handle">';
                    $htmlPagos .= '<i class="fas fa-ellipsis-v"></i>';
                    $htmlPagos .= '<i class="fas fa-ellipsis-v"></i>';
                    $htmlPagos .= '</span>';
                    $htmlPagos .= '<div class="icheck-primary d-inline ml-2">';
                    $htmlPagos .= '<input type="checkbox" value="" name="todo' . ($index + 1) . '" id="todoCheck' . ($index + 1) . '">';
                    $htmlPagos .= '<label for="todoCheck' . ($index + 1) . '"></label>';
                    $htmlPagos .= '</div>';
                    $htmlPagos .= '<span class="text">Pagar a ' . $pago["usuario"] . ' - Bs. ' . $pago["monto"] . '</span>';
                    $htmlPagos .= '<small class="badge badge-' . $etiquetaAzar . '"><i class="far fa-clock"></i> ' . $pago["tiempo"] . '</small>';
                    $htmlPagos .= '<div class="tools">';
                    $htmlPagos .= '<i class="fas fa-edit text-primary"></i>';
                    $htmlPagos .= '<i class="fas fa-trash"></i>';
                    $htmlPagos .= '</div>';
                    $htmlPagos .= '</li>';
                }
                ?>
                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            Lista de Pagos Pendientes
                        </h3>

                        <div class="card-tools">
                            <ul class="pagination pagination-sm">
                                <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="todo-list" data-widget="todo-list">
                            <?php echo $htmlPagos; ?>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Agregar
                            elemento</button>
                    </div>
                </div>

                <!-- /.card -->
            </section>
            <!-- /.Columna izquierda -->
        </div>
        <!-- /.row (main row) -->

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->