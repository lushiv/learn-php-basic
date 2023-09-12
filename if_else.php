<?php
// Example variables
$temperature = 28;
$isRaining = true;
$isSunny = false;

// If statement
if ($temperature > 30) {
    echo "It's a hot day!\n";
}

// If-else statement
if ($temperature >= 30) {
    echo "It's a hot day!\n";
} else {
    echo "It's not too hot today.\n";
}

// If-elseif-else statement
if ($temperature >= 30) {
    echo "It's a hot day!\n";
} elseif ($temperature >= 20 && !$isRaining) {
    echo "It's a pleasant day.\n";
} elseif ($isRaining) {
    echo "It's raining, you might need an umbrella.\n";
} else {
    echo "It's a cool day.\n";
}

// Nested if-else statements
if ($isSunny) {
    if ($temperature > 30) {
        echo "It's sunny and hot!\n";
    } else {
        echo "It's sunny but not too hot.\n";
    }
} else {
    if ($isRaining) {
        echo "It's rainy and cloudy.\n";
    } else {
        echo "It's a cloudy day.\n";
    }
}
?>
