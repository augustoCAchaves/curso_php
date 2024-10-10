<?php

$mat = [
    [1, 2, 3, 4],
    [4, 5, 6, 7],
    [10, 11, 12, 13]
];

for ($i = 0; $i < count($mat); $i++) {

    $aux = $i + 1;
    echo "Array $aux: <br>";

    for ($j = 0; $j < count($mat[$i]); $j++) {
        echo $mat[$i][$j] . " ";
    }
    echo "<br> <br>";
}
