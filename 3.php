<?php

$number = 10;
$fibo = array(0, 1);

echo "$fibo[0] \n";
echo "$fibo[1] \n";

for ($i = 2; $i < $number; $i++) {


    $fibo[$i] = $fibo[$i - 1] + $fibo[$i - 2];

    if ($fibo[$i] > 100) {
        echo "fibonacci number $fibo[$i] is greater then 100, breaking the loop";
        break;
    }

    echo "$fibo[$i] \n";

}


?>