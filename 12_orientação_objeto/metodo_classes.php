<?php

    class User {

        function fala() {

            echo "ola, eu sou um objeto <br>";

        }

        function soma($n1, $n2) {

            echo $n1 + $n2 . "<br>";

        }

    }

    $isac = new User;

    $isac->fala();

    $biaca = new User;

    $biaca->fala();

    $isac->soma(5, 9);

    $biaca->soma(2, 2);


    echo "Exercicio <br>";

    class Cachorro {

        function latir() {

            echo "au Au au <br>";

        }

        function andar($m) {

            echo "Seu cachorro caminhou $m quilometro <br>";

        }


    }

    $destruidoDeMundo = new Cachorro;

    $destruidoDeMundo->latir();
    $destruidoDeMundo->andar(10);

    $zeus = new Cachorro;
    $zeus->latir();
    $destruidoDeMundo->andar(2);
