<?php
include 'db_connect.php'; // Include the database connection

// Prepare and bind
$stmt = $conn->prepare("DELETE FROM Users WHERE username = ?");
$stmt->bind_param("s", $username);

// Set parameter and execute
$username = "JohnDoe";
$stmt->execute();

echo "Record deleted successfully";

$stmt->close();
$conn->close();
?>
<!-- Explanation: This script deletes the user with the username JohnDoe from the Users table. Again, bind_param() is used to ensure safety against SQL injection. -->