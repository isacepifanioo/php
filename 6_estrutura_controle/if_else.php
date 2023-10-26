<?php 
    // desafio 1
    $idade = 14;

    if ($idade >= 18) {
        echo 'Você e maior de idade ';
    } else {
        echo 'você e menor de idade';
    }
    echo '<br>';
    echo '<br>';
    // desafio 2

    $num1 = (int) '832';
    if (gettype($num1) == 'integer') {
        echo 'sim, esse e o numero inteiro';
    } else {
        echo 'não, esse não e um numero inteiro <br>';
    }
    
    echo '<br>';
    echo '<br>';

    $string = 'Isac';

    if (gettype($string) == 'string') {
        echo 'sim, e uma string';
    } else {
        echo 'não e uma string';
    }

    echo '<br>';
    echo '<br>';

    $valor = true;
    if (gettype($valor) == 'string') {
        echo 'sim esse valor e uma string tbm';
    } else {
        echo 'não a afirmação e falsa';
    }

    echo '<br>';
    echo '<br>';

    // desafio 3 

    $velocidade = 46;
    if ($velocidade < 40) {
        echo 'você estar na velocidade correta';
    } else if ($velocidade == 40) {
        echo "tome cuidado você estar $velocidade por hr";
    } else {
        echo 'você estar muito rapido vai toma uma multa';
    }


switch