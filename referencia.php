<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>operadores</title>
</head>
<body>
<?php
$a = 5;
$b = $a;
$b +=10;
echo "a = $a e b =$b";
$c = &$a;
$c +=5;
//#c recebe mesmo endereço de memória de $a e quando altera o valor de c, altera do a também.
echo "<br/>a = $a b =  $b c= $c";


?>
</body>
</html>
