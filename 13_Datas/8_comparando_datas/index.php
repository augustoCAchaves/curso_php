<?php

$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();
$dataD = new DateTime();

$dataB->setDate(2004, 02, 29);
$dataD->setDate(2004, 02, 29);

$dataB->setTime(01, 10, 10);
$dataD->setTime(01, 10, 10);

if ($dataA > $dataB) {
    echo "data A é maior que data B <br>";
}

if ($dataB < $dataC) {
    echo "data B é menor que data C <br>";
}

if (!($dataB > $dataA)) {
    echo "data B não é maior que a data A <br>";
}

if ($dataB == $dataD) {
    echo "data B e data D são iguais <br>";
}
