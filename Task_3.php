<?php
$limit = 10; // The number of Fibonacci numbers to generate
$a = 0;
$b = 1;

for ($i = 1; $i <= $limit; $i++) {
    $fibonacci = $a + $b;

    // Check if the Fibonacci number is greater than 100
    if ($fibonacci > 100) {
        break; // Exit the loop if it's greater than 100
    }

    // Print the Fibonacci number
    echo $fibonacci . " ";

    // Update the Fibonacci sequence variables
    $a = $b;
    $b = $fibonacci;
}

