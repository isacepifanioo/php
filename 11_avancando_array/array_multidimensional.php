<?php 

    // array multidimensional e um array que estar dentro desse array

    $arr = [
        [4, 5, 8],
        [7, 3, 1]
    ];

    print_r($arr);
    echo '<br>';

    // acessando o arr multidimensional

    print_r($arr[0][1]); // aqui eu estou acessando o numero 5
    echo '<br>';

    print_r($arr[1][2]); // aqui eu estou acessando o numero 1
    echo '<br>';

    print_r($arr[1][0]); // aqui eu estou acessando o numero 7
    echo '<br>';

    echo count($arr);
    echo '<br>';
    echo '<br>';
    

    // exercicio 

    $listArry = [
        [3, 6, 8, 2],
        [2, 7, 1, 9],
        [5, 2, 7, 3]
    ];

    foreach ($listArry as $li) {

        print_r($li);
        echo '<br>';
        foreach ($li as $l) {
            print_r($l);
            echo '<br>';
        }

    } 
