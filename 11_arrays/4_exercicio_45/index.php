<?php

$arr  = range(10, 45);

echo "Elementos do array somados com 6:" . "<br>";

for ($i = 0; $i < count($arr); $i++) {
    $soma = $arr[$i] += 6;

    if ($soma > 30) {
        echo "$soma " . " -- Número muito alto <br>";
    } else {
        echo "$soma   <br>";
    }
}
