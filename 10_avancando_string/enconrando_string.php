<?php

    // strpos => retorna a posição da string. caso não encontre ele reornara 
    // falso

    $frase = "o rato roeu a ropa do rei de roma";

    $acha = strpos($frase, "rei");
    $acha2 = strpos($frase, "php");


    echo $acha . '<br>';
    echo $acha2 . '<br>';

    // temos tbm  a ultima ocorrencia 
    // caso tenha duas palavras igual ele vai pega de tras para frente
    // ou seja a ultima 

    // strrpos


    $frase2 = "era uma vez uma pessoa que chamava rei matheus,chamam ele de rei";

    $ultimaP = strrpos($frase2, 'rei');

    $primeira = strpos($frase2, 'rei');
    
    echo $primeira . ' => primeiro<br>';
    echo $ultimaP . ' => segundo<br>';


