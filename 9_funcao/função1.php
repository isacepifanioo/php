<?php

    $arr = ['isac', 'gabriel', 'bia', 'biaca'];


    echo implode(',', $arr); 
    // implode e muito bom pois ele exibir todos valores de uma 
    // variavel sem '=>' e eu posso separa ou colocar tipo
    // por virgula como eu fiz a cima 


    echo '<br>';
    echo '<br>';

    function Mult() {

        $n1 = 3;
        $n2 = 2;
        $n3 = 5;

        $mult = $n1 * ($n2 * $n3);

        echo $mult;

    }
    mult();

    echo '<br>';
    echo '<br>';


    function saldacao() {

        $nome = "isac";
        $sobrenome = "Epifanio";

        echo $nome . ' ' . $sobrenome;

    }

    saldacao();
