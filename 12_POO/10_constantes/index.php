<?php

class Humano
{

    public const OLHOS = 2;
    public const BRACOS = 2;
    public const DEDOS = 10;

    public function mostrarConstante()
    {
        echo self::DEDOS . "<br>";
    }
}

$augusto = new Humano;

echo $augusto::OLHOS . "<br>";

$augusto->mostrarConstante();
