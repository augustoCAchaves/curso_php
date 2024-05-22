<?php

$arr = [1, 2, 3, "teste", 26.09, true, false, "Augusto", 19, "Manuela"];
$count = count($arr);

echo "Array inserido (de $count elementos): <br>";
print_r($arr);

$x = 0;

echo "<br><br> Dados que são strings do array inserido <br>";

while ($x < $count) {
    if (is_string($arr[$x])) {
        echo $arr[$x] . " -- posição $x" . "<br>";
    }

    $x++;
}
