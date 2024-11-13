<?php
session_start(); // Start the session

// Set session variables
$_SESSION["username"] = "Aayush";
$_SESSION["email"] = "aayush@example.com";

// Retrieve and display session variables
echo "Username: " . $_SESSION["username"] . "<br>"; // Output: Username: Aayush
echo "Email: " . $_SESSION["email"]; // Output: Email: aayush@example.com
?>
<!-- Explanation: The session is started, and session variables for username and email are set. These variables are then retrieved and displayed. -->