<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aula.css">
</head>

<body>
    

    <form>
        <input type="text" name="text1">
        <input type="text" name="text2">
        <button type="submit" name="calcular">Calcular</button>

    </form>
    <p>
     <?php
     
        echo "Hello World!<br>";
    
        $num1 =$_GET['text1'];
        $num2 =$_GET['text2'];
        $resul = $num1 + $num2;


        echo "<H1> O Resultado é: $resul </H1>";

     ?></p>
     
    <form>
        <input type="text" name="text3">
        <input type="text" name="text4">
        <button type="submit" name="calcular">Calcular</button>

    </form>

    <?php

        $num3 =$_GET['text3'];
        $num4 =$_GET['text4'];
        $resul = $num3 - $num4;
        echo "<H1> O Resultado é: $resul </H1>";
    ?>
    

</body>

</html>