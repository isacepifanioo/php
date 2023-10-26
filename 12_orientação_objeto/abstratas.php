<?php

abstract class classeAbstractc {

    public static function fala() {
        echo "ola mundo <br>";
    }

    abstract public function falaAbs();
}

class humano extends classeAbstractc {
    public function falaAbs() {
        echo "metodo abs <br>";
    }
}

// com abstract voce pode chama um metodo sem precisa chama um obj 
// porem tem que usa o static, se não da erro fatal
classeAbstractc::fala();

$n = new humano;

$n->falaAbs();