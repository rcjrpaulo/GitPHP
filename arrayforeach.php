<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Ola Mundo</title>
</head>
<body>
<?php

$a = array(2, 4, 6, "xurras");

foreach ($a as $v) {
    echo 'Mostrando o foreach varrendo o array da variavel de $v:'." $v.<br/>";
}

$carros = array("Uno", "Gol", "Supra", "Impala", "Eclipse");

foreach ($carros as $c){
    echo "Listando carros: $c <br/>";
}
//jogando valores da array dentro de uma variavel
$stringcarros = implode("", $carros);
echo "$stringcarros";

?>
</body>
</html>