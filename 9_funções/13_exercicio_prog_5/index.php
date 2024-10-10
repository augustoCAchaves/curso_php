<?php

function sumEvenNumbers($num)
{
    $sum = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($i % 2 == 0) {
            $sum += $i;
        }
    }

    return $sum;
}

echo sumEvenNumbers(5);
echo "<br>";
echo sumEvenNumbers(10);
echo "<br>";
echo sumEvenNumbers(22);
echo "<br>";
echo sumEvenNumbers(55);
