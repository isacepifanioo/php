<?php

    // array_merge

    $arr1 = [1, 2, 3];
    $arr2 = [4, 5 , 6];
    $arr3 = [7, 8, 9];
    $arr4 = ['casa', 'comida', 'bola'];


    $arrUnido = array_merge($arr1, $arr2, $arr3, $arr4);

    print_r($arrUnido);
    echo "<br>";