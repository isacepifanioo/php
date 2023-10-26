<?php

    function sumEvenNumbers($NumInt) {
        $soma = 0;    
        for ($a = 1; $a <= $NumInt; $a++) {
            
            if ($a % 2 == 0) {

                $soma += $a;
        
            }
                
        }

        return $soma;
            
    }

    $somaP = sumEvenNumbers(50);
    echo $somaP;