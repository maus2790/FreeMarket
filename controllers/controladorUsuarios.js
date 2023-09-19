$(document).ready(function () {

    // CLIC BOTON "NUEVO"
    $("#btnNuevo").click(function () {
        opcion = 1; // Alta
        IDUsuario = null;
        $("#formulario").trigger("reset");
        // colorear la cabecera
        $(".modal-header").addClass("bg-primary");
        $(".modal-title").text("Agregar Nuevo Usuario");
        $('#modalGuardarActualizar').modal('show');
        $("#register-button").removeClass("btn-warning");
        $("#register-button").addClass("btn-primary");
        $("#register-button").text("Registrar");
        // Eliminar un mensaje de error en los términos y condiciones 
        $("#error-message").text("");
        // eliminar Color Resaltado
        $("#agreeTermsLabel").css("background", ""); // Cambia el color del texto
        $("#opcion").val(opcion);
        $("#IDUsuario").val(0); // no se pone id por que recien se creara
    });

    // CLIC BOTON "EDITAR"
    $(document).on("click", ".btnEditar", function () {
        $('#modalDetalles').modal('hide'); // por si lo invocaron del modal detalles

        opcion = 2; // Editar
        fila = $(this).closest("tr");

        // Obtener la fila de DataTable correspondiente a la fila seleccionada
        var rowData = tabla.row(fila).data(); //aunque esten escondidas

        // Ahora puedes acceder a los valores de todas las columnas, incluyendo las ocultas
        IDUsuario = rowData[0]; // capturo el ID
        Nombre = rowData[1];
        Apellido = rowData[2];
        CorreoElectronico = rowData[3];
        Telefono = rowData[4];
        Departamento = rowData[5];
        Activo = rowData[6];
        FechaRegistro = rowData[7];
        FechaUltimoInicioSesion = rowData[8];
        Direccion = rowData[9];
        Avatar = rowData[10];
        Clave = rowData[11];

        $("#opcion").val(opcion);
        $("#IDUsuario").val(IDUsuario);
        $("#nombre").val(Nombre);
        $("#apellido").val(Apellido);
        $("#correo").val(CorreoElectronico);
        $("#telefono").val(Telefono);
        $("#departamento").val(Departamento);
        // Asegúrate de tener el campo 'Avatar' en tu formulario HTML si lo necesitas.
        // $("#Avatar").val(Avatar);
        $("#direccion").val(Direccion);
        $("#password").val(Clave);
        $("#confirmPassword").val(Clave);

        // Asegúrate de tener el campo 'FechaRegistro' en tu formulario HTML si lo necesitas.
        // $("#FechaRegistro").val(FechaRegistro);
        // Asegúrate de tener el campo 'FechaUltimoInicioSesion' en tu formulario HTML si lo necesitas.
        // $("#FechaUltimoInicioSesion").val(FechaUltimoInicioSesion);
        // Asegúrate de tener el campo 'Activo' en tu formulario HTML si lo necesitas.
        // $("#Activo").val(Activo);
        // Agregar una clase de estilo para colorear la fila
        fila2 = $(this).closest("tr");
        fila2.addClass('bg-warning');
        $(".modal-title").text("Editar Usuario");
        $('#modalGuardarActualizar').modal('show');
        // colorear la cabecera
        $("#register-button").removeClass("btn-primary");
        $("#register-button").addClass("btn-warning");
        $("#register-button").text("Actualizar");
        $(".modal-header").addClass("bg-warning");
        $("#cerrar").css("color", "black");
        // Eliminar un mensaje de error en los términos y condiciones 
        $("#error-message").text("");
        // eliminar Color Resaltado
        $("#agreeTermsLabel").css("background", ""); // Cambia el color del texto
        $("#agreeTerms").prop("checked", true); // seleccionar automaticamente

    });

    // VALIDAR FORMULARIO "REGISTRO/MODIFICACIÓN" ANTES DE ENVIARLO
    $("#register-button").click(function () {
        // Obtener el valor del checkbox de términos y condiciones
        var agreeTerms = $("#agreeTerms").prop("checked");
        var IDUsuario = $.trim($('#IDUsuario').val());//obtenemos el id_usuario
        var opcion = $.trim($('#opcion').val());//obtenemos la opcion

        // Verificar si se aceptaron los términos y condiciones
        if (!agreeTerms) {
            // Mostrar un mensaje de error si los términos y condiciones no se aceptaron
            $("#error-message").text("Debes aceptar los términos y condiciones para registrarte.");
            // Resaltar la casilla de términos y condiciones
            $("#agreeTermsLabel").css("background", "yellow"); // Cambia el color del texto
            return; // Salir de la función sin realizar el registro
        }
        // Si se aceptaron los términos y condiciones, eliminar el resaltado si estaba presente
        $("#agreeTermsLabel").css("background", ""); // Restaura el color del texto

        // Obtener los valores del formulario de registro
        var nombre = $("input[name='nombre']").val();
        var apellido = $("input[name='apellido']").val();
        var telefono = $("input[name='telefono']").val();
        var departamento = $("select[name='departamento']").val();
        var correo = $("input[name='correo']").val();
        var direccion = $("input[name='direccion']").val();
        var password = $("input[name='password']").val();
        var confirmPassword = $("input[name='confirmPassword']").val();

        // Realizar una solicitud AJAX al servidor
        $.ajax({
            type: "POST",
            url: "../../controllers/validar_registro.php", // Reemplaza esto con la URL de tu script de registro
            data: {
                IDUsuario: IDUsuario,
                opcion: opcion,
                nombre: nombre,
                apellido: apellido,
                telefono: telefono,
                departamento: departamento,
                correo: correo,
                direccion: direccion,
                password: password,
                confirmPassword: confirmPassword
            },
            success: function (response) {
                if ((response == "exito") || (response == "exitoclave") || (response == "exitocorreo") || (response == "exitoclavecorreo")) {
                    enviarFormulario(opcion, response);
                } else {
                    $("#error-message").removeClass("d-none");
                    $("#error-message").text(response);


                    /* $("#error-message").addClass("d-block"); */

                }
            },
            error: function () {
                // Mostrar un mensaje de error en caso de fallo en la solicitud AJAX
                $("#error-message").removeClass("d-none");
                $("#error-message").text("Hubo un error al intentar registrarse.");
                /* $("#error-message").addClass("d-block"); */

            }
        });
    });

    // ENVIAR FORMULARIO "REGISTRO/MODIFICACIÓN"
    function enviarFormulario(opcion, dato) {
        if (opcion == 2 || opcion == 3) {
            var IDUsuario = $.trim($('#IDUsuario').val());
        } else {
            var IDUsuario = 0;
        }
        var claveCorreo = dato;
        var Nombre = $.trim($('#nombre').val());
        var Apellido = $.trim($('#apellido').val());
        var CorreoElectronico = $.trim($('#correo').val());
        var Telefono = $.trim($('#telefono').val());
        var Departamento = $.trim($('#departamento').val());
        //var Avatar = $.trim($('#Avatar').val()); // Asegúrate de agregar el campo correcto al formulario
        var Direccion = $.trim($('#direccion').val());
        var Clave = $.trim($('#password').val()); // Cambia esto por el campo correcto del formulario
        var FechaRegistro = $.trim($('#FechaRegistro').val()); // Asegúrate de agregar el campo correcto al formulario
        var FechaUltimoInicioSesion = $.trim($('#FechaUltimoInicioSesion').val()); // Asegúrate de agregar el campo correcto al formulario
        var Activo = $.trim($('#Activo').val()); // Asegúrate de agregar el campo correcto al formulario

        $.ajax({
            url: "../../models/modeloUsuarios.php",
            type: "POST",
            dataType: "json",
            data: {
                IDUsuario: IDUsuario,
                Nombre: Nombre,
                Apellido: Apellido,
                CorreoElectronico: CorreoElectronico,
                Telefono: Telefono,
                Departamento: Departamento,
                //Avatar: Avatar,
                Direccion: Direccion,
                Clave: Clave,
                FechaRegistro: FechaRegistro,
                FechaUltimoInicioSesion: FechaUltimoInicioSesion,
                Activo: Activo,
                opcion: opcion,
                claveCorreo: claveCorreo
            },
            success: function () {

                if (opcion == 1) {
                    ToastSuccess.fire({
                        text: 'El usuario: ' + Nombre + ' ha sido añadido exitosamente '
                    });
                    tabla.ajax.reload(null, true);
                    /* ajax.reload(): Recargar los datos de la tabla desde el servidor.
                        null: Selector de fila que deseas recargar. Al pasar null, se recargarán todas las filas 
                        false: El segundo parámetro es un booleano que indica si DataTables debe realizar una recarga forzada de los datos (true) o si debe usar la caché existente si está habilitada (false). En este caso, se establece en false, lo que significa que DataTables utilizará la caché existente si la tiene y solo realizará una solicitud Ajax si es necesario.
                    */
                } else {
                    ToastSuccess.fire({
                        text: 'Modificación Exitosa '
                    });
                    tabla.ajax.reload(null, true);
                }
                $('#modalGuardarActualizar').modal('hide');
            },
            error: function (xhr, status, error) {
                ToastError.fire();
            }
        });

        $('#modalGuardarActualizar').modal('hide');
    }

    // MANEJO DE CIERRE DE MODAL DE "REGISTRO/MODIFICACIÓN"
    $('#modalGuardarActualizar').on('hidden.bs.modal', function () {
        // Eliminar la clase de estilo para descolorear la fila
        fila.removeClass('bg-warning ');
        // Eliminar la clase de estilo para descolorear la cabecera
        $("#cerrar").css("color", "");
        $(".modal-header").removeClass("bg-warning");
        $(".modal-header").removeClass("bg-primary");
    });

    // CLIC BOTON "ELIMINAR"
    $(document).on("click", ".btnBorrar", function () {
        $('#modalDetalles').modal('hide'); // por si lo invocaron del modal detalles
        fila = $(this);

        // Agregar una clase de estilo para colorear la fila
        fila2 = $(this).closest("tr");
        fila2.addClass('bg-danger');
        IDUsuario = parseInt($(this).closest('tr').find('td:eq(0)').text());
        Nombre = $(this).closest('tr').find('td:eq(1)').text();
        Apellido = $(this).closest('tr').find('td:eq(2)').text();
        opcion = 3; //eliminar

        // Actualiza el contenido del span con el ID a eliminar
        $('#idE').text(IDUsuario);
        $('#nombreE').text(Nombre);
        $('#apellidoE').text(Apellido);

        // Mostrar el modal de confirmación
        $('#modalEliminar').modal('show');
        // Cuando se haga clic en el botón "Borrar" dentro del modal
        $('#confirmDelete').on('click', function () {
            $.ajax({
                url: "../../models/modeloUsuarios.php",
                type: "POST",
                datatype: "json",
                data: {
                    opcion: opcion,
                    IDUsuario: IDUsuario
                },
                success: function (response) {
                    if (response) {
                        // Elimina la fila de la tabla visualmente
                        tabla.row(fila.parents('tr')).remove().draw();
                        // Muestra una notificación Toast de éxito con SweetAlert2
                        ToastSuccess.fire({
                            text: 'El usuario: ' + Nombre + ' ha sido eliminado exitosamente '
                        });
                    } else {
                        ToastError.fire({
                            text: 'No se pudo eliminar al usario ya que se encuentra viculado a otras funciones :: Elimine al usuario de todas las funciones asignadas a el '
                        });
                    }

                },
                error: function (xhr, status, error) {
                    // Muestra una alerta de error con SweetAlert2
                    ToastError.fire();
                }
            });

            // Cerrar el modal después de la eliminación
            $('#modalEliminar').modal('hide');
        });
    });

    // MANEJO DE CIERRE DE MODAL DE "ELIMINAR"
    $('#modalEliminar').on('hidden.bs.modal', function () {
        // Eliminar la clase de estilo para descolorear la fila
        fila2.removeClass('bg-danger');
    });

});