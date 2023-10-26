<?php

    class Car {

        public $rodas = 4;
        private $pelicula;
        protected $portas = 4; // aqui functiona igual o private

        public function getPelicula() {
            return $this->pelicula = "g10";
        }

        public function getPortas() {
            return $this->portas;
        }

    }

    class Mecanico {

        public function mudaRodas($obj) {

            $obj->rodas = 10;

        }

        // isso não estar funcionado pois a pelicula se torno privado
        public function mudaPelicula($obj, $pelicula) {

            $obj->pelicula = $pelicula;

        }

    }


    $carro = new Car;

    echo $carro->rodas."<br>";

    $mec = new Mecanico;

    $mec->mudaRodas($carro);

    echo $carro->rodas ."<br>";

    // eu não posso altera e ne acessa por uma classe pq e privado
    //$mec->mudaPelicula($carro, "G29");

   // echo $carro->pelicula ."<br>";

   // podemos acessa a propridade privada apenas dentro de um metodo que estar
   // dentro da mesma classe
   echo $carro->getPelicula() ."<br>";


   echo $carro->getPortas() ."<br>";




