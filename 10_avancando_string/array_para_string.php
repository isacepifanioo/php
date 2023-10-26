<?php

    // para transforma uma array em uma string normal 

    $Arr = ['maça', 'banana', 'caja', 'joao'];

    $string = implode(" - ", $Arr);

    echo $string . "<br>";

    //  exercicio

    $arr2 = ["O", "PHP", "e", "muito", "legal"];

    $fraseF = implode(" ", $arr2);

    echo $fraseF;
