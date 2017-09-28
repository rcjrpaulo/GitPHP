<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Ola Mundo</title>
</head>
<body>
<?php

$nome = 'Paulo Cardoso';
echo 'Nome Normal: '.$nome.'<br/>';
$uppercaseName = strtoupper($nome);
echo 'Nome Maiusculo: '.$uppercaseName.'<br/>';
$lowercaseName = strtolower($nome);
echo 'Nome Minusculo: '.$lowercaseName.'<br/>';


//ignora os 7 primeiros caracteres 'Paulo C'
$parte = substr($nome, 7);
echo $parte.'<br/>';
//ignora os 7 primeiros caracteres E os 2 ultimos
$parte = substr($nome, 7, -2);
echo $parte;

$nomepad = "PHP";
$left = str_pad($nomepad, 5, "*", STR_PAD_LEFT);
$right = str_pad($nomepad, 5, "*", STR_PAD_RIGHT);
$both = str_pad($nomepad, 5, "*", STR_PAD_BOTH);
echo "<br/>".$left;
echo"<br/>".$right;
echo "<br/>".$both;

//adiciona uma string e repete ela
$repetido = str_repeat("Paulo", 5);
echo "<br/>".$repetido;

//da o tamanho da string
$qtd_char = strlen($nome);
echo '<br/>A variavel $nome possui '.$qtd_char.' caracteres.';

/*mixed str_replace (mixed procura, mixed substituo, mixed contexto)*/
$sobrenome = "Rezende.";
//Procura por Cardoso, coloca o $sobrenome Rezende na variavel $Nome
$novonome = str_replace("Cardoso", $sobrenome, $nome);
echo '<br/>Antigo nome e: '.$nome.'<br/>Novo nome e: '.$novonome;

/*aqui informa em qual posicao da string se inicia a string Cardoso
Conta a partir do 0 a string*/
$pos = strpos($nome, "Cardoso");
echo "<br/>".$pos;



?>
</body>
</html>