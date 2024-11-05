<?php

$a = (float) "testando";

if (is_float($a)) {
    echo $a . "<br>";
}

$b = (float) 12;

if (is_float($b)) {
    echo $b . "<br>";
}

$c = (float) true;

if (is_float($c)) {
    echo $c . "<br>";
}

$d = (float) false;

if (is_float($d)) {
    echo $d . "<br>";
}

$e = (float) [1, 2, 3];

if (is_float($e)) {
    echo $e . "<br>";
}

$f = (float) [5, 2, 3, 12, 20];

if (is_float($f)) {
    echo $f . "<br>";
}
