<?php

$a = (int) "12";  // string to int 

if (is_int($a)) {
    echo "$a é um inteiro <br>";
}

if ($a === 12) {
    echo "A é idêntico a 12 <br>";
}

echo $a + 10 . "<br>";

$b = (float) "3.141569";  // string to float

if (is_float($b)) {
    echo "$b é um float <br>";
}

$c = (string) 34;

if (is_string($c)) {
    echo "$c é uma string <br>";
}
