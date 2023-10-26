<?php

    class pessoa {

        function fala() {
            echo "olá pessoa";
        }

    }

    echo "<br>";
    $pessoa = new pessoa();

    echo $pessoa->fala();

    // ver um pouco mais a frente!