const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirm_password");
const message = document.getElementById("passwordMessage");

confirmPassword.addEventListener("keyup", function () {
    if (password.value !== confirmPassword.value) {
        message.textContent = "Passwords do not match";
    } else {
        message.textContent = "Passwords match";
        message.style.color = "green";
    }
});