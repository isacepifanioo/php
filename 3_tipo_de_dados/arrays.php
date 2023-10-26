<?php

    // array e uma variaveis que podemos adiciona
    // varios valores diferente dentro dele 
    // seja string, real, boolean ou inteiro

    // array
    $array = [1, "isac", True, 3.7];

    /// para indentifica tudo que estra dentro do array temos que utilizar
    // print_r()
    echo "<br>";
    print_r($array);

    // eu posso usar o "echo" porem eu tenho que determina qual a posição
    // do valor, o primeiro e 0
    echo "<br>";
    echo $array[3]; // retorno 3.7 pois esse e a terceira posição

    echo "<br>";
    print_r($array[1]); // da para fazer a mesma coisa usando o print_r


    // array associativo
    // array associativo funciona igual o array porem primeiro vem a chave
    // depois o valor, o valor sera passado por => dentro de um array

    $arrayAssoc = ['nome' => 'isac', 'idade' => 18, 'genero' => 'masculino'];

    // assim ele vai mostrar todos as chaves com os valores
    print_r($arrayAssoc);

    // podemos escolher se nos que o nome, idade, genero
    echo "<br>";
    echo $arrayAssoc['idade'];
    // importante lembrar que o nome da chave tem que estar entre chaves

    // exercicio
    echo "<h1>Exercicio</h1>";
    $pessoa = ['nome' => 'isac', 'idade' => 18, 'corCabelo' => 'preto', 'genero' => 'masculino'];

    if ($pessoa['idade'] >= 18) {
        echo 'e verdadeiro';
    } 

