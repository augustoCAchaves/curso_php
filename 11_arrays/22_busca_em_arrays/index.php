<?php

$arr = ["banana", "maçã", "pera", "uva"];

if (in_array("banana", $arr)) {
    echo "Há o item banana no array <br>";
} else {
    echo "Não há o item banana no array <br>";
}

$p = "pera";

if (in_array($p, $arr)) {
    echo "Há o item $p no array <br>";
} else {
    echo "Não há o $p banana no array <br>";
}

if (in_array("teste", $arr)) {
    echo "Há o item teste no array <br>";
} else {
    echo "Não há o item teste no array <br>";
}
