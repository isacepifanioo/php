<?php

    // retorn e muito impotante, pois com isso nos conseguimos atribuir o valor da função
    // em uma variiável

    function quadrado($n1) {

        return $n1 ** 2;

    }

    $resultado = quadrado(100);

    echo $resultado;

    echo "<br>";
    echo "<br>";

    function arr() {

        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        $arr2 = [];

        for ($x = 0; $x < count($arr); $x++) {
    
            if ($arr[$x] >= 7) {
                array_push($arr2, $arr[$x]);
            }

        }

        foreach ($arr2 as $ar) {

            echo $ar . '<br>';

        }

    }

    arr();


    // exercicio 

    echo "<br>";
    echo "<br>";






    
    $arr10 = [];
    for ($ab = 0; $ab < 30; $ab++) {

        array_push($arr10, $ab);

    }

    function arr10($array) {

        $novoArr = [];

        for ($abc = 0; $abc < count($array); $abc++) {

            if ($array[$abc] > 7) {
                array_push($novoArr, $array[$abc]);
            }

        }

        return $novoArr;


    }

    $novaArr100 = arr10($arr10);
    print_r($novaArr100);



   

    //echo $xa;

    
