<?php 

    // static
     // vamos ver como funciona uma função normal

    function fala() {

        $a = 1;

        echo $a++; // ++ faz com que ele soma o valor 1 vez

    }

    fala();
    echo '<br>';
    fala();
    echo '<br>';
    fala();
    echo '<br>';
    echo 'static abaixo |';
    echo '<br>';
    // agora vamos utilizar a static 

    function fala2() {

        static $b = 1; // static 

        echo $b++;

    }

    fala2(); // 1
    echo '<br>';
    fala2(); // 2
    echo '<br>';
    fala2(); // 3
    echo '<br>';
    fala2(); // 4

    // repare que com static a variavel vai muda toda vez que eu 
    // chamar aquela função ou seja eu pedi para soma mais um(++)
    // e toda vez que eu chamei ele foi mudando 
