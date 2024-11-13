<?php
include 'db_connect.php'; // Include the database connection

// Prepare and bind
$stmt = $conn->prepare("UPDATE Users SET email = ? WHERE username = ?");
$stmt->bind_param("ss", $email, $username);

// Set parameters and execute
$email = "john_new@example.com";
$username = "JohnDoe";
$stmt->execute();

echo "Record updated successfully";

$stmt->close();
$conn->close();
?>
<!-- Explanation: This script updates the email of a user with the username JohnDoe. Again, bind_param() is used to prevent SQL injection. -->
