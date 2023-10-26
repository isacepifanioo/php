<?php

    /*
    
    sort serve para ordena de forma crescente uma array 
    rsort serve para ordena de forma decrescente uma array 

    */

    $arr = [5, 8, 4, 6, 1, 7, 9, 2];

    sort($arr);

    print_r($arr);
    echo "<br>";

    $arr2 = [5, 8, 4, 6, 1, 7, 9, 2];

    rsort($arr2);

    print_r($arr2);