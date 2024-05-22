<?php

$count = 4;

while ($count < 30) {
    echo $count . "<br>";

    if ($count == 24) {
        echo "Parando o loop <br>";
        break;
    }

    $count += 2;
}
