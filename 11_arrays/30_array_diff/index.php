<?php

$arr1 = [1, 2, 3];
$arr2 = [2, 4, 6];
$arr3 = [4];

$diff = array_diff($arr1, $arr2);

print_r($diff);
echo "<br><br>";

$diff2 = array_diff($arr2, $arr1);

print_r($diff2);
echo "<br><br>";

$diff3 = array_diff($arr2, $arr1, $arr3);

print_r($diff3);
echo "<br><br>";

$diff4 = array_diff($arr1, $arr2, $arr3);

print_r($diff4);
echo "<br><br>";
