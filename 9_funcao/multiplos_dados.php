<?php

    function dados($nome, $idade) {


        $nome = "Sr " . $nome;
        $idade = 17 . " anos";


        return [$nome, $idade];

    }

    $dadosSalvo = dados("isac", 17);

    echo "Ola $dadosSalvo[0] você tem $dadosSalvo[1]";