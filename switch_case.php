<?php
// Example variable
$dayOfWeek = "Wednesday";

// Switch-case statement
switch ($dayOfWeek) {
    case "Monday":
        echo "It's the start of the workweek.\n";
        break;
    case "Tuesday":
        echo "It's the second day of the week.\n";
        break;
    case "Wednesday":
        echo "It's midweek.\n";
        break;
    case "Thursday":
        echo "It's almost the end of the workweek.\n";
        break;
    case "Friday":
        echo "It's Friday, time to celebrate!\n";
        break;
    default:
        echo "It's the weekend!\n";
        break;
}
?>
