<?php

// 1
if (10 > 5) {
    echo "Entrou no if <br>";
} else if (10 > 6) {
    echo "Entrou no else if <br>";
}

// 2
if (10 == 5) {
    echo "Entrou no if 2 <br>";
} else if (10 > 6) {
    echo "Entrou no else if 2 <br>";
}

// 3
if (10 == 5) {
    echo "Entrou no if 3 <br>";
} else if (10 < 6) {
    echo "Entrou no else if 3 <br>";
} else if (11 > 1) {
    echo "Entrou no else if 3.2 <br>";
} else {
    echo "Entrou no else 3 <br>";
}

echo "<br> Trabalhando com variáveis: <br>";

$a = 10;
$b = 50;

if ($a == 1) {
    echo "Entrou no primeiro bloco de comando <br>";
} else if ($b > $a) {
    echo "Entrou no segundo bloco de comando <br>";
}