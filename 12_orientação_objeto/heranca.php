<?php

    // extends


    class Humanos {

        public $idade = 19;

        public function fala() {
            echo "hello word <br>";
        }

        protected function falaAuto() {
            echo "RANDAPIAD falaAuto <br>";
        }

        public function exibirFalaAuto() {
            return $this->falaAuto();
        }

        private function falaBaixo() {
            echo "randapiad falaBaixo <br>";
        }

        public function exibirFalaBaixo() {
            $this->falaBaixo();
        }

    }

    class Programador extends Humanos {

        public function falaAutoNv() {
            $this->falaAuto();
        }

    }


    $hu = new Humanos;

    echo $hu->idade . "<br>";

    $isac = new Programador;

    $isac->fala();
    // usando o public
    $isac->exibirFalaAuto();

    // usando o privet
    $isac->exibirFalaBaixo();

    // usando o protected
    $isac->falaAutoNv();


