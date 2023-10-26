<?php 

    // while e como se fosse um enquanto 

    $n1 = 0;

    // aqui e um enquanto (codição)
    while ($n1 <= 10) {
        // corpo
        echo $n1 . '<br>';
        // incremento
        $n1 += 1;

    }

    // neste caso ele vai exibir ate encontra um falso
    echo "continuado o código <br>";

    $n2 = 10;

    while ($n2 >= 1) {

        echo $n2 . '<br>';
        $n2--;

    }

    echo "continuado o código <br>";

    // exercicio 

    $listaDados = [1, 5, 'isac', 'matheus', 3, 2, 'joao', true, 'lucas', false];

    $arr = count($listaDados);

    $x = 0;

    while ($x < $arr) {

        if (is_string($listaDados[$x])) {

            echo $listaDados[$x] . '<br>';

        }

        $x++;

    }
    echo "continuado o código <br>";
    // exercicio break

    $nub3 = 0;
    while ($nub3 <= 30) {

        echo $nub3 . '<br>';
        $nub3 += 2;

        if ($nub3 > 24) {
            echo "o loop parou, por que você chegou no 24";
            break;
        }

    }





