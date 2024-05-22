<?php

function verificarAcesso($idade, $autorizacao)
{

    if ($idade >= 18 && $autorizacao == true) {
        return "Acesso autorizado";
    } else if ($idade < 18) {
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } else if ($idade >= 18 && $autorizacao == false) {
        return "Acesso negado. Autorização necessária";
    }
}

echo verificarAcesso(20, true) . "<br>";
echo verificarAcesso(20, false) . "<br>";
echo verificarAcesso(16, true) . "<br>";
