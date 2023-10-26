<?php

    // variavel, codição, imcremento

    for ($n1 = 0; $n1 <= 10; $n1++) {

        if ($n1 === 4) {
            echo "Isac <br>";
            $n1++;
            continue;
        }

        if ($n1 === 8) {
            break;
        }

        echo "testando o for $n1 <br>";;

    }

    // exercicio 

    $arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,12, 13, 14,15, 16, 17, 18, 19, 20];

    for ($x = 0; $x < count($arr1); $x++) {

        if ($arr1[$x] % 2 == 0) {

            echo $arr1[$x] . '<br>';

        }

    }

    echo "continuado o código! <br> Exercicio 2 <br>";

    $arr = [];

    for ($x = 0; $x <= 10; $x++) {

        if ($x === 11) {
            break;
        }
        array_push($arr, $x); // array_push serve para colocar valores dentro do array de forma automatic
        print_r($arr[$x]);
        echo "<br>";

    }

    echo "continuado o código! <br> Exercicio 3 <br>";

    $novoArr = [];

    for ($a = 10; $a <= 20; $a++) {

        array_push($novoArr, $a);

    }
    $n2 = 0;
    while ($n2 < count($novoArr)) {

        if ($novoArr[$n2] % 2 == 1) {
            print_r($novoArr[$n2]);
        }
        echo "<br>";
        $n2++;

    }