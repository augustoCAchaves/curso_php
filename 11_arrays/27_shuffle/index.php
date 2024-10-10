<?php

$arr = range(1, 20);

echo "Array original: <br>";
print_r($arr);
echo "<br><br>";

shuffle($arr);

echo "Array aleatório: <br>";
print_r($arr);
echo "<br><br>";

shuffle($arr);

echo "Array aleatório 2: <br>";
print_r($arr);
echo "<br>";
