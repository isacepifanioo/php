<?php

// Ancestralidade e nada mais do que sabe se existe uma heraça
//entre o obj e a classes

// $obj instanceof nome_classe

class humano {

}

class animal {

}

class professor extends humano {

}

$isac = new humano;
$cachorro = new animal;
$bia = new professor;

if ($isac instanceof humano) {
    echo "sim, e humano //isac <br>";
} else {
    echo "não e humano //isac <br>";
}

if ($cachorro instanceof humano) {
    echo "sim, e humano //cachorro <br>";
} else {
    echo "não e humano //cachorro <br>";
}

if ($bia instanceof professor) {
    echo "sim, e professor //bia <br>";
} else {
    echo "não e professor //bia <br>";
}

if ($bia instanceof humano) {
    echo "sim, e humano //bia <br>";
} else {
    echo "não e humano //bia <br>";
}

