<?php
// Using a for loop
function printEvenNumbersUsingForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

// Using a while loop
function printEvenNumbersUsingWhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

// Using a do-while loop
function printEvenNumbersUsingDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

// Call the functions to print even numbers
echo "Using for loop: ";
printEvenNumbersUsingForLoop(1, 20, 2);
echo "\n";

echo "Using while loop: ";
printEvenNumbersUsingWhileLoop(1, 20, 2);
echo "\n";

echo "Using do-while loop: ";
printEvenNumbersUsingDoWhileLoop(1, 20, 2);
echo "\n";

