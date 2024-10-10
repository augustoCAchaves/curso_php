<?php

$items = ["batata", "maçã", "pera", "feijão", "arroz"];

echo "Array original:" . "<br>";
print_r($items);
echo "<br>";

$itemsRemoved = array_splice($items, 2, 2);

echo "Array alterado:" . "<br>";
print_r($items);
echo "<br>";

echo "Itens removidos:" . "<br>";
print_r($itemsRemoved);
echo "<br>";
