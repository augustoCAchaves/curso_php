<?php

$nomes = ["Augusto", "Alexandre", "William", "Daniel", "Jacson"];

echo "Array 'nomes': <br>";
print_r($nomes);
echo "<br>";

foreach ($nomes as $nome) {
    echo "O nome do índice atual é $nome <br>";

    if ($nome == "Augusto") {
        echo "Opa <br>";
    }
}
