<?php

class Humano {}

class Animal {}

class Professor extends Humano {}

$augusto = new Humano;

if ($augusto instanceof Humano) {
    echo "Augusto é um Humano. <br>";
} else {
    echo "Augusto não é um Humano. <br>";
}

$cachorro = new Animal;

if ($cachorro instanceof Humano) {
    echo "Cachorro é um Humano. <br>";
} else {
    echo "Cachorro não é um Humano. <br>";
}

$adailton = new Professor;

if ($adailton instanceof Humano) {
    echo "Adailton é um Humano. <br>";
} else {
    echo "Adailton não é um Humano. <br>";
}

if ($adailton instanceof Professor) {
    echo "Adailton é um Professor. <br>";
} else {
    echo "Adailton não é um Professor. <br>";
}
