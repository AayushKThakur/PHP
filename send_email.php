<?php
$to = "recipient@example.com"; // Receiver's email address
$subject = "Test Email"; // Email subject
$message = "Hello, this is a test email!"; // Email body
$headers = "From: sender@example.com"; // Sender's email address

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
<!-- Explanation: The mail() function sends an email with a subject, message, and headers. It confirms successful or failed email sending. -->
