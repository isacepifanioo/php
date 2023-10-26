<?php

    // array_keys_exist
    // isset

    $arr = [
        'nome' => 'Isac',
        'sobrenome' => 'Epifanio',
        'idade' => 17,
        'genero' => 'masculino',
        'estado_civil' => 'solteiro'
    ];

    if (array_key_exists('nome', $arr)) {

        echo 'Sim. essa chave existe! <br>';
        
    } else {

        echo 'Não. essa chave existe! <br>';

    }

    if (array_key_exists('profissão', $arr)) {

        echo 'Sim. essa chave existe! <br>';
        
    } else {

        echo 'Não. essa chave existe! <br>';

    }

    if (isset($arr['nome'])) {

        echo 'Sim. essa chave existe! isset<br>';
        
    } else {

        echo 'Não. essa chave existe! isset<br>';

    }

    if (isset($arr['profissão'])) {

        echo 'Sim. essa chave existe! isset<br>';
        
    } else {

        echo 'Não. essa chave existe! isset<br>';

    }


