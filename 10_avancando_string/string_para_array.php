<?php 

    // tranformando o string para array

    $frase = "meu nome e jose e tenho 71 anos";

    // aqui eu usei a funcao explode 
    // logo eu usei aspa e espaço para definir aonde eu quero
    // separar 
    /** neste caso eu quis que todos o espaço */
    $arrteste = explode(" ", $frase);

    print_r($arrteste); // repare que aqui ele imprimiu separadamente
    // todo nome por nome

    $arrteste2 = explode(",", $frase); // repare que aqui eu botei vírgula

    print_r($arrteste2); // logo ele coloca toda frase como um valor
    // so

    $lista = "maça, banana, maracuja, limão, pera, uva, caja, acerrola, goiaba";

    $arrLista = explode(",", $lista); // repare que eu coloquei vírgula

    print_r($arrLista); // logo ele imprimir o valor separadamente a cada virgula

    echo "<br>";
    echo "<br>";

    // exercicio 

    $automovel = "carro - navio - helicóptero - barco - jangada";;

    print_r(explode("-",$automovel));