<?php
function maximum(array $i) {


    $maximum = $i[0]; 
    foreach ($i as $ertek) {
        if ($ertek > $maximum) {
            $maximum = $ertek;
        }
    }
    return $maximum;
}


print maximum([3, 7, 2, 9, 5]); 
