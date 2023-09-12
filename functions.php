<?php
// Function without parameters
function sayHello() {
    echo "Hello, World!\n";
}

sayHello();

// Function with parameters
function greetPerson($name) {
    echo "Hello, $name!\n";
}

greetPerson("John");
greetPerson("Alice");

// Function with a return value
function add($num1, $num2) {
    return $num1 + $num2;
}

$result = add(5, 3);
echo "5 + 3 = $result\n";

// Function with default parameter value
function saySomething($message = "Default Message") {
    echo "$message\n";
}

saySomething();
saySomething("Custom Message");

// Function with variable-length arguments (variadic function)
function sum(...$numbers) {
    $total = 0;
    foreach ($numbers as $num) {
        $total += $num;
    }
    return $total;
}

$totalSum = sum(1, 2, 3, 4, 5);
echo "Sum of numbers: $totalSum\n";

// Recursive function
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$factorialOf5 = factorial(5);
echo "Factorial of 5: $factorialOf5\n";
?>
