<?php

$arr = [];

for ($i = 10; $i <= 20; $i++) {

    array_push($arr, $i);
}

echo "Array criado: <br>";
print_r($arr);
$count = count($arr); // qtd de elementos do array criado

echo "<br><br> Números ímpares do array criado: <br>";
for ($i = 0; $i < $count; $i++) {
    if ($arr[$i] % 2 != 0) {
        echo $arr[$i] . "<br>";
    }
}
