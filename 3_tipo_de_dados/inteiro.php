<?php

    // os numeros podem ser colocado sem aspa
    echo 18;
    echo '<br>';
    echo -91;
    echo '<br>';
    echo 74 + 91;

    // colocado numeros inteiro na variaveis 

    $n1 = 8;
    $n2 = 1;
    echo '<br>';
    echo $n1 + $n2;
    echo '<br>';
    // checando se o nuemro e inteiro
    # para checar utilizaremos is_int()

    if (is_int(5)) {
        echo 'o numero e inteiro';
    }

    if (is_int("7")) {
        echo 'se apareceu e pq e ';
    }
    echo '<br>';
    $numeroText = 9;

    if (is_int($numeroText)) {
        echo 'e verdaderio';
    }

    // so para lembrar numeros inteiro são numero sem vírgula ou seja podem ser
    // numeros negativo tbm ;)

?>