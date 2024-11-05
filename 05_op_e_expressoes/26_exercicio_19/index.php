<?php

$a = (int) "testando";

if (is_int($a)) {
    echo $a . "<br>";
}

$b = (int) 12.9;

if (is_int($b)) {
    echo $b . "<br>";
}

$c = (int) true;

if (is_int($c)) {
    echo $c . "<br>";
}

$d = (int) false;

if (is_int($d)) {
    echo $d . "<br>";
}

$e = (int) [1, 2, 3];

if (is_int($e)) {
    echo $e . "<br>";
}

$f = (int) [5, 2, 3, 12, 20];

if (is_int($f)) {
    echo $f . "<br>";
}
