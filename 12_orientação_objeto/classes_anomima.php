<?php

$pessoa = new class(){

    public $nome = "isac";

    public function fala(){
        echo "Ola mundo <br>";
    }

};

echo $pessoa->nome . "<br>";
$pessoa->fala();

$pessoa->nome = "joao";
echo $pessoa->nome . "<br>";

