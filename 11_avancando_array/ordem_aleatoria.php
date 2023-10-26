<?php

    // shuffle
    // ele vai embarralha os valores de um array


    $arr = range(1, 10);

    // vddira forma
    print_r($arr);
    echo '<br>';
    
    // forma embarralhada
    shuffle($arr);
    print_r($arr);