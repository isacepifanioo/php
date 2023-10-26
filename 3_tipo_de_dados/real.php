<?php 

    // dados real ou floats são numeros com vírgula mais como aqui
    // e ingles os e ponto
    echo 3.6;

    echo "<br>";
    // a vírgula e considerada como se fosse mil
    // por exemplo 1,100 = 1100

    echo 23,98;
    echo "<br>";

    // checando se e float
    // para isso vamos utilizar is_float()

    $NumF = 2.6;

    if (is_float($NumF)) {
        echo "o numero e verdadeiro";
    }

    echo "<br>";
    echo 1.5;
    echo "<br>";

    $nn2 = 9.5;
    echo $nn2;
    echo "<br>";

    if (is_float($nn2)) {
        echo "o numero ", $nn2, " e float";
    } else {
        echo "o numero ", $nn2, " não e float";
    }