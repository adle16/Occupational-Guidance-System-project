<?php


// Function to check if user is logged in
function check_login() {
    return isset($_SESSION['email']);
}

// Function to redirect to login page if user is not logged in
function redirect_to_login() {
    header("Location: signin.php");
    exit();
}

//Function to logout
function logout() {
    // Unset all session variables
    $_SESSION = array();
    // Destroy the session
    session_destroy();
    // Redirect to login page
    header("Location: index.php");
    exit();
}

// Check if the user is not logged in and the current page is not the login page
if(!check_login() && basename($_SERVER['PHP_SELF']) != 'home.php') {
    redirect_to_login();
}

?>
