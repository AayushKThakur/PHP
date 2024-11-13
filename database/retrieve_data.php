<?php
include 'db_connect.php'; // Include the database connection

$sql = "SELECT id, username, email FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "No records found";
}

$conn->close();
?>
<!-- Explanation: The script selects id, username, and email from the Users table. The while loop iterates over each row to display the data. -->
