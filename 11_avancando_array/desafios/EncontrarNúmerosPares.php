<?php

function encontrarPares($array) {
    
    $numPares = [];
    
    foreach ($array as $num) {
        
        if ($num % 2 == 0) {
            
            array_push($numPares, $num);
            
        }
        
    }
    
    return $numPares;
    
}

$arr = range(1, 20);

$numP = encontrarPares($arr);

print_r($numP);