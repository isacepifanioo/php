<?php

// os metodo que for para dentro da inetrface precissa ir para 
// dentro da classes para funcionar 
interface Caracteristica {

    public function fala();

    const nome = "matheus";

}
// para fazer uma herança
class Humanos implements Caracteristica {

    public $idade = 19;

    public function fala() {
        echo "aiaiaiai <br>";
    }

    public function saldacao() {
        echo "Ola " . self::nome . " tudo bem. <br>";
    }
}

$isac = new Humanos;

echo $isac->idade . "<br>";

$isac->fala();

echo $isac::nome . "<br>";

$isac->saldacao();