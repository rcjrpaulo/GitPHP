<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>funcoes01</title>
</head>
<body>
<?php

//Funcao retornando o dia da semana
function dia_atual()
{
    $hoje = getdate();
    switch($hoje["wday"])
    {
        case 0:
            return "Domingo";
            break;
        case 1:
            return "Segunda";
            break;
        case 2:
            return "Terça";
            break;
        case 3:
            return "Quarta";
            break;
        case 4:
            return "Quinta";
            break;
        case 5:
            return "Sexta";
            break;
        case 6:
            return "Sábado";
            break;

    }
}

$dia = dia_atual();
echo 'Hoje e '.$dia;

//funcao somar basica
function somar($numA, $numB)
{
    return $numA + $numB;
}

$resultado = somar(1,2);
echo '<br/>O resultado da soma e: '.$resultado;

function par_ou_impar($num)
{
    $resto = $num % 2;
    if($resto == 0)
        return "PAR";
    else
        return "IMPAR";
}
echo '<br/>O resultado '.$resultado.' e '.$imparpar=par_ou_impar($resultado);

?>
</body>
</html>