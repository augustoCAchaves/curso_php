<?php

function square($x)
{
    // return $x * $x;
    // return pow($x, 2)
    return $x ** 2;
}

$z = square(4);
echo "Quadrado de 4 = $z <br>";

$z = square(6);
echo "Quadrado de 6 = $z <br>";

$z = square(12);
echo "Quadrado de 12 = $z <br>";

$z = square(16);
echo "Quadrado de 16 = $z <br>";
