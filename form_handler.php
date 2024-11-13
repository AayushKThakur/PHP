<!-- 
HTML Form (form.html): Simple HTML form to collect user name and email.
Sanitization: The sanitize_input() function removes spaces, backslashes, and converts special characters to prevent XSS attacks.
Validation: Checks if fields are filled, ensures the name is alphabetic, and confirms the email format.
Result Display: Shows either a success message with valid input or error messages. -->

<?php
// Initialize variables for name, email, and error messages
$name = $email = "";
$nameErr = $emailErr = "";

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data); // Remove extra spaces at the beginning and end
    $data = stripslashes($data); // Remove backslashes
    $data = htmlspecialchars($data); // Convert special characters to HTML entities
    return $data;
}
// Sanitize Function: The sanitize_input() function removes unnecessary spaces (trim()),
// backslashes (stripslashes()), and converts special characters (htmlspecialchars()).
// This prevents harmful input.

// Form Handling with POST: Checks if the form is submitted with the POST method 
// using $_SERVER["REQUEST_METHOD"].

// Check if form is submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name Validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = sanitize_input($_POST["name"]); // Sanitize name input
        // Check if name contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and whitespace allowed";
        }
    }
//     Name Validation:

// Empty Check: If the name field is empty, it sets $nameErr with an error message.
// Sanitization and Validation: The name is sanitized and then validated using preg_match(), 
// which ensures the name only contains letters and whitespace.


    // Email Validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitize_input($_POST["email"]); // Sanitize email input
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
//     Email Validation:

// Empty Check: If the email field is empty, it sets $emailErr.
// Sanitization and Format Check: The email is sanitized, then validated 
// with filter_var() to ensure it’s in the correct format.


    // Display results if there are no errors
    if ($nameErr == "" && $emailErr == "") {
        echo "<h3>Form Submitted Successfully!</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    } else {
        // Display errors if any
        echo "<h3>Errors:</h3>";
        if ($nameErr) echo "Name Error: " . $nameErr . "<br>";
        if ($emailErr) echo "Email Error: " . $emailErr . "<br>";
    }
    // Result Display:
// If both $nameErr and $emailErr are empty, the form is considered valid,
//  and it displays the sanitized values for name and email.
// If there are errors, it displays the error messages for each invalid input.
}

?>
