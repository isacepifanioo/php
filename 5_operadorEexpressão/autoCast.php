<?php 

    // auto Cast e uma forma que o php troca o tipo de dados 
    // por exemplo eu usso um dado interio e ele troca para string

    $n1 = 6;
    $n2 = 9;

    if (is_float($n1 / $n2)) {

        echo $n1 / $n2;
        echo '<br> sim e um float'; // repare que foi true mesmo o valor sendo inteiro

    }


    if (is_string($n1 . $n2)) {

        echo '<br> sim e um string 1'; // repare que foi true mesmo o valor sendo inteiro

    }


    if (is_string(5 . 7)) {

        echo '<br> sim e uma string 2';

    }

    // ponto e uma forma de concatenar tbm ;)

    // ex:
    echo '<br>';
    $somaOperação  = "4" * 3;

    echo $somaOperação;
    echo '<br>';
    echo gettype($somaOperação); // Inteiro (integer)

    // gettype serve para ver o tipo de dados 
    // no caso se você usar "5" * 3 sai como inteiro

    // outro exercicio
    echo '<br>';
    $soma = 5 + 5;
    $mult = 6 * 5;
    $div = 100 / 10;
    $subt = 50 - 25;

    echo $soma . '<br>';
    echo $mult . '<br>';
    echo $div . '<br>';
    echo $subt . '<br>';