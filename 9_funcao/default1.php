<?php

    // default  e uma colocar uma parametro ja atribuido o valor
    // dentro do proprio parametro


    function teste($a = "teste") {

        echo "o valor do a e: $a <br>";

    }

    teste(); // valor do a e teste
    teste("isac"); // aqui o valor do a e isac 


    echo "<br>";
    echo "<br>";


    // uma pratica comum e sempre colocar os default sendo o ultimo parametro
    
    function testando($c, $b = "teste") {

        echo "o valor do b e: $b <br>";
        echo "o valor do c e: $c <br>";

    }

    //testando(); // aqui vai da um fatal erro;
    testando(20);

    // sempre colocar um default no final do parametro

    echo "<br>";
    echo "<br>";


    function defineCorCarro($cor = "Vermelho") {

        echo "O Cor do carro e: $cor <br>";

    }

    defineCorCarro();
    defineCorCarro("Azul");


