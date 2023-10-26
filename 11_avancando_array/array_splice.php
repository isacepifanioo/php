<?php


    // array_splice serve para remove um valor dentro de uma array

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    print_r($arr);
    echo '<br>';
    // aqui eu apaguei o numero da posição 1 ate o 4
    array_splice($arr, 2, 4);
    print_r($arr);
    echo '<br>';
    echo '<br>';


    $comida = ['batata', 'maça', 'pera', 'feijão', 'arroz'];

    array_splice($comida, 3, 1);

    print_r($comida);