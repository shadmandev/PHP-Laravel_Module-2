<?php
function generateFibonacciSeries($count) {
    $a = 0;
    $b = 1;
    
    for ($i = 1; $i <= $count; $i++) {
        // Print the current Fibonacci number
        echo $a . " ";
        
        // Calculate the next Fibonacci number
        $next = $a + $b;
        
        // Update the variables for the next iteration
        $a = $b;
        $b = $next;
    }
}

// Call the function to print the first 15 Fibonacci numbers
generateFibonacciSeries(15);