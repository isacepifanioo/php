<?php

function maiorElemento($array) {
        
    $maiorElemento = 0;
    
    foreach($array as $num) {
        
        if ($num > $maiorElemento){
            
            $maiorElemento = $num;
            
        }
        
    }

    return $maiorElemento;
    
}

$arr = [2, 7, 21, 2, 1, 69, 1];

$maiorValor = maiorElemento($arr);

echo $maiorValor . "<br>";

?>


