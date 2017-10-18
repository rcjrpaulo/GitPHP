<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Ascii&StringLenght</title>
</head>
<body>
<?php

$frase = "ABCDEFGH";

 function crip_num($n,$i){
     if($i%2==0)
     {
         $n = ord($n)+2;
     }else
     {
         $n = ord($n)+1;
     }
     return $n;
}

function criptografar(&$frase)
{
    $array = str_split($frase);
    for ($i = 0; $i < sizeof($array); $i++) {
        $palavra[$i] = chr(crip_num($array[$i],$i));
    }
    $frase = implode("",$palavra);
}
function decrip_num($n,$i){
    if($i%2==0)
    {
        $n = ord($n)-2;
    }else
    {
        $n = ord($n)-1;
    }
    return $n;
}
function descriptografar(&$frase)
{
    $array = str_split($frase);
    for ($i = 0; $i < sizeof($array); $i++) {
        $palavra[$i] = chr(decrip_num($array[$i],$i));
    }
    $frase = implode("",$palavra);
}

    echo"Original : $frase<br/>";

    criptografar($frase);

    echo "Criptografada : $frase<br/>";

    descriptografar($frase);

    echo "Descriptografada : $frase<br/>";



?>
</body>
</html>