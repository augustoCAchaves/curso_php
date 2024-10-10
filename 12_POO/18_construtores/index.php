<?php

class Car
{
    public $cor;
    public $marca;
    public $portas;

    function __construct($cor, $marca, $portas)
    {
        $this->cor = $cor;
        $this->marca = $marca;
        $this->portas = $portas;
    }
}

$porsche = new Car("Azul-claro", "Porsche", 2);

echo "O carro é da marca $porsche->marca, possui $porsche->portas portas e é da cor $porsche->cor <br>";

$bmw = new Car("Verde", "Bmw", 4);

echo "O carro é da marca $bmw->marca, possui $bmw->portas portas e é da cor $bmw->cor <br>";
