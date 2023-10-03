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
        function conc($palavra1, $palavra2, $palavra3) {
            echo($palavra1 . " " . $palavra2 . " " . $palavra3);
        }

        $bom = "Bom";
        $dia = "dia";
        $exclamacao = "!";

        conc($bom, $dia, $exclamacao);
   ?>
   <!---->
</body>
</html>
