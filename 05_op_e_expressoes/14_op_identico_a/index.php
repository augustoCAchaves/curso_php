<?php

$a = 5;
$b = "5";

if ($a == $b) {
    echo "A e B possuem o mesmo valor <br>";
}

if ($a === $b) {
    echo "A e B são do mesmo tipo e possuem o mesmo valor <br>";
} else {
    echo "A e B são de tipos diferentes ou possuem valores diferentes<br>";
}
