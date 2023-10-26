<?php

    // os valores escape e para utilizar algumas funções especiais
    // em string

    /*
        \n = quebrar linha 
        \t = tab
        \\ = colocar o proprio \
        \$ = coloca o simbolo, já que se coloca isso sozinho voce add variavel
        
    */

    header("content-type: text/plain"); 
    // aqui e uma função para simula que e texto puro

    echo "testando o escape \t tab \n";

    echo "testando o \$dola \n";

    echo "testando o proprio barra \\";