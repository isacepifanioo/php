<?php

    // AND, OR, NOT
    // AND &&
    // OR || 
    // NOT !

    // and (os dois lado precisa ser vdd)

    if (5 > 2 && 8 < 3) { // true e false
        echo ' and verdadeiro if 1 <br>';
    }

    if (5 > 2 && 8 > 2) { // true e false
        echo ' and verdadeiro if 2 <br>';
    }

    if (65 < 200 && 8 < 3) { // false e false
        echo ' and verdadeiro if 3 <br>';
    }

    // or (apenas um lado precisa ser vdd)

    if (72 < 1 || 8 > 1) { // false e true
        echo 'or verdadeiro if 1<br>';
    }

    if (7 < 1 || 2 < 1) { // false e false
        echo 'or verdadeiro if 1<br>';
    }

    // not (ele reverte o boolean se a operação for true > falso)
    // ou inverso

    if (!(5 > 2)) { // false pois 5 > 2 e vdd
        echo 'not verdadeiro if 1';
    }

    if (!(10 < 1)) { // true pois 10 < 1 e falso
        echo 'not verdadeiro if 2';
    }
