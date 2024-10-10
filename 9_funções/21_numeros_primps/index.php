<?php

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

$num = 17;

if (isPrime($num)) {
    echo "$num é primo <br>";
} else {
    echo "$num não é primo <br>";
}
