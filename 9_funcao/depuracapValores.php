<?php

    // depuração de valores e usando normalmente o 
    /*
        print_r()
        var_dump()

        os dois faz o mesmo serviço porem o var_dump e melhor pois passa
        mais infformação como a quantidade de valor os tipo de dados e etc
    */

    $array = [
        "isac",
        78.323,
        true,
        12, 
        [1, 3, 8]
    ];

    echo "<a>O valor print_r</a><br>";

    echo "<br>";

    print_r($array);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<a>O valor var_dump</a><br>";


    echo "<br>";

    var_dump($array);