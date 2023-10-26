<?php

    // func_get_arg => retorna uma lista de arguemnto de uma função

    //func_num_args => retorna um numero de argumento de uma função


    function teste($a, $b) {

        print_r(func_get_args()); // aqui ele iria manda todos os 
        // agurmento do paremetro de uma array
        echo '<br>';
        print_r(func_num_args()); // aqui ele vai manda a quantidade de arguemnto
        // neste caso aqui e 2 
        echo '<br>';
        echo $a + $b ;


    }

    echo teste(2, 6);

    echo "<br>";
    echo "<br>";

    // desafio 2

    $lista = ["maça", "banana", "maracuja", "limão", "cenoura", "arroz", "feijão", "cafe", "liete", "pão"];

    function listaSuper($lstCom) {

        $listaVaz = [];

        echo "Você adicionou no carrinho: ";

        for ($a = 0; $a < count($lstCom); $a++) {

            if (is_string($lstCom[$a])) {
                array_push($listaVaz, $lstCom[$a]);

                if ($a + 1 == count($lstCom)) {
                    echo "$listaVaz[$a]. ";
                } else {
                    echo "$listaVaz[$a], ";
                }

            }

            

        }  
        
    }

    listaSuper($lista);


    