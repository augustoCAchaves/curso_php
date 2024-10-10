<?php

class Calculadora
{
    public function somar($a, $b)
    {
        return $a + $b;
    }

    public function subtrair($a, $b)
    {
        return $a - $b;
    }

    public function multiplicar($a, $b)
    {
        return $a * $b;
    }

    public function dividir($a, $b)
    {
        return $a / $b;
    }
}

$user = new Calculadora;

echo $user->somar(2, 3) . "<br>";
echo $user->subtrair(20, 3) . "<br>";
echo $user->multiplicar(2, 3) . "<br>";
echo $user->dividir(30, 3) . "<br>";
