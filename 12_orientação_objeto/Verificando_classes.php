<?php
 
//class_exists
//get_class_vars
//get_class_methods

class Humanos {

    public $nome = "isac";
    public $idade = 10;
    public $sexo = "masculino";

    public function fala() {
        echo "aiaiaiidhwjbi <br>";
    }

    public function ouviGet() {
        echo "isac mejqhaja <br>";
    }

}


// veirificado se a classe existe. retorna um valor boaleano
if (class_exists("Humanos")) {
    echo "sim existe <br>";
} else {
    echo "Não existe <br>";
}

// vai retorna as propriedade , ele retorna do fomato de array
print_r(get_class_vars("Humanos"));
echo "<br>";
// vai retorna as metodo, ele retorna do fomato de array
print_r(get_class_methods("Humanos"));
