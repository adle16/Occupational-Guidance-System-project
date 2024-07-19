document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("signup");
    const login=document.getElementById("signin");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
    //const l1=document.getElementById("l1");
    const emailError = document.getElementById("email");
    const passwordError = document.getElementById("password");
    
    form.addEventListener("click", function(event) {
        let isValid = true;

        // Email validation
        if (!validateEmail(emailInput.value)) {
            alert("Please enter a valid email address.");
            isValid = false;
        } else {
            emailError.textContent = "";
        }

        // Password validation
        if (!validatePassword(passwordInput.value)) {
            alert("Password must be at least 6 characters long.");
            isValid = false;
        } else {
            passwordError.textContent = "";
        }

       
        if (!isValid) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    

    // Function to validate email
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Function to validate password
    function validatePassword(password) {
        return password.length >= 6;
    }
});

login.addEventListener("click", function(event) {
    let isValid = true;

    // Email validation
    if (!validateEmail(emailInput.value)) {
        alert("Please enter a valid email address.");
        isValid = false;
    } else {
        emailError.textContent = "";
    }

    // Password validation
    if (!validatePassword(passwordInput.value)) {
        alert("Password must be at least 6 characters long.");
        isValid = false;
    } else {
        passwordError.textContent = "";
    }

   
    if (!isValid) {
        event.preventDefault(); // Prevent form submission if validation fails
    }
});


function getstrt() {
    
    window.location.href = "https://forms.gle/3HCRfisKC9TTNTBYA";
   
}
// Attach the function to the button click event
document.getElementById("getstarted").addEventListener("click", getstrt);

//signin

// script.js

// Function to handle button click and redirect to another page
function login() {
    // Replace 'target-page.html' with the actual URL of the page you want to go to
    window.location.href = "signin.php";
    
}
// Attach the function to the button click event
document.getElementById("signin-google").addEventListener("click", login);

// script.js

// Function to handle button click and redirect to another page
function register() {
    // Replace 'target-page.html' with the actual URL of the page you want to go to
    window.location.href = "signup.php";
    
}

// Attach the function to the button click event
document.getElementById("signup").addEventListener("click", register);

function reg() {
    // Replace 'target-page.html' with the actual URL of the page you want to go to
    window.location.href = "index.php";
    
}

// Attach the function to the button click event
document.getElementById("l1").addEventListener("click", reg);


});



