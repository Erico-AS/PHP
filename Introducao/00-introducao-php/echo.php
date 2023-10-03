<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <?php
        echo("Primeiro teste echo" . PHP_EOL);
        echo("Uso do ." . " concatenado" . "\n");
        $teste = "teste"; 
        $teste .= " adicionando por meio do '.=' ";
        echo($teste);
   ?>
   <!---->
</body>
</html>