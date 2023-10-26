<?php 

    // regando uma string e como se um fosse corta uma parte da palavra 
    // para uma string 

    // substr

    $frase = "meu nome e isac tenho 18 anos";

    $nome = substr($frase, 10, 5);
    $idade = substr($frase, 22, 2);

    echo $frase . '<br>';
    echo $nome . '<br>';
    echo $idade . '<br>';

    // exercicio

    $frase2 = "cade meu queijo? ele estava aqui em cima";

    $pala = substr($frase2, 9, 6);

    echo $pala;