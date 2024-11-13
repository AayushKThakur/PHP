<?php
$email = "aayush@example.com";

// Validate email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email!<br>";
} else {
    echo "Invalid email!<br>";
}

$name = "<h1>Aayush</h1>";
// Sanitize a string by removing HTML tags
$sanitized_name = filter_var($name, FILTER_SANITIZE_STRING);
echo "Sanitized name: " . $sanitized_name; // Output: Aayush
?>
<!-- Explanation: FILTER_VALIDATE_EMAIL checks if an email is valid,
  while FILTER_SANITIZE_STRING removes HTML tags to prevent malicious input. -->
