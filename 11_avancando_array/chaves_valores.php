<?php

    // 

    $arrPessoa = [
        'nome' => 'Isac',
        'sobrenome' => 'Epifanio',
        'idade' => 17,
        'genero' => 'masculino',
        'estado_civil' => 'solteiro'
    ];

    print_r($arrPessoa);
    echo '<br>';
    echo '<br>';


    $chaves = array_keys($arrPessoa); 
    // desta maneira eu estou criando uma arr com valores da chave do array associativo
    print_r($chaves);

    echo '<br>';
    echo '<br>';

    $valores = array_values($arrPessoa);
    // desta maneiro eu transformo uma array associativa para um array normal
    // depois disso eu ate consigo imprimir todos os valores em um for
    print_r($valores);