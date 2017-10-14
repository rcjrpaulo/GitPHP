<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Operadors02</title>
</head>
<body>
<?php
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
//teste logico pegando o maior numero, substituindo um if já fazendo atribuição.
$maior = ($n1 > $n2) ? $n1 : $n2;
echo "$maior";
?>
</body>
</html>
