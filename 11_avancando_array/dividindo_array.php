<?php

    // array_chunk => ele vai dividir a array 

    $arr = range(1, 20);
    // o numero 4 e quantidade de valor que vai fica dentro de uma array
    print_r(array_chunk($arr, 4));
    echo '<br>';
    echo '<br>';

    $arr2 = array_chunk($arr, 10);
    print_r($arr2[1]);