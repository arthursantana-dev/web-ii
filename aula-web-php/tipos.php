<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $nome = "Arthur";
    $idade = 16 ;
    $salario = 150000.01 ;
    $casado= false;
    $endereco = "Rua Pedro Surian";
    $bairro = "Taquaral";
    $cidade = "Brotas";

    echo $nome . " tem " . $idade . " anos   <br>";
    echo $nome . " ganha " . $salario. " reais   <br>";
    echo $nome . " não é casado " . $casado . "<br>";
    echo $nome . " mora na " . $endereco . "<br>";
    echo $nome . " mora no " . $bairro . "<br>";
    echo $nome . " mora em " . $cidade . "<br>";

    ?>
</body>
</html>