<?php
// Integer
$integerVar = 42;

// Float (floating-point number)
$floatVar = 3.14;

// String
$stringVar = "Hello, PHP!";

// Boolean
$boolVar = true;

// Array
$arrayVar = [1, 2, 3, 4, 5];

// Associative Array
$assocArrayVar = [
    "name" => "John",
    "age" => 30,
    "city" => "New York",
];

// Null
$nullVar = null;

// Object
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$objectVar = new Person("Alice", 25);

// Resource (typically used for database connections, file handles, etc.)
$fileHandle = fopen("example.txt", "r");

// Displaying the values and types
echo "Integer: $integerVar (Type: " . gettype($integerVar) . ")\n";
echo "Float: $floatVar (Type: " . gettype($floatVar) . ")\n";
echo "String: $stringVar (Type: " . gettype($stringVar) . ")\n";
echo "Boolean: $boolVar (Type: " . gettype($boolVar) . ")\n";
echo "Array: ";
print_r($arrayVar);
echo " (Type: " . gettype($arrayVar) . ")\n";
echo "Associative Array: ";
print_r($assocArrayVar);
echo " (Type: " . gettype($assocArrayVar) . ")\n";
echo "Null: $nullVar (Type: " . gettype($nullVar) . ")\n";
echo "Object: " . $objectVar->name . " (Type: " . gettype($objectVar) . ")\n";
