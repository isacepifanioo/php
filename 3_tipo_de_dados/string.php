<?php

    // as string são representados como aspa 
    // temos aspa simples e aspa dupla, as aspa dupla permite 
    // escrever variaveis dentro

    echo "isac mdlawk knaoiwb kk awjda";
    echo "<br>";
    echo 'nda ikwbjdha nbw da jabdqb';
    echo "<br>";

    $nome = "isac";
    $idade = 18;
    // repare que eu coloquei variaveis dentro da aspa
    echo "meu nome e $nome tenho $idade";
    echo "<br>";

    // aqui eu fiz a mesma coisa de cima porem com aspa normal
    echo 'meu nome e $nome tenho $idade';

    // chacando se e string
    // para isso vamos utiliza is_string()
    echo "<br>";
    $string = "isac";
    $numero = 14;

    if (is_string($string)) {
        echo "$string e uma função"; // aqui e true
    }
    echo "<br>";
    
    if (is_string($numero)) {
        echo "$string e uma função"; // aqui e false
    }

    