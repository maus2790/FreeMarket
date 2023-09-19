// Obtener elementos del DOM
const dropdownButton = document.getElementById('dropdownButton');
const dropdownMenu = document.getElementById('dropdownMenu');
const closeButton = document.getElementById('closeButton');

// Variable para rastrear el estado del ícono
let isIconRotated = false;

// Agregar un evento de clic al botón de apertura de lista
dropdownButton.addEventListener('click', function () {
    // Alternar la clase "active" para cambiar el ícono
    this.classList.toggle('active');

    // Alternar el estado del ícono entre girado y original
    if (isIconRotated) {
        this.querySelector('i').style.transform = 'rotate(0deg)';
    } else {
        this.querySelector('i').style.transform = 'rotate(-90deg)';
    }

    isIconRotated = !isIconRotated; // Cambiar el estado del ícono

    // Verificar si la lista está oculta o visible y cambiar su estado
    if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
        dropdownMenu.style.display = 'block';
    } else {
        dropdownMenu.style.display = 'none';
    }
});

// Agregar un evento de clic al botón de cierre de lista
closeButton.addEventListener('click', function () {
    // Ocultar la lista
    dropdownMenu.style.display = 'none';

    // Restaurar la posición original del ícono
    dropdownButton.querySelector('i').style.transform = 'rotate(0deg)';
    isIconRotated = false; // Restablecer el estado del ícono
});

// Agregar un controlador de clic en el documento para cerrar el buscador al hacer clic en otra parte
document.addEventListener('click', function (event) {
    const target = event.target;
    if (target !== dropdownButton && target !== closeButton) {
        // Cerrar el buscador y restaurar el icono si no se hizo clic en ninguno de los botones
        dropdownMenu.style.display = 'none';
        dropdownButton.querySelector('i').style.transform = 'rotate(0deg)';
        isIconRotated = false;
    }
});
