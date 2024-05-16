<?php

    $str = "Augusto";
    $idade = 20;

    if (is_string($str)) {
        echo "$str é uma string 1 <br>";
    }

    if (is_string($idade)) {
        echo "$idade é uma string 2 <br>";
    }

    if (is_string("a    sd")) {
        echo "É uma string 3 <br>";
    }