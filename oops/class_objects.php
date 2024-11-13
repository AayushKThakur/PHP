<?php
// Define a simple class called "Person"
class Person {
    // Properties
    public $name;
    public $age;

    // Member function to set properties
    public function setDetails($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Member function to display details
    public function displayDetails() {
        echo "Name: " . $this->name . ", Age: " . $this->age;
    }
}

// Creating an object of the Person class
$person = new Person();
$person->setDetails("Aayush", 25);
$person->displayDetails(); // Output: Name: Aayush, Age: 25
?>

<!-- Explanation: This file defines a Person class with properties (name, age) and methods (setDetails() and displayDetails()). We create a Person object, set its properties, and display them. -->