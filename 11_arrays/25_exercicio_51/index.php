<?php

$ranking = [
    'Augusto' => 68,
    'André' => 79,
    'Manuela' => 55,
    'Camargo' => 91,
    'Felipe' => 21
];

arsort($ranking);

?>

<h1>RANKING CLASSIFICADOS:</h1>

<ol>
    <?php foreach ($ranking as $name => $score): ?>
        <li><?= $name . " => " . $score ?> pontos</li>
    <?php endforeach; ?>
</ol>