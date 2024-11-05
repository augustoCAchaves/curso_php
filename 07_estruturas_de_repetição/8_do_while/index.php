<?php

$i = 0;
$teste = "Augusto";

echo "Estrutura 1 <br>";
do {

    if ($i == 2) {
        echo "$teste <br>";
        $i++;
        continue;
    }

    echo "Testando do while $i <br>";

    $i++;
} while ($i < 10);


$j = 9;
$teste = "César";

echo "<br> Estrutura 2 <br>";
do {

    if ($j == 2) {
        echo "$teste <br>";
        $j--;
        continue;
    }

    echo "Testando do while $j <br>";

    $j--;
} while ($j >= 0);
