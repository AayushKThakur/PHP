<?php
session_start(); // Start the session

// Simulate a login form check (replace with actual login logic)
if ($_POST["username"] == "user" && $_POST["password"] == "password") {
    $_SESSION["loggedin"] = true; // Set login session variable
    echo "Login successful!";
} else {
    echo "Login failed. Check username or password.";
}

// Logout and end session (for demonstration, access with ?logout=true in URL)
if (isset($_GET["logout"])) {
    session_unset(); // Clear all session variables
    session_destroy(); // End the session
    echo "You have been logged out.";
}
?>
<!-- Explanation: A login session is simulated by checking username and password, 
 setting a session variable if successful. 
 Session ends with session_destroy() when logging out. -->