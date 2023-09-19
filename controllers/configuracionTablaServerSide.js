// Sección 1: Configuración inicial
$(document).ready(function () {
    // Configuración de la tabla de datos utilizando DataTables
    tabla = $('#tabla').DataTable({
        "paging": true,
        "pageLength": 25, // Establece el número predeterminado de registros por página
        "lengthMenu": [10, 25, 50, 100, 250, 500, 1000], // Agrega 500 como una opción
        "ordering": true,
        "searching": true,
        "dom": '<"row"<"col-sm-6"l><"col-sm-6"f>>tipr',
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json"
        },
        "scrollY": "58vh",
        "scrollX": true,

        "bProcessing": true,
        "bDeferRender": true,
        "bServerSide": true,
        "sAjaxSource": "../../models/serverside/tablasServerside.php",
        "columnDefs": [{
            "targets": -1,
            "defaultContent": "<div class='wrapper text-center'><div class='btn-group btn-group-sm'><button class='btn-sm btn btn-warning  btn-sm btnEditar' data-toggle='tooltip' title='Editar'><i class='fas fa-edit'></i></button><button class='btn-sm btn btn-danger btn-sm btnBorrar' data-toggle='tooltip' title='Eliminar'><i class='fas fa-trash'></button></div></div>"
        }],
        "info": false, // Desactiva la información de registros
        "autoWidth": true,
        "tableClass": "table table-striped table-bordered",
        "order": [[0, "desc"]] // Ordena por la primera columna en orden descendente

    });

    // Sección 2: Agregar clase de resaltado al pasar el cursor sobre una fila
    $('#tabla tbody').on('mouseenter', 'tr', function () {
        $(this).addClass('fila-resaltada');
    }).on('mouseleave', 'tr', function () {
        $(this).removeClass('fila-resaltada');
    });

    // Sección 3: Aplicar estilos personalizados a los botones de paginación
    tabla.on('draw.dt', function () {
        $('.paginate_button').css({
            'padding': '0.7rem 0.2rem', // Ajusta el espacio alrededor del botón
            'font-size': '0.8rem' // Reduzca el tamaño de fuente
        });
    });

    // Sección 4: Variable para rastrear si el modal está abierto
    var modalAbierto = false;

    // Sección 5: Manejo de clics en filas de la tabla
    $('#tabla tbody').on('click', 'tr', function () {
        var lastColumnIndex = 8;//excluye la columna 8
        var target = $(event.target);

        // Verificar si el clic no ocurrió en la última columna (excluyendo botones)
        if (target.is('td') && target.index() !== lastColumnIndex) {
            if (!modalAbierto) {
                // Agregar una clase de estilo para colorear la fila
                $(this).addClass('bg-info');

                // Sección 6: Obtener los datos de la fila seleccionada
                var rowData = tabla.row(this).data();

                // Crear una tabla HTML para mostrar todos los datos de la fila
                var tableHtml = '<table class="table table-bordered">';
                for (var i = 0; i < rowData.length; i++) {
                    tableHtml += '<tr><td  style="padding: 1px 10px;"><strong>' + tabla.column(i).header().textContent + '</strong></td><td style="padding: 1px 10px;" >' + rowData[i] + '</td></tr>';
                }
                tableHtml += '</table>';

                // Sección 7: Llenar el modal con la tabla HTML de los detalles del usuario
                $('#userDetails').html(tableHtml);

                // Mostrar el modal
                $('#modalDetalles').modal('show');
                // colorear la cabecera
                $(".modal-header").addClass("bg-info");
                // Establecer que el modal está abierto
                modalAbierto = true;
            }
        }
    });

    // Sección 8: Agregar un controlador de eventos cuando se cierra el modal
    $('#modalDetalles').on('hidden.bs.modal', function () {
        // Eliminar la clase de estilo para descolorear la fila
        $('#tabla tbody tr.bg-info').removeClass('bg-info');
        // colorear la cabecera
        $(".modal-header").removeClass("bg-info");
        // Establecer que el modal está cerrado
        modalAbierto = false;
    });

    //ocultar columnas
    tabla.columns([3, 7, 9, 10, 11]).visible(false); // Oculta la segunda columna (índice 10 y 11)



});
