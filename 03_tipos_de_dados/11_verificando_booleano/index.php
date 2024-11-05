<?php

$a = true;

if (is_bool($a)) {
  echo "É um booleano <br>";
}

if (is_bool(0)) {
  echo "Não é um booleano <br>";
}

if (is_bool(false)) {
  echo "É um booleano 2 <br>";
}

if (0.0 == false) {
  echo "0 é considerado falso.";
}
