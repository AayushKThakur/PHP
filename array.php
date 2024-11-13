Explanation of Key Functions Used
array_push(): Adds one or more elements to the end of an array.
array_pop(): Removes the last element of an array.
count(): Returns the number of elements in an array.
array_keys(): Returns an array of all keys in an associative array.
array_values(): Returns an array of all values in an associative array.
array_merge(): Combines two or more arrays into one.
in_array(): Checks if a value exists within an array.
sort() and rsort(): Sorts an array in ascending and descending order, respectively.
asort() and ksort(): Sorts an associative array by value and by key, respectively.
unset(): Removes a specific element from an array.
array_splice(): Removes a portion of an array and can also be used to replace elements.
<?php
// 1. Enumerated (Indexed) Array
$fruits = ["apple", "banana", "cherry"];
echo "First fruit: " . $fruits[0] . "<br>"; // Output: apple

// Adding a new element to the indexed array using array_push()
array_push($fruits, "orange"); // Adds "orange" to the end of $fruits
echo "Fruits after adding orange: " . implode(", ", $fruits) . "<br>"; // Output: apple, banana, cherry, orange

// Removing the last element from the indexed array using array_pop()
array_pop($fruits); // Removes "orange"
echo "Fruits after removing last element: " . implode(", ", $fruits) . "<br>"; // Output: apple, banana, cherry

// Counting elements in an array
echo "Total fruits: " . count($fruits) . "<br>"; // Output: 3

// 2. Associative Array
$person = array("name" => "Aayush", "age" => 21, "gender" => "male");
echo "Person's name: " . $person["name"] . "<br>"; // Output: Aayush

// Using array_keys() to get all keys in an associative array
$keys = array_keys($person);
echo "Keys in person array: " . implode(", ", $keys) . "<br>"; // Output: name, age, gender

// Using array_values() to get all values in an associative array
$values = array_values($person);
echo "Values in person array: " . implode(", ", $values) . "<br>"; // Output: Aayush, 21, male

// 3. Multidimensional Array
$students = array(
    array("Aayush", 21, "A"),
    array("Kunal", 20, "B"),
    array("Thakur", 19, "C")
);
echo "Second student name: " . $students[1][0] . "<br>"; // Output: Kunal

// Looping through a multidimensional array
foreach ($students as $student) {
    echo "Name: " . $student[0] . ", Age: " . $student[1] . ", Grade: " . $student[2] . "<br>";
}
// Output:
// Name: Aayush, Age: 21, Grade: A
// Name: Kunal, Age: 20, Grade: B
// Name: Thakur, Age: 19, Grade: C

// 4. Merging Arrays using array_merge()
$more_fruits = ["mango", "pineapple"];
$all_fruits = array_merge($fruits, $more_fruits);
echo "All fruits after merge: " . implode(", ", $all_fruits) . "<br>"; // Output: apple, banana, cherry, mango, pineapple

// 5. Checking if an element exists in an array using in_array()
if (in_array("apple", $fruits)) {
    echo "Apple is in the fruits list!<br>"; // Output: Apple is in the fruits list!
}

// 6. Sorting an Array using sort() and rsort()
sort($fruits); // Sorts $fruits in ascending order
echo "Fruits after sorting: " . implode(", ", $fruits) . "<br>"; // Output: apple, banana, cherry

rsort($fruits); // Sorts $fruits in descending order
echo "Fruits after reverse sorting: " . implode(", ", $fruits) . "<br>"; // Output: cherry, banana, apple

// 7. Associative Array Sorting using asort() and ksort()
asort($person); // Sorts $person by value in ascending order
echo "Person array after sorting by value: " . implode(", ", $person) . "<br>"; // Output order may vary based on values

ksort($person); // Sorts $person by key in ascending order
echo "Person array after sorting by key: ";
foreach ($person as $key => $value) {
    echo "$key: $value ";
} // Output: age: 21 gender: male name: Aayush (sorted by keys)

echo "<br>";

// 8. Removing Elements with unset() and array_splice()
unset($fruits[1]); // Removes the element at index 1 ("banana")
echo "Fruits after unsetting index 1: " . implode(", ", $fruits) . "<br>"; // Output: cherry, apple (if previously sorted in descending order)

array_splice($all_fruits, 1, 2); // Removes two elements starting from index 1 in $all_fruits
echo "All fruits after splicing: " . implode(", ", $all_fruits) . "<br>"; // Output may vary based on contents of $all_fruits

?>
