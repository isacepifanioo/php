<?php   
    // variaveis por referencia, para fazer isso vamos utiliza
    // novaVatiavel =& variaveisReferenia(existente)
    $nome = 'isac';

    echo $nome;

    $nome2 =& $nome;
    echo '<br>';
    echo $nome2;

    echo '<br>';
    $nome2 = 'matheus <br>';

    echo $nome2;

    echo $nome;

    // e importante ver que a parti domento que você muda uma 
    // variavel a outra muda tbm 