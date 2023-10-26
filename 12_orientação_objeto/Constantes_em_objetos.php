<?php

// Constantes em objetos
// as constante e a mesma coisa das variável porem não pode muda o valor da variável


class Humanos {

    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostrarConst() {
        // quando quisemos acessa a const nos utilizaremos o "self" de vez o "$this"
        echo self::PERNAS;

    }

}

$isac = new Humanos;
// de vez usa -> usaremos ::
echo $isac::OLHOS . "<br>";
$isac->mostrarConst();


