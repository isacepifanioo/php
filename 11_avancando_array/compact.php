<?php


    // compact
    /*
    
    o compact ele tranforma variavel livre em array associativo

    */

    $nome = 'isac';
    $sobrenome = 'epifanio';
    $idade = 18;
    $cor = 'azul';

    $arr = compact('nome', 'sobrenome', 'idade', 'cor');

    print_r($arr);

    echo "<br>";
    echo "Exercicio <br>";

    $marca = "sansung";
    $carregado = "cabo usb type c";
    $linha = "S23";
    $memoria = "258gb";
    $memoriaRam = "8gb ram";

    $celular = compact('marca', 'carregado', 'linha', 'memoria', 'memoriaRam');

    foreach ($celular as $cll) {
        echo $cll . "<br>";
    }
