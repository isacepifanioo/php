<?php

    // array_diff

    // ele vai ver qual e a diferença entre 2 arrays e 

    $arr1 = [1, 2, 3];
    $arr2 = [2, 4, 6];


    $diff = array_diff($arr1, $arr2);

    print_r($diff); // Array ( [0] => 1 [2] => 3 )

    $diff2 = array_diff($arr2, $arr1);

    print_r($diff2); //  Array ( [1] => 4 [2] => 6 )

