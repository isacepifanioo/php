<?php

    // para remove tegs html usamos strip_tags

    $textHTML = "<a>primeiro paragrafo</a><div>uma div</div><a>outro paragrafo</a>";

    echo $textHTML . '<br>';

    echo strip_tags($textHTML); // aqui e texto puro sem nenhuma teg

    