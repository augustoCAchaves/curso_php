<?php

$arr1 = [1, 2, 3];
$arr2 = [30, 40, 90];
$arr3 = [2.1, 37.98, 12.9];
$arr4 = ["asd", "as", "a"];

$arrMerge = array_merge($arr1, $arr2, $arr3, $arr4, [0, 1]);

print_r($arrMerge);
echo "<br>";
