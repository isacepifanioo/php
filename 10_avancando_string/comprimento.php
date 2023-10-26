<?php

    // strlen e

    //echo strlen("isac") . "<br>"; // como pode percebe ele retorna 4 pois o comprimento e 4

   // echo strlen("matheus") . "<br>";

    // exercicio

    $rato = "O rato roeu a roupa do rei de roma";
    $soma = 0;
    for ($i = 0;$i < strlen($rato);$i++) {

        //echo $rato[$i] . "<br>";
        if ($rato[$i] == "a" || $rato[$i] == "A") {
            $soma++;
        }

    }

    echo $soma;