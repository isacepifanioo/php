<?php

class Cachorro {

    public $nome;

    function nomeCachorro($n) {

        $this->nome = $n;

    }

    function latir () {
        echo "au au <br>";
    }

    function latirForte() {
        return strtoupper($this->latir());
    }

}

$cachorro = new Cachorro;

echo "O nome do cachorro e:$cachorro->nome <br>";

$cachorro->nomeCachorro("urubu");

echo "O nome do cachorro e:$cachorro->nome <br>";

$cachorro->latir();
echo $cachorro->latirForte();

echo "<br>";
echo "<br>";

echo "Exercicio <br>";

class Car {

    public $nome;
    public $rodas;
    public $cor;
    public $velocidade_maxima;

    function setVelocidadeMaxima($vel) {

        $this->velocidade_maxima = $vel;

    }

    function getVelocidadeMaxima() {

        echo "A velocidade maxima e de $this->velocidade_maxima km/h <br>";

    }

}

$bmw = new Car;

$bmw->nome = "BMW";
$bmw->cor = "vermelho";
$bmw->setVelocidadeMaxima(200);

$bmw->getVelocidadeMaxima();
$bmw->setVelocidadeMaxima(250);
$bmw->getVelocidadeMaxima();
echo $bmw->cor . "<br>";
echo $bmw->nome;


