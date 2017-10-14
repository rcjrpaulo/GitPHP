

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css"/>
    <meta charset="UTF-8"/>
    <title>testando</title>
</head>
<body>
<?php
echo '<pre>';
var_dump($_POST);
print_r($_POST);
var_dump($_SERVER);
print_r($_SERVER);
echo $_SERVER["REMOTE_ADDR"];
$nome = array(
  "REMOTE_ADDR" => '127.0.0.1'
);
echo "</br>";
echo $nome["REMOTE_ADDR"];
echo "</br>";
date_default_timezone_set('America/Sao_Paulo');
$dataLocal = date('d/m/Y H:i:s', time());
echo $dataLocal;
echo "</br>";
echo date("Y-m-d\TH:i:s\Z", $_SERVER["REQUEST_TIME"]);
echo '</pre>';
?>
</body>
</html>
