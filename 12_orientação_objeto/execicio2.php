<?php

class Dog {

    public $nome;
    public $cor;
    public $raca;

    public function __construct($nome, $cor, $raca) {

        $this->nome = $nome;
        $this->cor = $cor;
        $this->raca = $raca;

    }

    public function getDog(){

        echo "O nome do cachorro e $this->nome, da raça $this->raca e da cor $this->cor <br>";

    }

}

$dog1 = new Dog("zeus", "preto com branco", "pitbul");

$dog1->getDog();

$dog2 = new Dog("belinha", "laranja", "golden");

$dog2->getDog();

