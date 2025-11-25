<?php
function numSum($number) {
    $sum = 0;
    
    while ($number > 0) {
        $sum += $number % 10;   
        $number = intdiv($number, 10);
    }
    return $sum;
}

print numSum(1234);
