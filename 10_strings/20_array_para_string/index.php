<?php

$arr = ["Maçã", "Pera", "Uva", "Goiaba"];

$str = implode(", ", $arr);

echo "$str <br>";

$arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];

$str2 = implode(" <--> ", $arr2);

echo "$str2 <br>";
