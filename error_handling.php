<?php
// Function to divide two numbers with error handling
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

// Try and catch block to handle the exception
try {
    echo "Result: " . divide(10, 0); // This will throw an exception
} catch (Exception $e) {
    echo "Error: " . $e->getMessage(); // Output: Error: Division by zero is not allowed.
}
?>
<!-- Explanation: The divide() function throws an exception if division by zero is attempted, 
which is then caught by catch to display an error message. -->