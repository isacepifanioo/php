<?php

    // com essa função podemos corta um array uma arr

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    print_r($arr);
    echo '<br>';

    $corte = array_splice($arr, 3, 4);

    print_r($corte);
    echo '<br>';