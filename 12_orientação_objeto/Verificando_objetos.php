<?php

// is_object
// get_class
// method_exists


class humano {

    public function fala() {
        echo "ola mundo";
    }

}
$teste = 0;
$obj = new humano;


// vai retorna um bolean se a variavel e um objeto
if (is_object($obj)) {
    echo "sim. esse obj existe <br>";
} else {
    echo "não. esse obj existe";
}
if (is_object($teste)) {
    echo "sim. esse obj existe";
} else {
    echo "não. esse obj existe <br>";
}

// ele retorna a classe que pertece o objeto
echo get_class($obj) . "<br>";


// ele vai retorna um bolena. se o obj tem algum metodo 
// expecifico
if (method_exists($obj, "fala")) {
    echo "sim. esse metodo existe <br>";
} else {
    echo "não. esse metodo existe <br>";
}
if (method_exists($obj, "getOutro")) {
    echo "sim. esse metodo existe <br>";
} else {
    echo "não. esse metodo existe <br>";
}
