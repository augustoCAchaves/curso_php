<?php

$weight = 73.8;
$height = 1.76;

$imc = $weight / ($height * $height);

echo "Peso inserido: $weight <br>";
echo "Altura inserida: $height <br>";
echo "IMC CALCULADO: $imc <br>";

if ($imc < 20) {
    echo "Estado de subpeso <br>";
} else if ($imc >= 20 && $imc <= 25) {
    echo "Estado normal <br>";
} else {
    echo "Estado de sobrepeso <br>";
}
