<?php

$x = 1;

while ($x <= 10) {
    echo $x . "<br>";

    $x++;
}

echo "<br>Continuando código <br>";


$y = 0;

while ($y <= 10) {
    echo $y . "<br>";

    $y += 2;
}
echo "<br>Continuando código 2 <br>";

$z = 10;

while ($z > 0) {
    echo $z . "<br>";

    $z--;
}

echo "<br>Números ímpares de 10 a 1: <br>";
$a = 10;

while ($a > 0) {

    if ($a % 2 != 0) {
        echo $a . "<br>";
    }

    $a--;
}
