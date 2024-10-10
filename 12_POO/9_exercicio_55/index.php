<?php

class Carro
{

    public $marca;
    public $cor;
    public $aro;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel)
    {
        $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima()
    {
        return $this->velocidadeMaxima;
    }
}

$renegade = new Carro;

$renegade->marca = "Jeep";
$renegade->cor = "Preto";
$renegade->aro = 32;
$renegade->setVelocidadeMaxima("220");

echo "Dados do carro: <br>";

echo "Marca: $renegade->marca <br>";
echo "Cor: $renegade->cor <br>";
echo "Aro: $renegade->aro <br>";
echo "Velocidade máxima: " . $renegade->getVelocidadeMaxima() . "km/h <br>";

$renegade->setVelocidadeMaxima(245);

echo "Velocidade máxima atualizada: " . $renegade->getVelocidadeMaxima() . "km/h <br>";
