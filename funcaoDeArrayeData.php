<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>funcaoarrayedata</title>
</head>
<body>
<?php

foreach (range(1,5) as $ordem)
{
    print('Ordem : '.$ordem.'<br>');
}

$array = array ('a','b','c','d','a');
//esta removendo valores duplicados no array
$unique = array_unique ($array);

foreach ($unique as $letra)
{
    print('Letra: '.$letra.'<br>');
}



//verifica se 'a' esta no array
if (in_array('a',$array))
{
    print('O valor está no array');
}
else
{
    print('Não está no array');
}

echo '<br/>';
//mostra detalhes do array
print_r($array);

//mostrando os valores do array separado por virgula, bom pra SQL
print(implode(',',$array));


echo '<br/>';

$string = 'O PHP é bacana.';
//jogando cada string de palavra dentro de cada indice do array, formando um array de string
$array = explode (' ',$string);

print_r($array);

//faz teste com data
$dia = 28;
$mes = 9;
$ano = 2017;
if (checkdate($mes,$dia,$ano))
{
    print('Data correta');
}
else
{
    print('Data incorreta');
}

?>
</body>
</html>