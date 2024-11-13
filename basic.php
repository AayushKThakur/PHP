<?php
/*
Explanation Summary:
Syntax: <?php ... ?> opens and closes PHP code.
Data Types: Variables can hold strings, integers, floats, booleans, and arrays.
Variables: Store and reuse data with $.
Constants: Define fixed values with define().
Operators: Perform calculations and comparisons.
Control Structures: if-else for conditional logic, switch for matching cases.
Loops: for, while, do-while to repeat actions until conditions are met.
*/
?>
<?php
// 1. PHP Syntax
echo "Hello, World!"; // Output: Hello, World!
// Simple output using echo.

echo "<br>"; // Adds a line break for clarity in output.

// 2. Data Types
$name = "Aayush"; // String
$age = 21; // Integer
$price = 99.99; // Float
$is_male = true; // Boolean
$fruits = array("apple", "banana", "orange"); // Array

echo $name; // Output: Aayush
// Displaying a string variable.

echo "<br>";

// 3. Variables
$greeting = "Hello"; // Assigning a value to a variable
echo $greeting . ", " . $name . "!"; // Output: Hello, Aayush!
// Concatenating strings using variables.

echo "<br>";

// 4. Constants
define("SITE_NAME", "MyWebsite");
echo SITE_NAME; // Output: MyWebsite
// Displaying a constant value.

const PI = 3.14159;
echo PI; // Output: 3.14159
// Displaying a constant using const keyword.

echo "<br>";

// 5. Expressions and Operators
// Arithmetic Operators: +, -, *, /, % for basic calculations.
// Assignment Operator: += updates and assigns a new value to $x.
// Comparison Operators: ==, != for equality and inequality checks.
// Logical Operators: && combines two conditions (e.g., checking if a person is both an adult and employed).

// Arithmetic Operators
$x = 10;
$y = 5;
$sum = $x + $y;
echo "Sum: " . $sum; // Output: Sum: 15
// Addition

$difference = $x - $y;
echo " Difference: " . $difference; // Output: Difference: 5
// Subtraction

$product = $x * $y;
echo " Product: " . $product; // Output: Product: 50
// Multiplication

$quotient = $x / $y;
echo " Quotient: " . $quotient; // Output: Quotient: 2
// Division

$modulus = $x % $y;
echo " Modulus: " . $modulus; // Output: Modulus: 0
// Modulus gives the remainder.

echo "<br>";

// Assignment Operators
$x += 5; // Equivalent to $x = $x + 5;
echo "New x after += 5: " . $x; // Output: New x after += 5: 15
// Using += assignment operator.

echo "<br>";

// Comparison Operators
$is_equal = ($x == $y); // false, because $x is 15 and $y is 5
echo "Is x equal to y? " . ($is_equal ? "true" : "false"); // Output: false
// Comparison for equality

$is_not_equal = ($x != $y);
echo " Is x not equal to y? " . ($is_not_equal ? "true" : "false"); // Output: true
// Not equal comparison.

echo "<br>";

// Logical Operators
$is_adult = ($age >= 18);
$is_employed = true;
$eligible_for_discount = $is_adult && $is_employed;
echo "Eligible for discount? " . ($eligible_for_discount ? "Yes" : "No"); // Output: Yes
// Logical AND operation

echo "<br>";

// 6. Control Structures (If-Else)
if ($age >= 18) {
    echo "Adult"; // Output: Adult
    // Checks if age is 18 or more to determine adulthood.
} else {
    echo "Minor";
}

echo "<br>";

// 7. Switch Statement
$color = "red";
switch ($color) {
    case "red":
        echo "Stop"; // Output: Stop
        // Matches 'red' case.
        break;
    case "green":
        echo "Go";
        break;
    default:
        echo "Wait";
}

echo "<br>";

// 8. Loops (For, While, Do-While)
// For Loop
for ($i = 0; $i < 3; $i++) {
    echo "For loop iteration: $i "; // Output: For loop iteration: 0 1 2
    // Loops 3 times, displaying each iteration.
}
echo "<br>";

// While Loop
$j = 0;
while ($j < 3) {
    echo "While loop iteration: $j "; // Output: While loop iteration: 0 1 2
    $j++;
    // Continues until j is less than 3.
}
echo "<br>";

// Do-While Loop
$k = 0;
do {
    echo "Do-While iteration: $k "; // Output: Do-While iteration: 0 1 2
    $k++;
    // Executes at least once before checking condition.
} while ($k < 3);

echo "<br>";

// End of code
?>
