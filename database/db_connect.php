<?php
$servername = "localhost";  // MySQL server (use 'localhost' if running locally)
$username = "root";         // MySQL username (default is 'root' for local servers)
$password = "";             // MySQL password (empty for local servers)
$database = "my_database";   // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
<!-- Explanation: Replace localhost, root, password, and my_database with your MySQL credentials. 
 This script connects to the MySQL server and selects a database. If the connection fails, an error message is displayed; otherwise, a success message is shown. -->