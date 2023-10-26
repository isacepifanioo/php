<?php

    function somaElementos($array) {

        $soma = array_sum($array);
        return $soma;

    }


    $arr = [5, 10, 25, 50];

    $somaArr = somaElementos($arr);

    echo $somaArr . "<br>";