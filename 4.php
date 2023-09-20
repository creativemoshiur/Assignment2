<?php

function printFibonacci($n) {
    $first = 0;
    $second = 1;
    
    echo "First $n Fibonacci number is:\n";
    
    for ($i = 1; $i <= $n; $i++) {
        echo $first . ' ';
        
        $next = $first + $second;
        
        $first = $second;
        $second = $next;
    }
}

printFibonacci(15);


?>