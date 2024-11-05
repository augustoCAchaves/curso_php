<?php

$nome = "Augusto";
for ($i = 0; $i < 10; $i++) {

    if ($i == 4) {
        echo $nome . "<br>";
        continue;
    }

    if ($i == 8) {
        break;
    }

    echo "Testando loop $i <br>";
}
