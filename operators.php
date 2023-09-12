<?php
// Arithmetic operators
$number1 = 10;
$number2 = 5;
$sum = $number1 + $number2;
$difference = $number1 - $number2;
$product = $number1 * $number2;
$quotient = $number1 / $number2;
$remainder = $number1 % $number2;

echo "Arithmetic Operators:\n";
echo "Addition: $sum\n";
echo "Subtraction: $difference\n";
echo "Multiplication: $product\n";
echo "Division: $quotient\n";
echo "Modulus: $remainder\n";

// Comparison operators
$var1 = 10;
$var2 = "10";
$var3 = 5;

echo "\nComparison Operators:\n";
echo "$var1 == $var2 is " . ($var1 == $var2) . "\n"; // Equal
echo "$var1 === $var2 is " . ($var1 === $var2) . "\n"; // Identical
echo "$var1 != $var3 is " . ($var1 != $var3) . "\n"; // Not Equal
echo "$var1 !== $var3 is " . ($var1 !== $var3) . "\n"; // Not Identical
echo "$var1 > $var3 is " . ($var1 > $var3) . "\n"; // Greater than
echo "$var1 < $var3 is " . ($var1 < $var3) . "\n"; // Less than
echo "$var1 >= $var3 is " . ($var1 >= $var3) . "\n"; // Greater than or equal to
echo "$var1 <= $var3 is " . ($var1 <= $var3) . "\n"; // Less than or equal to

// Logical operators
$bool1 = true;
$bool2 = false;

echo "\nLogical Operators:\n";
echo "true && false is " . ($bool1 && $bool2) . "\n"; // Logical AND
echo "true || false is " . ($bool1 || $bool2) . "\n"; // Logical OR
echo "!true is " . (!$bool1) . "\n"; // Logical NOT

// Assignment operators
$x = 5;
$y = 10;

echo "\nAssignment Operators:\n";
$x += $y; // Equivalent to $x = $x + $y;
echo "x += y is $x\n";
$x -= $y; // Equivalent to $x = $x - $y;
echo "x -= y is $x\n";
$x *= $y; // Equivalent to $x = $x * $y;
echo "x *= y is $x\n";
$x /= $y; // Equivalent to $x = $x / $y;
echo "x /= y is $x\n";

// Increment and Decrement operators
$counter = 5;

echo "\nIncrement and Decrement Operators:\n";
$counter++; // Increment
echo "counter++ is $counter\n";
$counter--; // Decrement
echo "counter-- is $counter\n";

// Concatenation operator
$firstName = "John";
$lastName = "Doe";

echo "\nConcatenation Operator:\n";
$fullName = $firstName . " " . $lastName;
echo "Full Name: $fullName\n";

// Ternary operator
$age = 25;
$isAdult = ($age >= 18) ? "Yes" : "No";

echo "\nTernary Operator:\n";
echo "Is the person an adult? $isAdult\n";
?>
