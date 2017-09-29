<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Ola Mundo</title>
</head>
<body>
<?php
/*variavel de teste o terceiro elemento e o começo
e o decimo o fim*/
$x = "aa elelele aaaaa";
echo "$x<br/>";
function longestSubPalindrome($texto){
    $maiorpalindrome = "";
    $ltexto = strtolower($texto);
    $texto_reverso = strrev($ltexto);
    $arraytexto = explode(" ",$texto);
    $arraytexto_reverso = explode(" ",$texto_reverso);

foreach ($arraytexto as $arraytext)
{
    foreach ($arraytexto_reverso as $arrayreverse){
        //testando se e palindrome
        if($arrayreverse == $arraytext){
            $palindrome = $arraytext;
            //testando se o palindrome atual e maior que o ultimo encontrado
            if (strlen($palindrome) > strlen($maiorpalindrome)) {
                $maiorpalindrome = $palindrome;
            }

        }
    }
}
    //Pegando o i que é o inicio do maior palindrome
    $i = strpos($ltexto, $maiorpalindrome);
    //pegando o fim do maior palindrome
    $j = strpos($ltexto,$maiorpalindrome)+strlen($maiorpalindrome);

    return array($i,$j);

}
$resultado = array(longestSubPalindrome($x));

print_r($resultado);

?>
</body>
</html>