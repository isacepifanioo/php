<?php

function ordenarNumeros($array) {
    
    sort($array);
    return $array;
    
}

$arr = range(27, 18);

$ordemCres = ordenarNumeros($arr);

print_r($ordemCres);
