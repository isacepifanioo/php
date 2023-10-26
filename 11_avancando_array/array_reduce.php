<?php

    // array _reduce

    // ele tem como objetivo de reduzir um array em apenas em um valor
    // tambem podemos colocar função como parametro para fazer determinada
    // ação como a soma por exemplo


    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 15];

    function soma($n1, $n2) {

        return $n1 + $n2;

    }

    $valor = array_reduce($arr, "soma");

    echo $valor . '<br>';