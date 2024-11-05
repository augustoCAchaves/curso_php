<?php

function calcularDesconto($valor, $categoria)
{
    switch ($categoria) {

        case "eletrônicos":
            return $valor * 0.9; // 10% de desconto
            break;
        case "vestuário":
            return $valor * 0.8;
            break;
        case "alimentos":
            return $valor * 0.95;
            break;
        default:
            return $valor;
    }
}

echo calcularDesconto(82, "eletrônicos") . "<br>";
echo calcularDesconto(165, "vestuário") . "<br>";
echo calcularDesconto(22, "alimentos") . "<br>";
echo calcularDesconto(525, "rodas") . "<br>";
