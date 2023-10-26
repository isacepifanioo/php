<?php

    // trait e usado como classe porem ele consegui se fazer heraça com uma classe
    // sem precisa fazaer uma heraça de forma normal
    // apenas usado o "use nome_trait";


    // aqui eu criei uma trait
    trait Humanos {

        public $nome = "isac";
        public $genero = "masculino";

    }
    // aqui eu criei outra trait
    trait Caracteristica {

        public $braco = 2;
        public $perna = 2;

    }

    // aqui eu criei uma classe e usei o "use" para fazer as hierarquia
    class central{
       
        use Humanos;
        use Caracteristica;

    }


    $pessoa = new central; // repare que aqui eu fiz o new na central

    // e aqui eu eu ja posso chama de formal normal os valores que estar dentro do
    // trait
    echo $pessoa->braco . "<br>"; 
    echo $pessoa->genero . "<br>";
    echo $pessoa->nome . "<br>";