<?php

class Humanos {

    public $nome = "joão";
    public $idade = 38;
    public $materia = "matematica";

    public function fala() {
        return "Ola queridos alunos";
    }

}


class Professor extends Humanos {

    public $qts_materia = 1;
    
    public function fala2() {
        return "Hora do intervalo";
    }

    public function setIdade($obj) {
        $this->idade = $obj;
    }

    public function setNome($obj) {
        $this->nome = $obj;
    }

    public function setMateria($obj) {
        $this->materia = $obj;
    }

}

$pessoa = new Professor;

echo $pessoa->nome . "<br>";

echo $pessoa->idade . "<br>";

$pessoa->setIdade(20);

echo $pessoa->materia . "<br>";

$pessoa->setMateria('português');

echo $pessoa->materia . "<br>";

$pessoa->setNome('isac');

echo $pessoa->nome . "<br>";

echo $pessoa->qts_materia."<br>";