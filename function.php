<?php
// Function with Argument and Return Value
function greet($name) {
    return "Hello, " . $name . "!";
}

// Calling the function
echo greet("Aayush") . "<br>"; // Output: Hello, Aayush!

// Pass by Value
function addOne($num) {
    $num++;
}
$value = 5;
addOne($value);
echo "Pass by value result: " . $value . "<br>"; // Output: 5 (unchanged)

// Pass by Reference
function addOneByReference(&$num) {
    $num++;
}
addOneByReference($value);
echo "Pass by reference result: " . $value . "<br>"; // Output: 6 (changed)

// Function with Default Parameter
function introduce($name, $age = 20) {
    return "My name is " . $name . " and I am " . $age . " years old.";
}
echo introduce("Aayush", "21") . "<br>"; // Output: My name is Aayush and I am 21 years old.
//overwriten the deafault parameter.
?>
