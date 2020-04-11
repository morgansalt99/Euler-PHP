<?php

$totalSum = 0;

foreach (range(0,1000) as $i) {

    if ($i % 3 === 0 || $i % 5 === 0){
        $totalSum =+ $i;
    }
}

echo "The total sum of all the multiples of 3 or 5 below 1000 are: " . $totalSum;
