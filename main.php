<?php
// Including array and function files
include("array.php");
require("function.php"); // Using require to ensure file is included
//If the files mentioned are non-existent, then:
// The message after include() will display because PHP only issues a warning for a missing file and keeps running.
// The message after require() will not display because PHP stops the script if another-nonexistent-file.php is missing.

// Variable Scope
$globalVar = "I'm global";

function testScope() {
    global $globalVar; // Accessing global variable inside function
    echo $globalVar . "<br>"; // Output: I'm global
}
testScope();

function staticCounter() {
    static $count = 0;
    $count++;
    echo "Static count: " . $count . "<br>";
}
staticCounter(); // Output: Static count: 1
staticCounter(); // Output: Static count: 2
?>
