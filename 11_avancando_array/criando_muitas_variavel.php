<?php

    // função list

    $pessoa = ['joao', 34, 'contador', 'castanho'];

    list($nome, $idade, $profissao, $olhos) = $pessoa ;

    echo "nome => " . $nome . '<br>';
    echo "idade => " . $idade . '<br>';
    echo "profissão => " . $profissao . '<br>';
    echo "olhos => " . $olhos . '<br>';

    echo 'exercicio <br>';

    $carro = ['jaguar', 3.0, 'azul', 18, 'teto sola'];

    list($marca, $modelo, $cor, $ano, $acessorio) = $carro;

    echo "A marca do carro e $marca, $modelo.0 do ano $ano $cor, com um $acessorio";