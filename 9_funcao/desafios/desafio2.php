<?php

    // PRECISO COMPRIR 
    // localização 9 atividade 6 
    // CONTAGEM DE VOGAIS

    
    function countVowels($palavra) {
        $cont = 0;
        for ($i = 0; $i < strlen($palavra); $i++) {

            $char = $palavra[$i];
            
            if (in_array($char, ["a", "e", "i", "o", "u"])) {
                $cont++;
            }

        }

       return $cont;

    }

    $vogC = countVowels("emanuel");

    echo $vogC;
    

    
   
 