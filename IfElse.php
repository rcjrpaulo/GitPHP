<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>IfElse</title>
</head>
<body>
<?php

$n1 = 1;
$n2 = 2;
$n3 = 3;

if ($n1>$n2){
    echo "O valor de $n1 e maior que $n2<br/>";
}else{
    echo "O valor de $n2 e maior que $n1<br/>";
}
if ($n2>$n1){
    echo "O valor de $n2 e maior que $n1<br/>";
}else{
    echo "O valor de $n1 e maior que $n2<br/>";
}
if ($n2>$n3){
    echo "O valor de $n2 e maior que $n3<br/>";
}else{
    echo "O valor de $n3 e maior que $n2<br/>";
}
if ($n3>$n2){
    echo "O valor de $n3 e maior que $n2<br/>";
}else{
    echo "O valor de $n2 e maior que $n3<br/>";
}
if ($n1>$n3){
    echo "O valor de $n1 e maior que $n3<br/>";
}else{
    echo "O valor de $n3 e maior que $n1<br/>";
}
if ($n3>$n1){
    echo "O valor de $n3 e maior que $n1<br/>";
}else{
    echo "O valor de $n1 e maior que $n3<br/>";
}




?>
</body>
</html>