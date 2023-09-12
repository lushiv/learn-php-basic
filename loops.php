<?php
// For loop
echo "For Loop:\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i\n";
}

// While loop
echo "\nWhile Loop:\n";
$counter = 1;
while ($counter <= 5) {
    echo "Iteration $counter\n";
    $counter++;
}

// Do-while loop
echo "\nDo-While Loop:\n";
$counter = 1;
do {
    echo "Iteration $counter\n";
    $counter++;
} while ($counter <= 5);

// Foreach loop (for arrays)
echo "\nForeach Loop:\n";
$colors = ["Red", "Green", "Blue", "Yellow"];
foreach ($colors as $color) {
    echo "Color: $color\n";
}

// Nested loops (for demonstration)
echo "\nNested Loops (Multiplication Table):\n";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        $result = $i * $j;
        echo "$i x $j = $result\t";
    }
    echo "\n";
}
?>
