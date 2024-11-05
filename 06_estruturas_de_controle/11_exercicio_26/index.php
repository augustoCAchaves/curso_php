<?php

$speed = 240.00;
$max_speed = 40;

if ($speed < $max_speed) {
    echo "Motorista está na velocidade correta ! <br>";
} else if ($speed == $max_speed) {
    echo "Motorista deve tomar cuidado ! <br>";
} else {
    echo "Alerta !! Multa recebida ! <br>";
}
