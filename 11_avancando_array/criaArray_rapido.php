<?php

    // criado array rapidamete usando a função range

    
    $arr = range(1, 10);

    print_r($arr);
    echo '<br>';

    $arr2 = range(10, 1);

    print_r($arr2);
    echo '<br>';

    $arr3 = range(1, 1000, 100); // aqui no caso eu queri que começe no 1 vai ate 1000
    // pulando de 100 em 100

    print_r($arr3);
    echo '<br>';

    echo 'Exercicio <br>';
    echo '<br>';

    $Array = range(10, 45);

    foreach ($Array as $n1) {
    
        $n1 += 6;
        if ($n1 <= 30) {
            echo "$n1 <br>";
        } else {
            echo "$n1 esse numero estar muito alto <br>";
        }

    }