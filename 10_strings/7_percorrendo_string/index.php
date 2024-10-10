<?php

$str = "Essa string é muito grande, ela possui vários caracteres";

for ($i = 0; $i < strlen($str); $i++) {
    echo $str[$i] . "<br>";
}
