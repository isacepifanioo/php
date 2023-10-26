<?php

    // extract
    // com o extract podemos usa as variveis de que esta dentro do
    // array associativo

    $arr = [
        'cor' => 'azul',
        'fruta' => 'laranja',
        'remedio' => 'dipirona'
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$fruta <br>";
    echo "$remedio <br>";