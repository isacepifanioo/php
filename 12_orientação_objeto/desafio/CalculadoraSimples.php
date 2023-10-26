<?php

class Calculadora {
    
    public function somar($a, $b){
        return $a + $b;
    }
    public function subtrair($a, $b){
        return $a - $b;
    }
    public function multiplicar($a, $b){
        return $a * $b;
    }
    public function dividir($a, $b){
        return $a / $b;
    }
    
}

$valor = new Calculadora;

echo $valor->somar(5, 10) . "<br>";
echo $valor->subtrair(7, 2) . "<br>";
echo $valor->multiplicar(10, 8) . "<br>";
echo $valor->dividir(40, 4) . "<br>";