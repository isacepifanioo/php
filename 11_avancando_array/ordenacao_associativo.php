<?php

    // orderna um array associativo
    // asort e para orderna de forma crescente 
    // ksort e de forma alfabetica
    // arsort e para orderna de forma decrescente

    $idades = [
        'kaio' => 19,
        'pedro' => 5,
        'joao' => 14,
        'levi' => 1,
        'jeniffe' => 9
    ];


    asort($idades);

    print_r($idades);
    echo '<br>';

    $idades2 = [
        'aaio' => 19,
        'eedro' => 5,
        'doao' => 14,
        'ievi' => 1,
        'seniffe' => 9
    ];


    arsort($idades2);

    print_r($idades2);

    