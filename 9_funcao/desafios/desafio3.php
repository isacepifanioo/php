<?php

    function isPrime($num) {

        if ($num <= 1) {
            return false;
        }

        if ($num == 2 || $num == 3) {
            return true ;
        }

        if ($num % 2 == 0 || $num % 3 == 0) {
            return false;
        }

        $i = 5;

        while ($i * $i <= $num) {
            if ($num % $i == 0 || $num % ($i + 2)== 0) {
                return false;
            }
            $i +=6;
        }

        return true;


    }

    $numero = 5;

    if (isPrime($numero)) {
        echo "O numero $numero e primo";
    } else {
        echo "O numero $numero não e primo";
    }