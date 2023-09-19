// Sección 1: Configuración inicial

// (CONFIGURACION) ALERTA EXITOSA
var ToastSuccess = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 6000,

    icon: 'success',
    title: '<span class="custom-title text-success h5">Operación completada con éxito</span>',
    text: '',
    customClass: {
        container: 'custom-toast-container',
        popup: 'custom-toast-popup',
        header: 'custom-toast-header',
        title: 'custom-toast-title',
    }
});
// Muestra una notificación Toast de éxito con SweetAlert2
// ToastSuccess.fire({
//   text: 'El usuario: ' + username + ' a sido eliminado exitosamente '// Actualiza el texto con el dato personalizado
// });

// (CONFIGURACION) ALERTA ERROR
var ToastError = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 15000,
    icon: 'error',
    title: '<span class="custom-title text-danger h5">¡Error!</span>',
    text: 'Se ha producido un error en la operación.',
    animation: 'fade'
});
//ToastError.fire();

// (CONFIGURACION) ALERTA CONFIRMACION
var ToastWarning = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: true,
    showCancelButton: true,
    confirmButtonText: 'Sí',
    cancelButtonText: 'No',
    timer: 10000,
    icon: 'warning',
    title: '<span class="custom-title text-warning h5">¿Deseas continuar?</span>',
    text: 'Esta acción no se puede deshacer.',
});

// (CONFIGURACION) ALERTA ERROR
var ToastInfo = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 5000,
    icon: 'info',
    title: '<span class="custom-title text-danger h5">Operación cancelada, No se realizo ningun cambio.</span>',
    text: 'Se ha producido un error en la operación.',
    animation: 'fade'
});
//ToastInfo.fire();



// Usar esta notificación Toast de advertencia
// ToastWarning.fire().then((result) => {
//  if (result.isConfirmed) {
//       // El usuario hizo clic en "Sí"
//     } else if (result.isDismissed) {
//      // El usuario hizo clic en "No" o cerró la notificación
//   }
//});


$(function () {
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
    });
    $('.swalDefaultInfo').click(function () {// operacion cancelada
        Toast.fire({
            icon: 'info',
            title: 'Operación cancelada, No se realizo ningun cambio.'

        })
    });
    /*    $('.swalDefaultSuccess').click(function () {
           Toast.fire({
               icon: 'success',
               title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
           })
       });
   
       $('.swalDefaultError').click(function () {
           Toast.fire({
               icon: 'error',
               title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
           })
       });
       $('.swalDefaultWarning').click(function () {
           Toast.fire({
               icon: 'warning',
               title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
           })
       });
       $('.swalDefaultQuestion').click(function () {
           Toast.fire({
               icon: 'question',
               title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
           })
       }); */
});
