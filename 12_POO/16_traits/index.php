<?php

trait Objeto
{
    public function teste()
    {
        echo "Testando trait de objeto <br>";
    }
}

trait Testando
{
    public $y = 20;

    public function traitTeste()
    {
        echo "Esse método é da trait Testando <br>";
    }
}

class Central
{
    // Podemos utilizar os métodos da classe que foi feita a trait;
    use Objeto;
    use Testando;
}

$x = new Central;

$x->teste();
$x->traitTeste();

echo $x->y . "<br>";
