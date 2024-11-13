<?php
// Base class with a constructor
class Animal {
    public $name;

    // Constructor to initialize name
    public function __construct($name) {
        $this->name = $name;
    }

    public function speak() {
        echo "The animal speaks.";
    }
}

// Dog class inherits from Animal
class Dog extends Animal {
    public function speak() {
        echo $this->name . " says: Woof!";
    }
}

// Create a Dog object using the inherited constructor
$dog = new Dog("Buddy");
$dog->speak(); // Output: Buddy says: Woof!
?>
<!-- Explanation: The Animal class has a constructor to initialize $name, and Dog inherits from Animal. The Dog class overrides the speak() method to provide its own message. -->