<?php 

    // continue e diferente do break e quanto o break ara a execucução o continue 
    // apenas pula, normalmente utilizaremos com if
    $n1 = 0;
    while ($n1 <= 100) {

        if ($n1 === 15 || $n1 === 30) {
            echo 'pulou essa etapa <br>';
            $n1++;
            continue;
        }
        echo $n1 . '<br>';

        $n1++;

    }

    echo '<br>';

    echo 'continuado do código!!!!';

    echo '<br>';

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $x = count($arr);

    $v = 0;

    while ($v < $x) {

        if ($arr[$v] === 30 || $arr[$v] === 40) {

            echo 'essa etapa foi pulada <br>';
            $v++;
            continue;

        }

        echo $arr[$v] . '<br>';
        $v++;

    }

