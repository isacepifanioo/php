<?php

class Car {

    public $aro = 20;
    public $rodas = 4;
    public $cor = "Vermelha";

}


$ferrari = new Car;

echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";
$ferrari->cor = "azul";
echo $ferrari->cor . "<br>";


$uno = new car;
echo $uno->cor;

echo "<br>";
echo "<br>";

echo "Exercicio <br>";

class pessoa {

    public $nome;
    public $idade;

    function andar($m) {
        echo "Você andou $m metro!";
    }

}

$pessoa1 = new Pessoa;
$pessoa1->nome = "matheus";
$pessoa1->idade = 19;

echo "O nome dele e $pessoa1->nome e ele tem $pessoa1->idade anos de idade <br>";