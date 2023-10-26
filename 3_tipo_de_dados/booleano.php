<?php
    // boolean e verdadeiro e falso
    // quando nos pede para imprimir o true ele vai retorna 1
    echo true;
    // mais quando e false ele não retorna nada 
    echo false;

    // alguns numero são representados por falso como
    // 0, 0.0, [], null
    echo "<br>";
    if (true) {
        echo "isso e verdadeiro";
    }
    echo "<br>";
    if (9 > 7) { // true
        echo "isso tbm verdadeiro";
    }
    echo "<br>";
    if (9 < 7) { // false
        echo "isso n e verdadeiro";
    }
    echo "<br>";
    if (false) {
        echo "isso e false";
    }

    // checando se e boolean
    // para isso vamos utlizar o is_boll

    if (is_bool(false)) {
        echo "e um boolean";
    }
    echo "<br>";

    if (is_bool(true)) {
        echo "e um boolean 2";
    }

    if (is_bool(0)) { // falso
        echo "e verdadeiro ou falso ?";
    }

    // porem comparando com == e verdadeiro
    echo "<br>";
    if (0 == false) { // true
        echo 'sim e falso';
    }