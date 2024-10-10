<?php

$pessoas = [
    'Augusto' => 20,
    'Manuela' => 21,
    'Rafael' => 12,
    'Renata' => 42
];
?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach ($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
