function togglePasswordVisibility() {
    var passwordField = document.getElementById("password");
    var passwordIcon = document.getElementById("show-hide-password");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        passwordIcon.className = "fa fa-eye text-primary";
    } else {
        passwordField.type = "password";
        passwordIcon.className = "fa fa-eye-slash text-primary";
    }
}
function toggleConfirmPasswordVisibility() {
    var confirmPasswordField = document.getElementById("confirmPassword");
    var IconPass = document.getElementById("show-hide-confirmPassword");

    if (confirmPasswordField.type === "password") {
        confirmPasswordField.type = "text";
        IconPass.className = "fa fa-eye text-primary";
    } else {
        confirmPasswordField.type = "password";
        IconPass.className = "fa fa-eye-slash text-primary";
    }
}

