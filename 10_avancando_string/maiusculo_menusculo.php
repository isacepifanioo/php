<?php

    // strtoupper = tranforma letras em maiusculca
    // strtolower = tranforma letras em minuscula 

    echo strtoupper('aqui estar em minusculo. <br>');
    echo strtolower('AQUI ESTRA TUDO EM MAIUSCULO. <br>');

    echo '<br>';
    echo '<br>';


    // ucfirst = primeira letra da frase fica em maiusculo
    // ucwords = todas as palavra ficara com a primeira letra em maiuscula

    $fraseVar = "testando o ucfirst no php que fica dentro de uma variavel <br>";

    // ucfirst
    echo ucfirst("testando o ucfirst no php <br>");
    echo ucfirst($fraseVar);

    echo '<br>';
    echo '<br>';

    // ucwords

    echo ucwords("testando o ucwords no php <br>");
    echo ucwords($fraseVar);


    echo '<br>';
    echo '<br>';

    
    // exercicio 

    $frase = "este item estar em";
    $destaque = "promoção";

    echo ucfirst($frase) . ' ' . ucwords($destaque);


    