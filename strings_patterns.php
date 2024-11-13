<?php
$text = "Hello World";

// String length
echo "String length: " . strlen($text) . "<br>"; // Output: 11

// Convert to uppercase
echo "Uppercase: " . strtoupper($text) . "<br>"; // Output: HELLO WORLD

// Find a substring
if (strpos($text, "World") !== false) {
    echo "The word 'World' was found in the text!<br>";
}

// Pattern matching
$pattern = "/world/i"; // 'i' makes it case-insensitive
if (preg_match($pattern, $text)) {
    echo "Pattern match found!<br>";
} else {
    echo "Pattern match not found.<br>";
}
?>
<!-- Explanation: Demonstrates string functions for length and case change, as well as strpos() for finding substrings. Regular expression preg_match() checks if a pattern exists in the string. -->