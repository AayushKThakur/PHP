<?php
// Abstract class defining a blueprint
abstract class Shape {
    abstract public function calculateArea();
}

// Circle class implements the abstract method from Shape
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Overriding calculateArea() to implement specific behavior
    public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
}

// Rectangle class also implements the abstract method from Shape
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(5);
echo "Circle Area: " . $circle->calculateArea() . "<br>"; // Output: Circle Area: 78.5

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->calculateArea(); // Output: Rectangle Area: 24
?>
<!-- Explanation: Shape is an abstract class with an abstract calculateArea() method. Circle and Rectangle classes extend Shape and implement calculateArea() to calculate their areas. -->