<?php
require_once 'classes/Rectangle.php';
require_once 'classes/Circle.php';

$rectangle = new Rectangle(10, 20);
echo "Площа трикутника: " . $rectangle->getArea() . "\n";
echo "Периметр трикутника: " . $rectangle->getPerimeter() . "\n";

$circle = new Circle(5);
echo "Площа кола " . $circle->getArea() . "\n";
echo "Периметр кола: " . $circle->getPerimeter() . "\n";