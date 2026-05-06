//  password show & hide function
function togglePassword() {
    let pass = document.getElementById("password");
    let icon = document.getElementById("eyeIcon");

    if (pass.type === "password") {
        pass.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        pass.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}

// VALIDATION email
// We use a helper function so it works for both login and signup forms
function validateEmail(event) {
    let emailField = document.getElementById("email");

    if (emailField) {
        let emailValue = emailField.value;
        if (!emailValue.includes("@")) {
            alert("Please enter a valid email address.");
            event.preventDefault(); // This stops the page from refreshing/submitting
            return false;
        }
    }
}

const loginForm = document.getElementById("loginForm");
const signupForm = document.getElementById("signupForm");

if (loginForm) {
    loginForm.addEventListener("submit", validateEmail);
}

if (signupForm) {
    signupForm.addEventListener("submit", validateEmail);
}