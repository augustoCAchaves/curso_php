<?php

$carro = ["Jaguar", "3.0", "azul", 18, "Teto Solar", "automático"];

print_r($carro);
echo "<br>";

list($marca, $motor, $cor, $aro, $plus, $cambio) = $carro;

echo "Marca: $marca <br>";
echo "Motor: $motor <br>";
echo "Cor: $cor <br>";
echo "Aro: $aro <br>";
echo "Plus: $plus <br>";
echo "Câmbio: $cambio <br>";
