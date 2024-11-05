<?php

$x = 0;

while ($x < 10) {
    echo "X vale $x <br>";

    if ($x == 5) {
        echo "Fim do loop . <br>";
        break;
    }

    $x++;
}

echo "Saiu do loop <br>";
