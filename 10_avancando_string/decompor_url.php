<?php

    // para decompor uma url vamos usar um parse_url


    $url1 = "https://www.google.com";

    $decompor = parse_url($url1); // o $decompor vira array

    print_r($decompor); // [scheme] => https [host] => www.google.com
    echo '<br>';
    echo '<br>';


    $url2 = "https://www.udemy.com/course/php-do-zero-a-maestria-com-projetos-incriveis/learn/lecture/23220964#learning-tools";

    $decompor2 = parse_url($url2);

    print_r($decompor2);
    // [scheme] => https [host] => www.udemy.com [path] => /course/php-do-zero-a-maestria-com-projetos-incriveis/learn/lecture/23220964 
    // [fragment] => learning-tools