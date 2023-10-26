<?php

    $rank = [
        'matheus' => 7,
        'joao' => 4,
        'maria' => 3,
        'biaca' => 10,
        'jose' => 2,
        'isabele' => 1
    ];

    asort($rank);
    //print_r($rank);
?>

<ul>
    <? foreach($rank as $nome => $rank): ?>
        <li><?= $nome, " ", $rank?></li>
    <? endforeach; ?>
</ul>