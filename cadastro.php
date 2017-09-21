<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cadastro</title>
</head>
<body>
<?php
$nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
$ano = $_GET["ano"];
$idade = date("Y")- $ano;
$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[nao informado]";

echo "$nome e $sexo e sua idade e $idade";
?>
<br/> <a href="cadastro.html">Voltar</a>
</form>
</body>
</html>