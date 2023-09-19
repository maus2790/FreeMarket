
// Obtén la imagen de perfil y el menú desplegable
var profileImage = document.getElementById("profile-image");
var profileDropdown = document.querySelector(".profile-dropdown-content");

// Agrega un evento de clic a la imagen de perfil
profileImage.addEventListener("click", function () {
    // Alternar la visibilidad del menú desplegable
    if (profileDropdown.style.display === "flex") {
        profileDropdown.style.display = "none";
    } else {
        profileDropdown.style.display = "flex";
    }
});

// Cierra el menú desplegable si se hace clic fuera de él
window.addEventListener("click", function (event) {
    if (!event.target.matches("#profile-image")) {
        profileDropdown.style.display = "none";
    }
});
