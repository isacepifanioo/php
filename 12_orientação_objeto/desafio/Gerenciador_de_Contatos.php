<?php

class Conctact {
    
    private $nome;
    private $email;
    private $phone;
    
    public function __construct($nome, $email, $phone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->phone = $phone;
    }
    
    public function getName() {
        return $this->nome;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPhone(){
        return $this->phone;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function setPhone($phone){
        $this->phone = $phone;
    }
    
}

$isac = new Conctact("isac", "isaccavalcante@gmail.com", 81889371);

echo $isac->getName() . "<br>";
echo $isac->getEmail()."<br>";
echo $isac->getPhone()."<br>";

$isac->setEmail("epifanio_isac21@gmail.com");

echo $isac->getEmail()."<br>";
$isac->setPhone(82319877);

echo $isac->getPhone()."<br>";
