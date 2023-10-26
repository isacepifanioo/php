<?php

class Passenger {
    
    public $name;
    public $age;
    public $seatNumber;
    
    public function __construct($name, $age, $seatNumber) {
        $this->name = $name;
        $this->age = $age;
        $this->seatNumber = $seatNumber;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function getSeatNumber(){
        return $this->seatNumber;
    } 
    
    public function setSeatNumber($seatNumber) {
        $this->seatNumber = $seatNumber;
    }
    
    
}

$passagem = new Passenger("nome", 20, 81889371);

echo $passagem->getName() . "<br>";
echo $passagem->getAge() . "<br>";
echo $passagem->getSeatNumber() . "<br>";
$passagem->setSeatNumber(82348392);
echo $passagem->getSeatNumber() . "<br>";


