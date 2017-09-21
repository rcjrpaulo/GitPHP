<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Ola Mundo</title>
</head>
<?php
$n1 = $_GET["a"];
$n2 = $_GET["b"];
echo "O primeiro numero vale $n1 e o segundo numero vale $n2 ";
echo "<br/>A soma vale ". ($n1+$n2);
echo "<br/>A multiplicacao vale ". ($n1*$n2);
echo "<br/>A divisao vale ". ($n1/$n2);
echo "<br/>O modulo vale ". ($n1%$n2);
echo "<br/>A media vale ". (($n1+$n2)/2);

?>
</html>
