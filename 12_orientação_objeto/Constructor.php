<?php

// como __construct podemos inicializa objeto como valores de propriedade unica 
// para cada objeto

class Car {

    public $porta;
    public $cor;
    public $marca;
    // aqui eu fiz cum construct e colocoquei o que eu qeuria passa como parametro
    public function __construct($porta, $cor, $marca) {

        $this->porta = $porta;
        $this->cor = $cor;
        $this->marca = $marca;

    }
}
// aqui eu criei um objeto ja passando o valores para o parametro logo direito
$BMW = new Car(4, "verde", "bmw");

echo "A marca do carro e $BMW->marca tem $BMW->porta portas e é da cor $BMW->cor <br>";

$ferrari = new Car(2, "vermelho", "ferrari");

echo "A marca do carro e $ferrari->marca tem $ferrari->porta portas e é da cor $ferrari->cor";