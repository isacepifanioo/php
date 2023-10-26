<?php 

    // ecopo local e uma variavel criado dentro de uma função
    // escopo global e uma variavel criado por todo o codigo

    /* isso que dizer que a variavel local so existe se eu chama
    a função ja o global eu posso chama aquela variavel em qualquer 
    lugar e vai funciona numa boa */

    $global = "hamekamehaa";

    echo 'global <br>';

    function teste() {
        $local = "genkidama";

        echo $local;
    }
    echo '<br>';

    // essa variaveil so existe dentro da função fora ela ne se que 
    // existe 

    //para chama a função e so fazer:
    teste();
    
    // aqui ele vai da true porem ele aparece um erro na tela
    // pois $local não existe, so existe apenas na função

    // if (is_null($local)) {
    //     echo "sua teoria estar ok";
    // }



    // as variaveis global não funciona dentro da função mais da
    // para chamar  obs

    $sobrenome = 'soares';
        echo '<br>';
    function sobre() {

        $sobrenome = 'epifanio';

        echo "$sobrenome 1 ";
    }
    // neste caso se eu não tiverse dado um valor dentro da
    // função ele teria dado erro pq ia dizer que não existia 
    // a variavel

    // aqui eu chamei a função
    sobre();
    echo '<br>';

    // aqui eu chamei pela variavel e ele volto se o valor normal que ele
    // era antes
    echo $sobrenome;

    // repare que chamei uma variavel global
    $terceiroNome = 'souza';

    function terc() {
        // aqui eu chamei pela global
        global $terceiroNome;
        // e mandei fazer oque eu queria
        echo "$terceiroNome. variavel global dentro da função";
    }
    // aqui eu chamei a função
    terc();

    $nome = "isac";
    echo '<br>';
    echo "$nome, nome 1";

    $nome2 =& $nome;

    echo '<br>';
    echo "$nome2, nome 2";
    
    