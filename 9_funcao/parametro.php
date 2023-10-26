<?php

    function fala($nome, $idade) {

        echo "Ola eu sou o $nome e tenho $idade anos";

    }

    fala('isac', 17);

    echo '<br>';
    echo '<br>';

    function nPrimo($nu) {

        if (is_int($nu)) {
            if ($nu % 2 == 0) {
                echo "O numero $nu e Par <br>";
            } else {
                echo "O numero $nu e Impar <br>";
            }
        }

    }

    nPrimo(23);