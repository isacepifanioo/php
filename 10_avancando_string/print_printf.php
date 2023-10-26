<?php 

    // o print funcionna igual o echo normal

    $nome = 'isac';
    $idade = 17;
    print("Meu nome e $nome <br>");

    // printf funciona igual porem eu consigo colocar os valores no final da string e manipula para
    // colocar aode fica 

    // e bom lembra que toda varivael tem um  valor se e que cada valor tem uma 
    // letra que representa o simbolo e representado por %

    /*
        %s = string
        %d = int
        %f = float
    */

    printf("meu nome e %s tenho %d <br>", $nome, $idade);

    printf("O valor que o doido ganhou foi de R$%.2f reais", 73.32);

