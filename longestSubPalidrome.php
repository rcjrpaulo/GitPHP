<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Ola Mundo</title>
</head>
<body>
<?php

function longestSubPalindrome($texto){
    $maiorpalindrome = "";

    $texto_reverso = strrev($texto);
    $arraytexto = explode(" ",$texto);
    $arraytexto_reverso = explode(" ",$texto_reverso);

for($i=0;$i<= strlen($arraytexto);$i++) {

    //testando se e palindrome
    if ($arraytexto[i] == $arraytexto_reverso[i]) {
        $palindrome = $arraytexto[i];
    }
    //testando se o palindrome atual e maior que o ultimo encontrado
    if (strlen($palindrome) > strlen($maiorpalindrome)) {
        $maiorpalindrome = $palindrome;
    }
                                        }

    //Pegando o i que é o inicio do maior palindrome
    $i = strpos($texto, $maiorpalindrome);
    //pegando o fim do maior palindrome
    $j = strpos($texto,$maiorpalindrome+strlen($maiorpalindrome));

    return $i;
    return $j;

}


?>
</body>
</html>