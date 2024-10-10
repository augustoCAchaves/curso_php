<?php

class Cachorro
{

    function latir()
    {
        echo "Au, au! <br>";
    }

    function andar($m)
    {
        echo "O cachorro andou $m metros! <br>";
    }
}

$pitbull = new Cachorro;

$pitbull->latir();

$pastorAlemao = new Cachorro;

$pastorAlemao->latir();

$pitbull->andar(20);
$pastorAlemao->andar(42);
