<?php

function teste()
{

    $a = 0;
    $a++;

    echo "$a <br>";
}

teste();
teste();
teste();

function testeStatic()
{

    static $a = 0;
    $a++;

    echo "$a <br>";
}

echo "Utilizando o 'static': <br>";

testeStatic();
testeStatic();
testeStatic();
