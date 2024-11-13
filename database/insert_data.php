<?php
include 'db_connect.php'; // Include the database connection

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO Users (username, email) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $email);

// Set parameters and execute
$username = "JohnDoe";
$email = "john@example.com";
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();
?>
<!-- Explanation: Using prepared statements with bind_param() helps prevent SQL injection. In this example, username and email are set, and the record is inserted into the Users table. -->