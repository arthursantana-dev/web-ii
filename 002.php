<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form>

        <input type="text" name="idade" id="idade">
        <button>enviar</button>

    </form>

    <?php

        echo "hello world!";

        $idade = $_GET['idade'];

        echo "você tem $idade anos! <br>";

        echo "Você está velho!";

    ?>
</body>
</html>