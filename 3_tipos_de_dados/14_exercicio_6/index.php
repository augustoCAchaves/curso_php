<?php

$carro = [
    'marca' => 'BMW',
    'rodas' => 4,
    'valor' => 200000,
    'teto_solar' => true,
    'blindado' => false
];

echo "Informações do carro: <br>";

$marca = $carro['marca'];
echo "A marca do carro é: $marca <br>";
$rodas = $carro['rodas'];
echo "O carro possui $rodas rodas <br>";
$valor = $carro['valor'];
echo "O carro custa $valor reais <br>";

if ($carro['teto_solar']) {
    echo "O carro possui teto solar <br>";
}

if (!$carro['blindado']) {
    echo "O carro não é blindado.";
}
