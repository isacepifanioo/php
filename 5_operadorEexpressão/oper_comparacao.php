<?php 

    // igualdade ==
    echo '<h3> == </h3>';
        if (7 == "7") {
            echo "e verdadeiro <br>"; // true
        }

        if (8 == 8) {
            echo "e verdadeiro 2<br>"; // true
        }

        if (7 == 4) {
            echo "e verdadeiro 3<br>"; // false
        }
        echo '<h3> === </h3>';
    // identico === (alem de o valor se igual precisa de o mesmo tipo de dados)
        if (7 === 7) {
            echo "e verdadeiro <br>"; // true
        }

        if (8 === "8") {
            echo "e verdadeiro 2<br>"; // false
        }

        if (7 === 4) { 
            echo "e verdadeiro 3<br>"; // false
        }
    // diferença != (e quando o valor e diferente)
    echo '<h3> != </h3>';
        if (7 != 7) { 
            echo "e verdadeiro <br>"; // false
        }
        if (3 != "3") { 
            echo "e verdadeiro 2<br>"; // false
        }
        if (7 != 4) { 
            echo "e verdadeiro 3<br>"; // true
        }

    // não indentico a !== (aqui e so pensa que "!" e não e == e indentico ou seja)
    // quando o valor for igual totalmente ele sera false
        echo "<h3> !== </h3>";
        if (7 !== 7) { 
            echo "e verdadeiro <br>"; // false
        }
        if (3 !== "3") { 
            echo "e verdadeiro 2<br>"; // true
        }
        if (7 !== 4) { 
            echo "e verdadeiro 3<br>"; // true
        }

        
