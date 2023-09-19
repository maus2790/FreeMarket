$(document).ready(function () {
  function makeModalDraggable(modalId) {
    var modal = $('#' + modalId);

    modal.on('hidden.bs.modal', function () {
      // Restablecer la posición del modal al centro de la página
      modal.css({ top: '', left: '' });
    });

    modal.find('.modal-header').on('mousedown', function (event) {
      var startX = event.pageX - modal.offset().left;
      var startY = event.pageY - modal.offset().top;

      $(document).on('mousemove', function (event) {
        var left = event.pageX - startX;
        var top = event.pageY - startY;

        modal.offset({ top: top, left: left });
      });
    });

    $(document).on('mouseup', function () {
      $(document).off('mousemove');
    });
  }

  // Llamar a la función para cada modal individualmente
  makeModalDraggable('modalGuardarActualizar');
  makeModalDraggable('modalEliminar');
  makeModalDraggable('modalDetalles');
});
