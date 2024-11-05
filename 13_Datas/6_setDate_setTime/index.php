<?php

$data = new DateTime();

print_r($data);
echo "<br>";

$data->setDate(2004, 02, 29);

print_r($data);
echo "<br>";

$data->setTime(22, 45, 12);

print_r($data);
echo "<br>";

echo $data->format('d/m/y') . "<br>";
