<?php


function verificarAcesso($idade, $autorizacao) {
    if ($idade >= 18 && $autorizacao) {
        echo "Acesso autorizado";
    } else if ($idade < 18) {
        echo "Acesso negado. Idade mínima requerida: 18 anos";
    } else {
        echo "Acesso negado. Autorização necessária";
    }
}
verificarAcesso(12, true);
