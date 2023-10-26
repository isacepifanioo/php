<?php

    // operador cast e uma forma de força que um valor vire um tipo de dado diferente 

    // tipo de dados: string, int, float, bool , array, object e unset

    $string = (string) 8732;

    echo gettype($string) . '<br>';

    $int = (int) "9832.232";

    echo gettype($int) . '<br>';

    $bool = (bool) 'false';

    echo gettype($bool) . '<br>';

    // exercicio: 'testando', 19.2, true e [1, 2, 3] converte tudo para interio

    $nu1 = (int) 'testando';
    echo gettype($nu1) . '1 <br>';
    echo $nu1 .'<br>';

    $nu2 = (int) 19.2;
    echo gettype($nu2) . '2<br>';
    echo $nu2 .'<br>';

    $nu3 = (int) true;
    echo gettype($nu2) . '3<br>';
    echo $nu3 .'<br>';

    $nu4 = (int) [1, 2, 3];
    echo gettype($nu4) . '4<br>';
    echo $nu4 .'<br>';





